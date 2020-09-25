<?php 

if (empty($_COOKIE['auth']) || $_COOKIE['auth'] !== "true") {
    header('Location: ./index.php');
    exit; 
} else {
    header("Location: ./explorer.php"); 
}

?>