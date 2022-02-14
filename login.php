<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
    <title>Login page</title>
</head>
<body>
<h1>Welcome!</h1>
<h2>Please insert your data below to access your prescription!</h2>
<div class = "loginbox">
    <form action="login_check.php" method="POST">

        <p>Social Security Number</p>
        <input type="text" name="CNP" placeholder="Enter the Social Security Number" id="CNP" required>
        <p>Password</p>
        <input type="password" name="parola" placeholder="Enter Password" id = "parola" required >

        <input type="submit" name="save" value="Login">
        <a href="registration.php">Don't have an account?</a>

    </form>
</div>
</body>





</html>