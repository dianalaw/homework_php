<?php 

if (empty($_REQUEST['login']) || empty($_REQUEST['password'])) {
    header('Location: ./index.php'); 
    exit;
}

$config = parse_ini_file('./config.ini', true); //считываем конфигурационный файл 

if(password_verify($_REQUEST['login'], $config['login'])===true && password_verify($_REQUEST['password'], $config['password'])===true) {
    setcookie('auth', 'true', time() + 1800);
    
    header('Location: ./admin.php');
    exit;
} else {
    header('Location: ./index.php'); 
    exit;   
}




