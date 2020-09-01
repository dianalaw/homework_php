<?php

require_once './header.php'; 
require_once './pagesData.php';

 ?>

<section class="about">
    <div class="container">

        <h2>About us</h2>
        <p class="under_title">Proin iaculis purus consequat sem cure.</p>

        <?php if(!empty($pagesData)): ?>

            <div class="history">
                <h3>Our history</h3>
                <p><?php echo $pagesData['about']['history']; ?></p>
            </div> 

            <img src="<?php echo $pagesData['about']['staff_photo'] ?>" alt="Staff photo">
            
            <div class="our_staff">
                <h3>Staff members</h3>
                <p><?php echo $pagesData['about']['staff']; ?></p>
            </div>

        <?php  endif; ?>
        
    </div>
</section>

<?php require_once './footer.php'; ?>