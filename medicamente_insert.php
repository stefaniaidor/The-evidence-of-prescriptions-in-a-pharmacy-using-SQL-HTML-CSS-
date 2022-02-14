<?php

$con =  new mysqli('localhost','root','','farmacie');

if(!$con)
{
    echo 'Not connected to the server';
}

    $denumire = $_POST['Denumire'];
    $categorie = $_POST['Categorie'];
    $stoc = $_POST['Stoc'];
    $pret = $_POST['Pret'];
    //$variabila=filter_input(INPUT_POST, 'prod', FILTER_SANITIZE_STRING);;
    if(isset($_POST['producator'])) {
        $variabila = $_POST['producator'];
    }


    $SQL_INSERT1 = "INSERT INTO `medicamente` (MedicamentID, ProducatorID, Denumire, Categorie, Stoc, Pret)
                                    VALUES (DEFAULT, 
                                            (Select ProducatorID from producator where Denumire='$variabila'),
                                            '$denumire','$categorie', '$stoc','$pret')";

    if (mysqli_query($con, $SQL_INSERT1)){
        echo 'Query inserted successfully';
        header("Location: http://localhost/farmacie/medicamente_view.php");
    } else {
        echo 'Query not inserted';

    }
//if ($result = $con -> query($SQL_INSERT1)) {
//    echo "Returned rows are: " . $result -> num_rows;
//    // Free result set
//    $result -> free_result();
//}
//$con -> close();
    mysqli_close($con);

//}