<?php 

if (empty($_REQUEST['login']) || empty($_REQUEST['password'])) {
    header('Location: ./index.php'); 
    exit;
}

$config = parse_ini_file('./config.ini', true); //считываем конфигурационный файл 

if($config['login'] === $_REQUEST['login'] && $config['password'] === $_REQUEST['password']) {
    setcookie('auth', 'true', time() + 86400);
    
    header('Location: ./admin.php');
    exit;
} else {
    header('Location: ./index.php'); 
    exit;   
}




