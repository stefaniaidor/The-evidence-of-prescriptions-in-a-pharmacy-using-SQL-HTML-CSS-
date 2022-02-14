<?php
require('C:\xampp\htdocs\farmacie/connect.php');
$con = new mysqli('localhost','root','','farmacie');
$sql = "SELECT * FROM client ORDER BY ClientID ASC ";
$result = $con->query($sql);
$con->close();
?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detalii clienti</title>
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
    <h1>Detalii Clienti</h1>
    <!-- TABLE CONSTRUCTION-->
    <table>
        <tr>
            <th>Nr. crt</th>
            <th>Nume</th>
            <th>Prenume</th>
            <th>Data nasterii</th>
            <th>CNP</th>
            <th>Sex</th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Parola</th>
        </tr>
        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
        <?php   // LOOP TILL END OF DATA
        while($rows = $result->fetch_assoc())
        {
            ?>
            <tr>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['ClientID'];?></td>
                <td><?php echo $rows['Nume'];?></td>
                <td><?php echo $rows['Prenume'];?></td>
                <td><?php echo $rows['DataNasterii'];?></td>
                <td><?php echo $rows['CNP'];?></td>
                <td><?php echo $rows['Sex'];?></td>
                <td><?php echo $rows['Telefon'];?></td>
                <td><?php echo $rows['Email'];?></td>
                <td><?php echo $rows['Parola'];?></td>
            </tr>
            <?php
        }

        ?>
    </table>
    <input type="submit" name="submit2" value="Pagina principala" onClick="Javascript:window.location.href = 'http://localhost/farmacie/main_page.php';"/>
</section>
</body>

</html>