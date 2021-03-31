<?php
include 'db.php';

if (isset($_POST['send'])) {
    $stNum = htmlspecialchars($_POST['stNum']);
    $stName = htmlspecialchars($_POST['stName']);
    $sql = "INSERT INTO students (stNum, stName) VALUES ('$stNum', '$stName')";
    $val = $db -> query($sql); //return boolean
    if ($val) {
        echo "<script type='text/javascript'>alert('Successfully added');</script>"; 
    } else {
        echo "<script type='text/javascript'>alert('ERROR');</script>"; 
    }
    
    //header('location: index.php'); // won't show alert above after add
    echo("<script>window.location = 'index.php';</script>");
    
}


?>


