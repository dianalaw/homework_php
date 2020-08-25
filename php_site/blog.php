<div class="site"> 

<?php require_once './header.php';?>
<?php require_once './pagesData.php';?>

<main class="main">
    <div class="container">
        <h2>Blog</h2>
        <p class="under_title">Proin iaculis purus consequat sem cure.</p>

        <?php if(!empty($pagesData)): 
        foreach($pagesData as $id => $article): ?>

            <div class="blog">

                <div class="article">
                    <h3><?php echo $article['Blog']['article_1']['header']; ?></h3>
                    <div class="content"><?php echo $article['Blog']['article_1']['content']; ?></div>
                    <img src="<?php echo $article['img']; ?>" alt="Article picture">

                </div>


            </div>

        <?php endforeach; 
        endif;?>

    </div>
</main>

<?php require_once './footer.php';?>

</div>