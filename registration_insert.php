<?php
$con = new mysqli('localhost','root','','farmacie');

if(!$con)
{
    echo 'Not connected to the server';
}

$nume = $_POST['Nume'];
$prenume = $_POST['Prenume'];
$datanasterii = $_POST['DataNasterii'];
$cnp = $_POST['CNP'];
$sex = $_POST['Sex'];
$telefon = $_POST['Telefon'];
$email = $_POST['email'];
$parola = $_POST['parola'];


$SQL_INSERT = "INSERT INTO `client` (clientID, Nume, Prenume, DataNasterii, CNP, Sex, Telefon, Email,Parola)
                                    VALUES (DEFAULT, '$nume','$prenume', '$datanasterii','$cnp','$sex', '$telefon', '$email','$parola')";

if(!mysqli_query($con, $SQL_INSERT)) {
    echo 'Query not inserted';
} else {
    echo 'Query inserted successfully';
    header("Location: http://localhost/farmacie/client_view.php");
}
?>