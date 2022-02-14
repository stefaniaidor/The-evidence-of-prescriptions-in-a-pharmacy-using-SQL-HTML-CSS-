<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html>
<head>
    <title>Registration</title>
</head>
<body>
<div class = "registrationform">
    <h1>Client nou</h1>
    <form action ='registration_insert.php' method="post">
        <p>Introduce your first name</p>
        <input type="text" name="Prenume" placeholder="Enter your first name" required>
        <p>Introduce your last name</p>
        <input type="text" name="Nume" placeholder="Enter your last name" required>
        <p>Birth date</p>
        <input type="date" name="DataNasterii" placeholder="Enter your birth date" required>
        <p>Introduce your social security number</p>
        <input type="text" name="CNP" placeholder="Enter your social security number" required>
        <p>Introduce your gender</p>
        <input type="text" name="Sex" placeholder="Enter your gender" required>
        <p>Introduce your phone number</p>
        <input type="text" name="Telefon" placeholder="Enter your phone number" required>
        <p>Your e-mail</p>
        <input type="text" name="email" placeholder="Enter your e-mail address" required>
        <p>Pick a password</p>
        <input type="password" name="parola" placeholder="Enter Password" required>
        <input type="submit" name="" value="Create account">
    </form>
</div>

<?php
session_start();
if(isset($_POST['submit'])){
    //if(isset($_POST["nume"])=="admin" AND isset($_POST["parola"])=="1234")
        header("Location: http://localhost/farmacie/client_view.php");
    exit();

}

?>
</body>
</html>
