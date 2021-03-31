<!<!doctype html>
<?php
require_once './includes/database.php';
?>
<html>
    <head>
        <title>Connecting to database</title>
    </head>
    <body>
        <?php
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result); //return number of rows
        if ($rowCount > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row["username"] . ">>>" . $row["password"] . "<br>";
            }
        } else {
            echo "No results found!";
        }
        echo $rowCount; //2

        echo "<hr>mysqli_fetch_all: <br>";
        $result = mysqli_query($conn, $sql);
        $allrow = mysqli_fetch_all($result);
        print_r($allrow); //Array ( [0] => Array ( [0] => 1 [1] => John [2] => 123 ) [1] => Array ( [0] => 2 [1] => Tom [2] => 12345 ) )

        echo "<hr>mysqli_fetch_array: <br>";
        $result = mysqli_query($conn, $sql);
        $rowarray = mysqli_fetch_array($result); // output array: Array ( [0] => 1 [id] => 1 [1] => John [username] => John [2] => 123 [password] => 123 )
        print_r($rowarray);

        echo "<br><br>mysqli_fetch_array with MYSQLI_NUM: <br>";
        $result = mysqli_query($conn, $sql);
        $rowarray = mysqli_fetch_array($result, MYSQLI_NUM);
        printf("%s (%s, %s)<br>", $rowarray[0], $rowarray[1], $rowarray[2]); //1 (John, 123),       
        print_r($rowarray); //output array: Array ( [0] => 1 [1] => John [2] => 123 )  

        echo "<br><br>mysqli_fetch_array with MYSQLI_ASSOC: <br>";
        $result = mysqli_query($conn, $sql);
        $rowarray = mysqli_fetch_array($result, MYSQLI_ASSOC);
        printf("%s (%s)<br>", $rowarray["username"], $rowarray["password"]); //John (123)
        print_r($rowarray); // output:Array ( [id] => 1 [username] => John [password] => 123 )

        echo "<br><br>mysqli_fetch_array with BOTH: <br>";
        $result = mysqli_query($conn, $sql);
        $rowarray = mysqli_fetch_array($result, MYSQLI_BOTH);
        print_r($rowarray); //Array ( [0] => 1 [id] => 1 [1] => John [username] => John [2] => 123 [password] => 123 )

        echo "<hr>mysqli_fetch_assoc: <br>";
        $result = mysqli_query($conn, $sql);
        //$rowassoc = mysqli_fetch_assoc($result);
        while ($rowassoc = mysqli_fetch_assoc($result)) {
            echo $rowassoc["username"] . ">>>" . $rowassoc["password"] . "<br>";
        }
        // John>>>123    
        // Tom>>>12345
        //mysqli_fetch_row — Get a result row as an enumerated array
        echo "<hr>mysqli_fetch_row: <br>";
        $result = mysqli_query($conn, $sql);
//        $rowrow = mysqli_fetch_row($result); 
//        echo $rowrow[1] . ", " . $rowrow[2] . "<br>";//only 1st row as output: John, 123 
        while ($rowrow = mysqli_fetch_row($result)) {
            echo $rowrow[1] . ", " . $rowrow[2] . "<br>";
        }

        //mysqli_fetch_object — Returns the current row of a result set as an object  
        echo "<hr>mysqli_fetch_object: <br>";
        $result = mysqli_query($conn, $sql);
        while ($obj = mysqli_fetch_object($result)) {
            printf("%s (%s)\n", $obj->username, $obj->password);
        } //John (123) Tom (12345)
        
        
        
        ?>


    </body>
</html>

