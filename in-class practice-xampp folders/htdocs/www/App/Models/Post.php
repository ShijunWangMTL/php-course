<?php

namespace App\Models;

use PDO;

/**
 * Post model
 */
 class Post {
     /**
      * get all the posts as an associative 
      * @return array
       */ 
    public static function getAll() {
        $host = 'localhost';
        $dbname = 'mvc';
        $username = 'root';
        $pwd = 'mysql';

        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                            $username, $pwd);
            $statement = $db->query('SELECT id, title, content FROM posts ORDER BY created_at');
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }



 }