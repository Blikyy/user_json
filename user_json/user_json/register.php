<?php
include("register_back.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/register_style.css">
    <title>Register</title>
</head>
<body>
<div class="body-container">
    <div class="form-container">
        <form action="login_back.php" class="form" method="post">
            <div class="form-content">
                <input type="text" placeholder="Username" class="input" name="username">
                <br>
                <input type="text" placeholder="Password" class="input" name="password">
                <br>
                <input type="text" placeholder="Psw. again" class="input" name="psw_again">
                <br>
                <input type="email" placeholder="E-mail" class="input" name="email">
                <br>
                <button class="btn" type="button" name="register">OK</button>
                <br>
            </div>
            <a href="index.php" class="register">BACK</a>
        </form>
    </div>
    <a href=""></a>
    </div>
    <a href="main_page.php">back</a>
</body>
</html>