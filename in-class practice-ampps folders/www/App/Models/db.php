<?php
namespace App\Models;
use PDO;

$host = 'localhost';
$dbname = 'course_db';
$username = 'root';
$pwd = 'mysql';

$GLOBALS['db'] = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $pwd);
