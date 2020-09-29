<?php 
if (empty($_COOKIE['auth']) || $_COOKIE['auth'] !== "true") {
    header('Location: ./index.php');
    exit; 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Admin panel</title>
</head>
<body>

<div class="logout"><a href="./logout.php">Log out</a></div>

<!--<p><?php //$hash = password_hash("123", PASSWORD_DEFAULT); echo $hash; ?></p> 
<p><?php //var_dump(password_verify("123", $hash)); ?></p>-->

<?php //$log_hash = password_hash("admin", PASSWORD_DEFAULT); echo $log_hash; ?> 
<?php //var_dump(password_verify("admin", $log_hash)); ?>


<div class="list">
<?php

    $dir_array = [];
    $files_array = [];

    $basePath = !empty($_GET['path']) ? $_GET['path'] : './';

    if (is_dir($basePath))  { // it is better to have a function here 
        $dd = opendir($basePath);

        while(($item = readdir($dd))) {

            if (is_dir($basePath . $item)) {
                array_push($dir_array, $item);
            } else array_push($files_array, $item);

        }
    } else {
        array_push($dir_array, '..');
    }

    sort($dir_array);
    sort($files_array);

//creating a list of files and catalogues available in the directory   
    $list = '';
    foreach ($dir_array as $dir) {

        $path = $basePath . $dir . '/';

        if ($dir == '.') continue;

        if ($dir == '..') {
            $basePathArr = explode('/', $basePath);
            if(is_dir($basePath)) array_pop($basePathArr);
            $lastItem = array_pop($basePathArr);

            if ($lastItem != '.' && $lastItem != '..') {
                $path = implode('/', $basePathArr) . '/';
            }
        }

        $list .= '<li><a href = "./explorer.php?path='. $path . '">' . $dir . '</a></li>';
    }

    foreach ($files_array as $file) {
        $list .= '<li><a href = "./explorer.php?path='. $basePath . $file . '">' . $file . '</a></li>';
    }

    if (!empty($list)) 
    echo '
    <ul>
        <li><a href = "./explorer.php">.</a></li>'
        . $list . 
    '</ul>'; 
?>
</div>

<!--Editing files -->

<?php
    if (is_file($basePath)) {
        $content = htmlspecialchars(file_get_contents($basePath));

        echo '<strong><i>Last modification:</i></strong> ';
        print_r(date("d.m.Y G:i:s", stat($basePath)['mtime']));
        echo '<div><strong><i>File size</i></strong> ' . filesize($basePath)/1000 . 'Kb</div>';
        echo '<strong><i>Full path:</i></strong> ' . $basePath;

        echo '<form method = "POST">
        <textarea name = "filecontent" style="width:100%; height:200px;">'. $content .'</textarea>
        <button class="button"> Save changes </button>
        </form>';
    }

    if (!empty($_POST['filecontent'])) {
        file_put_contents($basePath, htmlspecialchars_decode($_POST['filecontent']));
        header("Location:" . $_SERVER['REQUEST_URI']);
    }
?>

<!--Uploading files -->

<div class="upload_tools">
<h3>Upload files</h3>

<form action ="/admin/uploader.php" method="POST" enctype="multipart/form-data">
    <input type="file" multiple name="files[]">
    <button class="button" name="submit">Send</button>
</form>
</div>

<!--Deleting catalogues and files--> 

<div class="delete_tools">
<h3>Delete files or catalogues</h3>
<form method="POST">

    <?php $deletePath = $basePath . (!empty($_GET['files']) ? '/' . $_GET['files'] : ''); ?>

    <input type="hidden" name="path" value="<?php echo $deletePath; ?>">
    <input type="hidden" name="action" value="delete">

    Would you like to delete this?: <?php echo $deletePath . '<br/>'; ?>
    <button class="button">Delete</button>

</form>
</div>

<?php 
function remove_dir($path) {

    if (is_file($path)) {
        unlink($path);
        return true;
    }

    if(is_dir($path)) {
        $dir_list = scandir($path);

        unset($dir_list[array_search('.', $dir_list)]);
        unset($dir_list[array_search('..', $dir_list)]);

        if (count($dir_list) == 0) {
            rmdir($path);
            return true;
        }

        foreach($dir_list as $item) {       
           remove_dir($path . '/' . $item); 
        }
    }

    if (file_exists($_POST['path'])) remove_dir($_POST['path']);
    else return true;

    return false;
};

if(!empty($_POST['path']) && !empty($_POST['action']) && $_POST['action']=='delete') {

    if (remove_dir($_POST['path'])) header("Location:./explorer.php");
}
?>

<!--Creating catalogues and files--> 

<div class="create_tools">
    <h3>Create files or catalogues</h3>

    <form method="POST">
        <input type="hidden" name="action" value="create">

        <input type="text" name="name" placeholder="name" /><br/>
        <input checked type="radio" name="type" value="file" /> File <br/>
        <input type="radio" name="type" value="catalogue" /> Catalogue <br/>
        <button class="button">Create</button>
    </form>
</div>

<?php 
    if (!empty($_POST['name']) && !empty($_POST['type']) && !empty($_POST['action']) && $_POST['action']=='create') {

        $createPath = $basePath . '/' . $_POST['name'];

        switch ($_POST['type']) {
            case 'file':
                $fd = fopen($createPath, 'w');
                fclose($fd);
            break;
            case 'catalogue':
                mkdir($createPath);
            break;
        }

        header("Location: ./explorer.php");
    }

?>

<!--Renaming catalogues and files--> 

<div class="rename_tools">
    <h3>Rename catalogues and files</h3>
    <form method="POST">

    <?php $renamePath = $basePath . (!empty($_GET['files']['name']) ? '/' . $_GET['files']['name'] : ''); ?>

    Old name: <?php echo $renamePath; ?> <br/>
    <input type="text" name="newName" placeholder="enter new name"><br/>
    <button name="submit" class="button" >Submit</button>
    
    </form>
</div>

<?php

    $newPath=dirname($renamePath);
    if (!empty($_POST['newName']) && isset($_POST['submit'])) {
        rename($renamePath, $newPath . '/'. $_POST['newName']);
        header("Location: ./explorer.php?path=$newPath");
    }
?>
    
</body>
</html>