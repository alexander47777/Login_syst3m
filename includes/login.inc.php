<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../includes/functions.inc.php';

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["pwd"];

    require_once 'dbh.inc.php';


    if (emptyInputLogin($username,$password)) {
        header("location: ../index.php");
        exit();
    }

    loginUser($pdo, $username, $password);
}


