<?php

session_start();
//include('dbconnection.php');

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


$email = $_POST['X_Email'];
$username = $_POST["X_Username"];
$pass = $_POST["X_Password"];
$gender = $_POST["Gender"];


$q = "insert into info(email,username,pass,gender) values('" . $email . "','" . $username . "','" . $pass . "','" . $gender . "')";
//echo $q;

if ($con->query($q) == TRUE) {
    //echo "Data Inserted";
    header("Location:http://localhost/Project/Apna%20karobar/login.php");
} else {
    echo $con->error;
}

$con->close();
