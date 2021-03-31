<?php

$server = "localhost:3307";
$user = "root";
$pwd = "";
$database = "crud";

// create connection
$db = new mysqli($server, $user, $pwd, $database);

// check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
//echo "<script type='text/javascript'>alert('Connected successfully');</script>";

?>