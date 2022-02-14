<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">
<br/>
<h3>Afisarea medicamentelor distribuite in numar mai mare de 100</h3>


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

$sql = "SELECT  M.Denumire, M.Categorie, MD.NumarBucati
			  FROM medicamente M JOIN medicamentedistribuitor MD ON M.MedicamentID=MD.MedicamentID
				                 JOIN distribuitor D ON MD.DistribuitorID=D.DistribuitorID
              WHERE MD.NumarBucati>100";
$result = $con->query($sql);
?>

<table>
    <tr>

        <th>Denumire medicament</th>
        <th>Categorie</th>
        <th>Număr Bucăți</th>


    </tr>
    <?php

    while( $rows = $result->fetch_assoc() ) {
    ?>
    <tr>
        <!--FETCHING DATA FROM EACH
            ROW OF EVERY COLUMN-->

        <td><?php echo $rows['Denumire'];?></td>
        <td><?php echo $rows['Categorie'];?></td>
        <td><?php echo $rows['NumarBucati'];?></td>


        <?php
        }


        echo'</tr>';
        ?>
    </tr>


