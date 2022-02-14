<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">
<br/>
<h3>Afisarea acelor pacienti a caror reteta expira in luna ianuarie a anului curent</h3>


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

$sql = "SELECT  C.Nume, C.Prenume
			  FROM client C JOIN reteta R ON C.ClientID=R.ClientID                 
              WHERE R.DataExpirarii>'2022-01-01' and R.DataExpirarii < '2022-01-31'";
$result = $con->query($sql);
?>

<table>
    <tr>

        <th>Nume</th>
        <th>Prenume</th>


    </tr>
    <?php

    while( $rows = $result->fetch_assoc() ) {
    ?>
    <tr>
        <!--FETCHING DATA FROM EACH
            ROW OF EVERY COLUMN-->

        <td><?php echo $rows['Nume'];?></td>
        <td><?php echo $rows['Prenume'];?></td>


        <?php
        }


        echo'</tr>';
        ?>
    </tr>


