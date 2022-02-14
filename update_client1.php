
<?php
session_start();

$con =  new mysqli('localhost','root','','farmacie');

if(!$con)
{
    echo 'Not connected to the server';
}
if (isset($_POST['submit2'])) {
    $nume = $_POST['Nume'];
    $prenume = $_POST['prenume'];
    $datanasterii = $_POST['datanasterii'];
    $cnp = $_POST['cnp'];
    $sex = $_POST['sex'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $parola = $_POST['parola'];


    $sql = "UPDATE client SET Prenume='$prenume',
                        DataNasterii='$datanasterii',
                        CNP='$cnp',
                        Sex = '$sex',
                        Telefon='$telefon',
                        Email='$email',
                        Parola='$parola'
                        WHERE Nume = '$nume'";


    if (mysqli_query($con, $sql)) {
        echo 'Query updated successfully';
        header("Location: http://localhost/farmacie/client_view.php");
    } else {
        echo 'Query not updated';
        echo $sql;
    }
}
    mysqli_close($con);


//    $result = mysqli_query($con,"SELECT * FROM client WHERE Nume='" . $_GET['Nume'] . "'");
//    $row= mysqli_fetch_array($result);
//    $execute = mysqli_query($con,$sql);
//    if($execute){
//        header("Location: http://localhost/farmacie/client_view.php");
//    }
//    else{
//        echo $con->error;
//    }










