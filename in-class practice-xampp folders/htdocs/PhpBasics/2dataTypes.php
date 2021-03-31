<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>data type</title>
    </head>
    <body>
        <?php

        //integers: numberic values
        $age = 24;;
        echo "My age is $age <br>";
        echo "My age is " . $age;
        echo "<br>";
        
        //floating point Float: decimal numbers
        $price = 10.2;
        echo "The price is: " . $price;
        echo "<br>";
        
        //string
        $name = "John";
        echo "My name is: " . $name;
        echo "<br>";
        
        //boolean
        $is_allowed = true;
        echo $is_allowed;  //1
        echo "<br>";
        
        $is_allowed2 = false;
        echo intval($is_allowed2); //0
        echo "<br>";
        echo var_export($is_allowed2); //false
        echo "<br>";
        
        //null
        $x = "Hello World";
        $x = null;
        echo $x; //output nothing
        $y;
        # echo $y; //Warning: Undefined variable $y 
        

        
        ?>
    </body>
</html>
