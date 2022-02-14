<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>
    <!DOCTYPE html>
    <link rel="stylesheet" href="style.css">
    <html lang="en">
    <br/>
    <h3>Modificare</h3>
    <form method="post" >
        <p>Denumire medicament care se modifica <input type="text" placeholder="introduceti denumirea" name="denumire" required /></p>
        <p>ID producator <input type="text" placeholder="introduceti ID-ul producatorului" name="id" required /></p>
        <p>Modificari:</p>
        <p>Categorie <input  type="text" placeholder="introduceti categoria" name="categorie"   /></p>
        <p>Stoc <input type="text" placeholder="introduceti stocul" name="stoc"  /></p>
        <p>Pret<input  type="text" placeholder="introduceti pretul" name="pret"  /></p>
        <input type="submit" name="submit2" value="Modifica"/>
    </form>
    <br/>

    </html>
<?php
session_start();

    $con =  new mysqli('localhost','root','','farmacie');

    if(!$con)
    {
        echo 'Not connected to the server';
    }
    if (isset($_POST['submit2'])) {
        $denumire = $_POST['denumire'];
        $categorie = $_POST['categorie'];
        $stoc = $_POST['stoc'];
        $pret = $_POST['pret'];
        $variabila = $_POST['id'];



        $sql = "UPDATE medicamente SET Categorie='$categorie',
                        Stoc='$stoc',
                        Pret='$pret'
                        WHERE Denumire= '$denumire' and ProducatorID='$variabila'";


        if (mysqli_query($con, $sql)) {
            echo 'Query updated successfully';
            header("Location: http://localhost/farmacie/medicamente_view.php");
        } else {
            echo 'Query not updated';
            echo $sql;
        }
    }
    mysqli_close($con);


?>