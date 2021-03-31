<?php

namespace App\Models;

include 'db.php';

use PDO;

class Course
{
    public static function getList()
    {
        $statement = $GLOBALS['db']->query('SELECT * FROM courses');
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public static function add() 
    {
        if (isset($_POST['send'])) {
            $courseName = htmlspecialchars($_POST['courseName']);
            if (!empty($_POST['instructor'])) {
               $instructor = htmlspecialchars($_POST['instructor']); 
            } else {
                $instructor = null; 
            }
            if (!empty($_POST['textbook'])) {
                $textbook = htmlspecialchars($_POST['textbook']); 
             } else {
                 $textbook = null; 
             }

            $query = "INSERT INTO courses (courseName, instructor, textbook) VALUES (:courseName, :instructor, :textbook)";
            $statement = $GLOBALS['db']->prepare($query);
            $statement->bindValue(":courseName", $courseName);
            $statement->bindValue(":instructor", $instructor);
            $statement->bindValue(":textbook", $textbook);
            $affected = $statement->execute();

            if ($affected > 0) {
                echo "<script type='text/javascript'>alert('Successfully added');</script>";
            } else {
                echo "<script type='text/javascript'>alert('ERROR');</script>";           
            }

            echo("<script>window.location = 'showList';</script>");

        }
    }

    public static function update() {
        
    }





}
