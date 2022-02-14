<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>
    <!DOCTYPE html>
    <link rel="stylesheet" href="style.css">
    <html lang="en">
    <br/>
    <h3>Elimina client</h3>
    <form  method="post" >
        <p>Nume client care se sterge <input type="text" placeholder="introduceti numele" name="Nume" required /></p>
        <p>CNP client <input type="text" placeholder="introduceti CNP-ul" name="cnp" required /></p>
        <input type="submit" name="submit5" value="Stergere">
    </form>
    <br/>

    </html>
<?php
session_start();
//if(isset($_POST['submit'])) {
//    header("Location: http://localhost/farmacie/stergere.php");
//}

$con =  new mysqli('localhost','root','','farmacie');

if(!$con)
{
    echo 'Not connected to the server';
}
if(isset($_POST['submit5'])) {
    $nume = $_POST['Nume'];
    $cnp = $_POST['cnp'];
    $sql = "DELETE FROM client WHERE Nume= '$nume' and CNP='$cnp'";
    //mysqli_query($con, $sql);

    if (!mysqli_query($con, $sql)) {
        echo 'Query not deleted';
    } else {
        echo 'Query deleted successfully';
        header("Location: http://localhost/farmacie/client_view.php");
    }
}

?>