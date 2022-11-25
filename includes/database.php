<?php

//Params to connet to a database
$dbHost = "127.0.0.1";
$dbUser = "root";
$dbPass = "";
$dbName = "phplearn";

//Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed!");
}

?>