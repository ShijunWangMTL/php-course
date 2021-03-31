<?php
$dsn = "mysql:host=localhost:3307;dbname=phpcourse";
$username = "root";
$password = "";
 
// create PDO object
//$db = new PDO($dsn, $username, $password);
try {
    $db = new PDO($dsn, $username, $password);
    echo "<p>You are connected to the database.</p>";
} catch (PDOException $ex) {
    $error_message = $ex->getMessage();
    echo "<p>An error occurred while connecting to the database: $error_message </p>";
}

$query = "SELECT * FROM users";
$statement = $db->prepare($query);

//1.execute SQL statement without parameter
$statement->execute();
//2.execute SQL statement with parameters
//$statement->bindValue(":id", $id);  //???
//$statement->execute();

//$user = $statement->fetch();    //fetch() gets only 1 row
$user = $statement->fetchAll();
$statement->closeCursor();

foreach($user as $record){
    echo $record[0].", " . $record[1] . "<br>";
} //1, John \n  2, Tom

//insert value into table
/*
$username = "Jerry";
$pwd = "123";
$query = "INSERT INTO users (username, password) VALUES (:username, :pwd)";
$statement = $db->prepare($query);
$statement->bindValue(":username", $username);
$statement->bindValue(":pwd", $pwd);
$statement->execute();
$statement->closeCursor();
 */

//delete record
/* 
$user_id = 4;
$query = "DELETE FROM users WHERE id = :user_id";
$statement = $db->prepare($query);
$statement->bindValue(":user_id", $user_id);
$statement->execute();
$statement->closeCursor();
*/

//update record
$user_id = 5;
$pwd = "55555";
$query = "UPDATE users SET password = :pwd WHERE id = :user_id";
$statement = $db->prepare($query);
$statement->bindValue(":user_id", $user_id);
$statement->bindValue(":pwd", $pwd);
$statement->execute();
$statement->closeCursor();

# $objectName->methodName(arguments)
?>
