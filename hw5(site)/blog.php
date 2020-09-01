<?php 
require_once './header.php';
require_once './pagesData.php';
?>

<section class="blog">
    <div class="container">

        <h2>Blog</h2>
        <p class="under_title">Proin iaculis purus consequat sem cure.</p>

        <?php if(!empty($pagesData)): ?>

            <div class="article">
                <h3><?php echo $pagesData['blog']['article_1']['name']; ?></h3>
                <p><?php echo $pagesData['blog']['article_1']['content']; ?></p>
            </div> 

            <div class="article">
                <img class = "img_right" src="<?php echo $pagesData['blog']['article_2']['img']; ?>" alt="Technology">
                <h3><?php echo $pagesData['blog']['article_2']['name']; ?></h3>
                <p><?php echo $pagesData['blog']['article_2']['content']; ?></p>
            </div> 

            <div class="article">
                <img class = "img_left" src="<?php echo $pagesData['blog']['article_3']['img']; ?>" alt="Bitcoin">
                <h3><?php echo $pagesData['blog']['article_3']['name']; ?></h3>
                <p><?php echo $pagesData['blog']['article_3']['content']; ?></p>
            </div> 

            <div class="article">
                <h3><?php echo $pagesData['blog']['article_4']['name']; ?></h3>
                <p><?php echo $pagesData['blog']['article_4']['content']; ?></p>
            </div> 

            <div class="article">
                <h3><?php echo $pagesData['blog']['article_5']['name']; ?></h3>
                <p><?php echo $pagesData['blog']['article_5']['content']; ?></p>
                <button class="button"><a href="/contact.php"><?php echo $pagesData['blog']['article_5']['button']; ?></a></button>
            </div> 
    
        <?php  endif; ?>
    
    </div>
</section>

<?php require_once './footer.php'; ?>