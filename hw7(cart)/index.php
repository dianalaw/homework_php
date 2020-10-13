<?php 
require_once './header.php'; 
?>

    <main class="main">
        <div class="container">

            <h2>Products list</h2>

            <?php if (function_exists('showProducts')): ?>
                <div class="products">

                    <?php showProducts(); ?>

                </div>
            <?php endif; ?>

        </div>
    </main>

<?php require_once './footer.php'; ?>
