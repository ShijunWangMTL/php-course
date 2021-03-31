<?php
/**
 * check the database connection details are ok.
 * ** temporary script that should be deleted before putting live ***
 * 
 */

 // database connection data
 $host = "localhost";
 $db_name = "mvc";
 $user = "root";
 $password = "secret";

 // create a connection
 $conn = new mysqli($host, $user, $password, $db_name);

 // check the connection
 if ($conn->connect_error) {
     echo "Connection failed: " . $conn->connect_error;
 } else {
     echo "Connected successfully, connection data are ok.";
 }