<?php
require('C:\xampp\htdocs\farmacie/connect.php');
?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html>
<head>
    <title>Inserare Medicament</title>
</head>
<body>
<div class = "medicamenteform">
    <h1>Medicament nou</h1>
    <form action ='medicamente_insert.php' method="post">
        <p>Denumire</p>
        <input type="text" name="Denumire" placeholder="Introduceti denumirea" required>
        <p>Categorie</p>
        <input type="text" name="Categorie" placeholder="Introduceti categoria" required>
        <p>Stoc</p>
        <input type="text" name="Stoc" placeholder="Introduceti stocul" required>
        <p>Pret</p>
        <input type="text" name="Pret" placeholder="Introduceti pretul" required>
        <br>
        <br>
        <label>Alege producatorul:</label>
        <select name="producator" id="prod" multiple>
            <option value="biofarm">Biofarm</option>
            <option value="zentiva">Zentiva</option>
            <option value="sandoz">Sandoz</option>
            <option value="terapia">Terapia</option>
        </select>
        <input type="submit" name="" value="Adauga">


    </form>
</div>
</body>
</html>

<?php
session_start();
if(isset($_POST['submit'])){
    //if(isset($_POST["nume"])=="admin" AND isset($_POST["parola"])=="1234")
    header("Location: http://localhost/farmacie/client_view.php");
    exit();

}
?>

