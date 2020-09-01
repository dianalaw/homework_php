<?php 

/*echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

$message = "
<p>Name:{$_REQUEST["name"]}</p>
<p>Phone:{$_REQUEST["tel"]}</p>
<p>Email:{$_REQUEST["email"]}</p>
<p>Preferred contact:{$_REQUEST["contact_type"]}</p>
<p>Question:{$_REQUEST["message"]}</p>
";

//var_dump(mail('dgolubitskaya@bk.ru', 'Filled form', $message));*/

$phone = $_REQUEST['tel']; 
function checkPhone($phone) {
    $reg ='/^\+[\d -]+$/';
    return preg_match($reg, $phone, $matches) ? true : false;
}
var_dump(checkPhone($phone));

echo '<br />'; /*-----------------------------------------------------------------------------------------------*/

$email = $_REQUEST['email'];
function checkMail($email) {
    $reg ='/^\w+@\w+\.{1}\w+([\w.]+)?$/';   
    return preg_match($reg, $email, $matches) ? true : false;
}
var_dump(checkMail($email));

echo '<br />'; /*-----------------------------------------------------------------------------------------------*/

echo '<strong>Message from the visitor:</strong>'. strip_tags($_REQUEST['message']) . '<br />';


if (checkPhone($phone) && checkMail($email) && strlen($_REQUEST['message']) > 5 && strlen($_REQUEST['message']) < 250) {
    header('Location: ./form_response_positive.php');
}else {
    header ('Location: ./form_response_negative.php');
}
