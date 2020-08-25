<div class="site"> 

<?php

 require_once './header.php';
 require_once './pagesData.php';

?>

<main class="about">
    Pages

    <?php if(!empty($pagesData)): 
    foreach($pagesData as $id => $info): ?>

    <div class="about">
        <h3><a href="#"><?php echo $info['name'] ?></a></h3>
    </div>

    <?php endforeach; 
    endif;?>


</main>

<?php require_once './footer.php';?>

</div>