<?php

session_start();

?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html>
<body>
<head>
    </div>
    <h1>Selecteaza actiunea pe care doresti sa o realizezi : </h1>

        <form action="medicamente.php" method="post">
            <button class="button5" type="submit" style="margin:5px">Insereaza un nou medicament in baza de date</button>
        </form>

        <form action="update_medicament.php" method="post">
            <button class="button5" type="submit" style="margin:5px">Modifica date despre un medicament</button>
        </form>

        <form action="stergere.php" method="post">
            <button class="button5" type="submit" style="margin:5px">Sterge un medicament</button>
        </form>

        <form action="registration.php" method="post">
            <button class="button5" type="submit" style="margin:5px">Adauga client nou</button>
        </form>

        <form action="update_client.php" method="post">
            <button class="button5" type="submit" style="margin:5px">Modifica datele unui client</button>
        </form>

        <form action="sterge_client.php">
            <button class="button5" type="submit" style="margin:5px">Elimina client din baza de date</button>
        </form>

        <form action="medicamente_view2.php">
            <button class="button5" type="submit" style="margin:5px">Afiseaza detalii despre toate medicamentele distribuite de un distribuitor selectat</button>
        </form>

        <form action="medicamente_view3.php">
            <button class="button5" type="submit" style="margin:5px">Afiseaza medicamentele prescrise pe o reteta selectata</button>
        </form>

        <form action="reteta_view.php">
            <button class="button5" type="submit" style="margin:5px">Afiseaza toate retetele unui pacient selectat</button>
        </form>

        <form action="medicamente_view4.php">
            <button class="button5" type="submit" style="margin:5px">Afiseaza cel mai scump medicament care are ca producator "Zentiva" </button>
        </form>

        <form action="medicamente_view5.php">
            <button class="button5" type="submit" style="margin:5px">Afiseaza acele medicamente al caror numar de bucati distribuite este mai mare decat 100</button>
        </form>

        <form action="client_view2.php">
            <button class="button5" type="submit" style="margin:5px">Afisati acei pacienti a caror reteta expira in luna ianuarie a anului curent</button>
        </form>

        <form action="statistici.php">
        <button class="button5" type="submit" style="margin:5px">Mai multe statistici</button>
        </form>




    </div>

</head>

</body>
</html>
