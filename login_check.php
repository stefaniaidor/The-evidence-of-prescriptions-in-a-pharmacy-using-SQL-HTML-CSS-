<?php

session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'farmacie';

// Conectarea la Baza de Date
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

// Verificarea conectarii la BD
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($con, $_POST['CNP']);
    $mypassword = mysqli_real_escape_string($con, $_POST['parola']);

    $sql = "SELECT clientID FROM client WHERE CNP = '$myusername' and parola = '$mypassword'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        //session_register("myusername");
        //$_SESSION["login_user"] = $myusername;
        header("Location: http://localhost/farmacie/logged_in.php");
        exit();
   }
//else if($_POST['CNP']=="admin" AND $_POST['parola']=="1234"){
//        header("Location: http://localhost/farmacie/main_page.php");
//    }
    else
            echo "Your Social Security Number or Password is invalid. In case you don't have an account, please create one!";

    }





//
//// Now we check if the data from the login form was submitted, isset() will check if the data exists.
//if ( !isset($_POST["CNP'], $_POST['parola'])) {
//    // Could not get the data that should have been sent.
//    exit('Please fill both the social security number and password fields!');
//}

//if(!empty($_POST['save'])){
//    $username = $_POST['CNP'];
//    $password = $_POST['parola'];
//    $query = "select * from client where CNP =' $username' and parola = '$password'";
//    $result=mysqli_query($con,$query);
//    $count=mysqli_num_rows($result);
//    printf("count= %d", $count);
//    if($count > 0){
//        echo "Login Successful";
//    }
//    else{
//        echo "Login unsuccessfully";
//    }
//}

//if (isset($_POST['CNP'], $_POST['parola']))
//{
//
//    $user = $_POST["CNP"];
//    $password = $_POST["parola"];
//
//    $result1 = $con->query("SELECT CNP, parola FROM client WHERE CNP = '".$user."' AND  parola = '".$password."'");
//   //$result2 = $con->query("SELECT CNP FROM client WHERE parola = '".$password."'");
//    $stmt = $con->prepare("SELECT CNP, parola FROM client WHERE CNP = '".$user."' AND  parola = '".$password."'");
//    if($stmt->num_rows() > 0 )
//    {
//        $_SESSION["logged_in"] = true;
//        $_SESSION["CNP"] = $user;
//    }
//    else
//    {
//        echo'The username or password are incorrect!';
//    }
//}

//if ($stmt = $con->prepare('SELECT clientID, parola FROM client WHERE CNP = ?')) {
//    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
//    $stmt->bind_param('s', $_POST['CNP']);
//    $stmt->execute();
//    // Store the result so we can check if the account exists in the database.
//    $stmt->store_result();
//    //$password = password_hash($_POST['parola'], PASSWORD_BCRYPT);
//    if ($stmt->num_rows > 0) {
//        $stmt->bind_result($id,$parola);
//        $stmt->fetch();
//        // Account exists, now we verify the password.
//        // Note: remember to use password_hash in your registration file to store the hashed passwords.
//        if (password_verify($_POST['parola'], $parola)) {
//            // Verification success! User has logged-in!
//            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
//            session_regenerate_id();
//            $_SESSION['loggedin'] = TRUE;
//            $_SESSION['name'] = $_POST['CNP'];
//            $_SESSION['id'] = $id;
//            header('Location: logged_in.php');
//        } else {
//            // Incorrect password
//            echo 'Incorrect password!';
//        }
//    } else {
//        // Incorrect username
//        echo 'Incorrect username!';
//    }
//    $stmt->close();
//}

