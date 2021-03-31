<?php
// 1. parameters to connect to a db
$dbHost = "localhost:3307";
$dbUser = "root";
$dbPass = "";
$dbName = "phpcourse";

// 2. db connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// 3. Failure checking
if($conn){
    
} else {
    die("Database connection failed!");
}


?>