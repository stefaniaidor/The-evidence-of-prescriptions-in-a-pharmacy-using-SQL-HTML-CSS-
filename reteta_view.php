<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">
<br/>
<h3>Afisarea tuturor retetelor pe care un pacient le detine</h3>
<form method="post" >
    <p>Introduceti numele pacientului <input type="text" placeholder="Introduceti numele" name="nume" required /></p>
    <p>Introduceti CNP-ul pacientului <input type="text" placeholder="Introduceti CNP-ul" name="cnp" required /></p>
    <input type="submit" name="submit" value="Cautare"/>
    <input type="submit" name="submit2" value="Pagina principala" onClick="Javascript:window.location.href = 'http://localhost/farmacie/main_page.php';"/>
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
if(isset($_POST['submit'])) {
$nume = $_POST['nume'];
$cnp = $_POST['cnp'];
$sql = "SELECT  R.DataEliberarii, R.DataExpirarii, R.Medic, R.Serie, R.Numar
			  FROM reteta R JOIN client C ON R.ClientID=C.ClientID
              WHERE C.Nume= '$nume' and C.CNP = '$cnp'";
$result = $con->query($sql);
?>

<table>
    <tr>

        <th>Data Eliberarii</th>
        <th>Data Expirarii</th>
        <th>Medic</th>
        <th>Serie</th>
        <th>Numar</th>

    </tr>
    <?php

    while( $rows = $result->fetch_assoc() ) {
    ?>
    <tr>
        <!--FETCHING DATA FROM EACH
            ROW OF EVERY COLUMN-->

        <td><?php echo $rows['DataEliberarii'];?></td>
        <td><?php echo $rows['DataExpirarii'];?></td>
        <td><?php echo $rows['Medic'];?></td>
        <td><?php echo $rows['Serie'];?></td>
        <td><?php echo $rows['Numar'];?></td>

        <?php
        }


        echo'</tr>';
        ?>
    </tr>
    <?php

    }
    ?>
