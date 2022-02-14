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
<h1>Bun venit!</h1>
<h2>Va rugam introduceti datele pentru a va loga!</h2>
<div class = "loginbox">
    <form action="main_page.php" method="post">

        <p>Utilizator</p>
        <input type="text" name="nume" placeholder="Introduceti utilizator"  required>
        <p>Parola</p>
        <input type="password" name="parola" placeholder="Introduceti parola" required >

        <input type="submit" name="save" value="Login">


    </form>
</div>

<?php
session_start();
if(isset($_POST['submit'])){
    if(isset($_POST["nume"])=="admin" AND isset($_POST["parola"])=="1234")
        header("Location: http://localhost/farmacie/main_page.php");
        exit();

}

?>
</body>

</html>