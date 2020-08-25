<div class="site"> 

<?php require_once './header.php';
require_once './pagesData.php';?>

<main class="main">
    <div class="container">
        <h2>About us</h2>
        <p class="under_title">Proin iaculis purus consequat sem cure.</p>


        <?php if(!empty($pagesData)): 
        foreach($pagesData as $id => $info): ?>

        <div class="about">

            <img src="<?php echo $info['team_photo']; ?>" alt="Team photo">

            <p><?php echo $info['history'];?></p>

            <p><?php echo $info['staff'];?></p>

        </div>

        <?php endforeach; 
        endif;?>

    </div>
</main>

<?php require_once './footer.php';?>

</div>