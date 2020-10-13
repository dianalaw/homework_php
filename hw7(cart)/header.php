<?php 
    require_once './functions.php';

    if(!empty($_GET['product_add']) && function_exists('addCart')) addCart($_GET['product_add']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>MakeUpStore</title>
</head>
<body>
<div class="site">

    <header class="header">
        <div class="container">

            <div class="logo"><a href="/"></a></div>

            <nav class="nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>

            <?php if (function_exists('getCart')): ?>
                <div class="cart">
                    <div class="cart_ico"><a href="/cart.php"></a></div>
                    <div class="products_number"><?php getCart('widget'); ?> Products</div>
                </div>
            <?php endif; ?>

        </div>
    </header>