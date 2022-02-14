<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">
<br/>
<h3 style="text-align:center; font-size: 25px">Statistici</h3>


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

$sql1="SELECT P.Denumire, AVG(M.Pret) AS 'Medie Preturi'
			  FROM medicamente M JOIN producator P ON M.ProducatorID=P.ProducatorID
              GROUP BY P.Denumire
              ORDER BY AVG(M.Pret) DESC";
$result = $con->query($sql1);


?>
<table style="width: 600px">
    <caption  style="font-size: 25px">Producatorii ordonati descrescator dupa media preturilor</caption>
    <tr>
        <th><u>Producator</u></th>
        <th><u>Medie preturi</u></th>
    </tr>
    <?php
    while( $rows = $result->fetch_assoc()  ) {
    ?>
    <tr>
    <th><?php echo $rows['Denumire'];?></th>
    <th><?php echo $rows['Medie Preturi'];?></th>
    </tr>
    <?php
    }
    ?>
</table>
<br/><br/><br/>



<?php

$sql2="SELECT M.Denumire AS 'Medicament',M.Stoc, P.Denumire AS 'Producator'
			  FROM medicamente M JOIN producator P ON M.ProducatorID=P.ProducatorID
			  WHERE M.Denumire NOT IN (SELECT MM.Denumire
										FROM medicamente MM JOIN medicamentedistribuitor MDD ON MM.MedicamentID=MDD.MedicamentID
										GROUP BY MM.Denumire
										HAVING COUNT(MDD.MedicamentID)=1)
			  ORDER BY M.Stoc DESC";
$result = $con->query($sql2);


?>
<table style="width: 600px">
    <caption  style="font-size: 25px">Medicamente al caror producator lucreaza cu mai multi distribuitori, ordonate dupa stoc</caption>
    <tr>
        <th><u>Medicament</u></th>
        <th><u>Stoc</u></th>
        <th><u>Producator</u></th>
    </tr>
    <?php
    while( $rows = $result->fetch_assoc()  ) {
        ?>
        <tr>
            <th><?php echo $rows['Medicament'];?></th>
            <th><?php echo $rows['Stoc'];?></th>
            <th><?php echo $rows['Producator'];?></th>
        </tr>
        <?php
    }
    ?>
</table>
<br/><br/><br/>

<?php


$sql3="SELECT month(DataEliberarii) luna, count(retetaID) Numar_Retete
       FROM reteta
       GROUP BY month(DataEliberarii)
       HAVING count(retetaID)=
		        (SELECT max(s.nr)
		        FROM (select(count(retetaID)) AS nr
		        FROM reteta
		        GROUP by month(DataEliberarii)) AS s)";
$result = $con->query($sql3);


?>
<table style="width: 600px">
    <caption  style="font-size: 25px">Luna in care s-au emis cele mai multe retete si numarul acestora</caption>
    <tr>
        <th><u>Luna</u></th>
        <th><u>Numar retete emise in aceasta luna </u></th>
    </tr>
    <?php
    while( $rows = $result->fetch_assoc()) {
        ?>
        <tr>
            <th><?php echo $rows['luna'];?></th>
            <th><?php echo $rows['Numar_Retete'];?></th>

        </tr>
        <?php
    }
    ?>
</table>
<br/><br/><br/>


<?php
$sql4="SELECT DISTINCT M.Denumire, M.Categorie, M.Pret, R.MedicamentID
       FROM medicamente AS M
	        INNER JOIN
	        ( SELECT MAX(MM.Pret) AS PrMax, RR.MedicamentID
	        FROM medicamente AS MM
	        INNER JOIN medicamentereteta AS RR ON MM.MedicamentID = RR.MedicamentID
            GROUP BY RR.MedicamentID
	        ) AS R ON M.MedicamentID = R.MedicamentID AND R.PrMax = M.Pret
        ORDER BY M.Pret DESC";
$result = $con->query($sql4);


?>
<table style="width: 600px">
    <caption  style="font-size: 25px">Medicamentele din fiecare categorie care costa cel mai mult, sortate in ordinea descrescatoare a pretului</caption>
    <tr>
        <th><u>Denumire</u></th>
        <th><u>Categorie</u></th>
        <th><u>Pret</u></th>
        <th><u>MedicamentID</u></th>
    </tr>
    <?php
    while( $rows = $result->fetch_assoc()) {
        ?>
        <tr>
            <th><?php echo $rows['Denumire'];?></th>
            <th><?php echo $rows['Categorie'];?></th>
            <th><?php echo ($rows['Pret']);?></th>
            <th><?php echo $rows['MedicamentID'];?></th>



        </tr>
        <?php
    }
    ?>
</table>
<br/><br/><br/>


