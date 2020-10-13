<?php 
require_once './header.php'; 
?>

    <main class="main">
        <div class="container">

        <h2>Cart</h2>

        <?php if (function_exists('getCart')): ?>

            <div class="cart_products">

                <?php getCart('page'); ?>

            </div>

        <?php endif; ?>

        </div>
    </main>

<?php require_once './footer.php'; ?>
