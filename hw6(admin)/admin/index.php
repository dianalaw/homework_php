<?php 
if (!empty($_COOKIE['auth'])) {
    header("Location:./admin.php");
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login to admin panel</title>
</head>
<body>
<div class="login">

<h3>Log in to admin panel</h3>

<form action="./login.php" method="POST">

    <input type="text" name="login" placeholder="Login"> <br/>
    <input type="text" name="password" placeholder="Password"> <br/>
    <button class="button">Submit</button>

</form>
</div>

</body>
</html>

