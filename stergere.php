<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>
    <!DOCTYPE html>
    <html lang="en">
    <br/>
    <h3>Stergere medicament</h3>
    <form  method="post" >
        <p>Nume medicament care se sterge <input type="text" placeholder="introduceti numele" name="denumire" required /></p>
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
    $nume = $_POST['denumire'];
    $sql = "DELETE FROM medicamente WHERE Denumire= '$nume'";
    //mysqli_query($con, $sql);

    if (!mysqli_query($con, $sql)) {
        echo 'Query not deleted';
    } else {
        echo 'Query deleted successfully';
        header("Location: http://localhost/farmacie/medicamente_view.php");
    }
}

?>