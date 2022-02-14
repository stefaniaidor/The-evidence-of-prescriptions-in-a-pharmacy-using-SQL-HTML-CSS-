<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">
<br/>
<h3>Afisarea celui mai scump medicament produs de Zentiva</h3>
    <input type="submit" name="submit2" value="Pagina principala" onClick="Javascript:window.location.href = 'http://localhost/farmacie/main_page.php';"/>

<br/>

</html>

<?php
session_start();
$con =  new mysqli('localhost','root','','farmacie');

if(!$con)
{
    echo 'Not connected to the server';
}

$sql = "SELECT  M.Denumire, MAX(M.Pret) AS 'Pret'
			  FROM medicamente M JOIN producator P ON M.ProducatorID=P.ProducatorID
				                 WHERE P.Denumire='Zentiva'";

$result = $con->query($sql);
?>

<table>
    <tr>

        <th>Denumire medicament</th>
        <th>Pret</th>


    </tr>
    <?php

    while( $rows = $result->fetch_assoc() ) {
    ?>
    <tr>
        <!--FETCHING DATA FROM EACH
            ROW OF EVERY COLUMN-->

        <td><?php echo $rows['Denumire'];?></td>
        <td><?php echo $rows['Pret'];?></td>


        <?php
        }


        echo'</tr>';
        ?>
    </tr>


