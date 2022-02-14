<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>
<!DOCTYPE html>
    <link rel="stylesheet" href="style.css">
<html lang="en">
<br/>
<h3>Modificare</h3>
<form action="update_client1.php" method="post" >
    <p>Nume client care se modifica <input type="text" placeholder="introduceti numele" name="Nume" required /></p>
    <p>Modificari:</p>
    <p>Prenume <input  type="text" placeholder="introduceti prenume" name="prenume"   /></p>
    <p>Data Nasterii <input type="date" placeholder="introduceti data nasterii" name="datanasterii"  /></p>
    <p>CNP <input  type="text" placeholder="introduceti CNP" name="cnp"  /></p>
    <p>Sex <input type="text" placeholder="introduceti sexul" name="sex"  /></p>
    <p>Telefon <input  type="text" placeholder="introduceti nr de telefon" name="telefon"  /></p>
    <p>Email <input  type="text" placeholder="introduceti email-ul" name="email"  /></p>
    <p>Parola <input class="caseta2" type="text" placeholder="introduceti parola" name="parola"  /></p>
    <input type="submit" name="submit2" value="Modifica"/>
</form>
<br/>

</html>
<?php
session_start();
if(isset($_POST['submit2'])) {
    header("Location: http://localhost/farmacie/update_client1.php");
    exit();
}
?>