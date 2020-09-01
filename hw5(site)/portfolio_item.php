<?php if(!empty($_GET['portfolio_item_id']) && !empty($pagesData)):
    $portfolio_item = $pagesData['portfolio'][$_GET['portfolio_item_id']]; ?>

    <h3><?php echo $portfolio_item['caption']?></h3>
    <img src="<?php echo $portfolio_item['img'] ?>" alt="Portfolio image">
    <p><?php echo $portfolio_item['content'] ?></p>

<?php endif; ?>