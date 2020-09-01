<?php 
require_once './header.php';
require_once './pagesData.php'; 
?>

<section class="portfolio">
    <div class="container">
        <?php if(empty($_GET['portfolio_item_id'])): ?>

        <h2>Portfolio</h2>
        <p class="under_title">Proin iaculis purus consequat sem cure.</p>

        <div class="wrapper">
            <?php if(!empty($pagesData)): foreach($pagesData['portfolio'] as $id => $item): ?>

                <div class="portfolio_item">
                    <h3><?php echo $item['caption']?></h3>
                    <a href="/portfolio.php?portfolio_item_id=<?php echo $id; ?>"><img src="<?php echo $item['img'] ?>" alt="Portfolio image"></a>
                </div>

            <?php endforeach; endif; ?>
        </div>

        <?php else: require_once './portfolio_item.php';
        endif; ?>

    </div>
</section>

<?php require_once './footer.php'; ?>