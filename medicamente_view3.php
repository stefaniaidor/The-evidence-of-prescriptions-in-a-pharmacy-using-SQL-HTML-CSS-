<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">
<br/>
<h3>Afisarea tuturor medicamentelor continute pe reteta selectata</h3>
<form method="post" >
    <p>Introduceti seria retetei <input type="text" placeholder="Introduceti seria" name="serie" required /></p>
    <p>Introduceti numarul retetei <input type="text" placeholder="Introduceti numarul" name="numar" required /></p>
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
$serie = $_POST['serie'];
$nr = $_POST['numar'];
$sql = "SELECT  M.Denumire
			  FROM medicamente M JOIN medicamentereteta MR ON M.MedicamentID=MR.MedicamentID
				                 JOIN reteta R ON MR.RetetaID=R.RetetaID
              WHERE R.Serie= '$serie' and R.Numar = '$nr'";
$result = $con->query($sql);
?>

<table>
    <tr>

        <th>Denumire medicament</th>

    </tr>
    <?php

    while( $rows = $result->fetch_assoc() ) {
    ?>
    <tr>
        <!--FETCHING DATA FROM EACH
            ROW OF EVERY COLUMN-->

        <td><?php echo $rows['Denumire'];?></td>

        <?php
        }


        echo'</tr>';
        ?>
    </tr>
    <?php

    }
    ?>
