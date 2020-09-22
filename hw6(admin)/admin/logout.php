<?php 
setcookie('auth', '', time() - 10);
header("Location:./index.php");
exit;
    