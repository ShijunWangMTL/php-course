<?php
include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id = '$id'";
$val = $db -> query($sql);

if ($val) {
    header('location: index.php');
};



?>