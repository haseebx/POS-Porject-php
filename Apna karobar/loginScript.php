<?php

session_start();

$server = "localhost";

$serverName = "root";

$password = "";

$database = "authication";

$connection = null;

try {
    $con = mysqli_connect($server, $serverName, $password, $database);

    if ($con) {
        //echo "Data base connection successFull";
    }
} catch (Exception $errormessage) {

    echo $errormessage->getMessage();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($con, $_POST['username']);
    $mypassword = mysqli_real_escape_string($con, $_POST['password']);

    // $myusername = $_POST['X_Username'];
    // $mypassword = $_POST['X_Pass'];

    $sql = "SELECT id FROM info WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        // session_register("myusername");
        //$_SESSION['login_user'] = $myusername;

        header("location: index.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}

/*if (!isset($_POST['username'], $_POST['password'])) {
// Could not get the data that should have been sent.
exit('Please fill both the username and password fields!');
}/*
if ($stmt = $con->prepare('SELECT id, password FROM info WHERE username = ?')) {
// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
$stmt->bind_param('s', $_POST['username']);
$stmt->execute();
// Store the result so we can check if the account exists in the database.
$stmt->store_result();

if ($stmt->num_rows > 0) {
$stmt->bind_result($id, $password);
$stmt->fetch();
// Account exists, now we verify the password.
// Note: remember to use password_hash in your registration file to store the hashed passwords.
if ($_POST['password'] === $password) {
// Verification success! User has logged-in!
// Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
// session_regenerate_id();
//$_SESSION['loggedin'] = TRUE;
//$_SESSION['name'] = $_POST['username'];
//$_SESSION['id'] = $id;
//echo 'Welcome ' . $_SESSION['name'] . '!';
header("Location:http://localhost/Project/Apna%20karobar/index.php");
} else {
// Incorrect password
echo 'Incorrect username and/or password!';
}
} else {
// Incorrect username
echo 'Incorrect username and/or password!';
}


$stmt->close();
}
*/
