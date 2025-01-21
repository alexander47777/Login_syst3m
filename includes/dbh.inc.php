<?php

// variables for the connection to the database
$serverName = "localhost";
$dBUserName = "myuser";
$dBPassword = "mypassword";
$dBName = "myfirstdatabase";

// try catch block for connecting to the database
try {
    // PDO(PHP DATA OBJECT) instance to connect to the database.
    $pdo = new PDO("mysql:host=$serverName;dbname=$dBName", $dBUserName, $dBPassword);
    //throw exceptions if an error occurs.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage()); //Display error message

}