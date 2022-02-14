<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">
<br/>
<h3>Afisare detalii despre toate medicamentele distribuite de distribuitorul dorit</h3>
<form method="post" >
    <p>Cine este distribuitorul? <input type="text" placeholder="Introduceti denumirea" name="Denumire" required /></p>
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
    $denumire = $_POST['Denumire'];
    $sql = "SELECT  M.Denumire, M.Stoc, M.Pret
			  FROM medicamente M JOIN medicamentedistribuitor MD ON M.MedicamentID=MD.MedicamentID
				                 JOIN distribuitor D ON MD.DistribuitorID=D.DistribuitorID
              WHERE D.Denumire= '$denumire'";
    $result = $con->query($sql);
    ?>

<table>
        <tr>

            <th>Denumire medicament</th>
            <th>Stoc</th>
            <th>Pret</th>

        </tr>
    <?php

    while( $rows = $result->fetch_assoc() ) {
?>
<tr>
    <!--FETCHING DATA FROM EACH
        ROW OF EVERY COLUMN-->

    <td><?php echo $rows['Denumire'];?></td>
    <td><?php echo $rows['Stoc'];?></td>
    <td><?php echo $rows['Pret'];?></td>

    <?php
    }


    echo'</tr>';
    ?>
</tr>
<?php

}
?>
