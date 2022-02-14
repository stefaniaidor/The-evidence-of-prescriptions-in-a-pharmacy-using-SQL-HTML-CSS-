<?php
require('C:\xampp\htdocs\farmacie/connect.php');
$con = new mysqli('localhost','root','','farmacie');
$sql = "SELECT * FROM medicamente ORDER BY MedicamentID ASC ";
$result = $con->query($sql);
//$con->close();
?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lista medicamente</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
    </style>
</head>

<body>
<section>
    <h1>Lista medicamente</h1>
    <!-- TABLE CONSTRUCTION-->
    <table>
        <tr>
            <th>ID medicament</th>
            <th>ID producator</th>
            <th>Denumire</th>
            <th>Categorie</th>
            <th>Stoc</th>
            <th>Pret</th>



        </tr>
        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        <?php   // LOOP TILL END OF DATA



        while($rows = $result->fetch_assoc())
        {
            ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['MedicamentID'];?></td>
                <td><?php echo $rows['ProducatorID'];?></td>
                <td><?php echo $rows['Denumire'];?></td>
                <td><?php echo $rows['Categorie'];?></td>
                <td><?php echo $rows['Stoc'];?></td>
                <td><?php echo $rows['Pret'];?></td>


                <?php
        }


                    echo'</tr>';
?>
            </tr>
            <?php


        ?>
    </table>
    <input type="submit" name="submit2" value="Pagina principala" onClick="Javascript:window.location.href = 'http://localhost/farmacie/main_page.php';"/>

<!--
</section>
</body>

</html>