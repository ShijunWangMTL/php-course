<html>
    <head>
        <title>functions</title>
    </head>
    <body>
        <?php
        //1.built-in functions; 2.user-defined functions
        //usability;easy to debug;maintanability
        
        function myFunction(){
            echo "Hello World";
        }
        myFunction();
        echo "<br>";
        
        $num1 = 10;
        $num2 = 15;
        function add(&$num1, $num2){    
//***with &, parameter received as reference, $num1 will change as it changed in the function block
            $result = $num1 +$num2;
            $num1++;
            return $result;
        }
        echo "The result is: " . add($num1, $num2) . "<br>"; //25
       // echo "The result is: " . add(2, 3) . "<br>"; //5  // error when argument with &
        echo "num1: " . $num1 . "<br>"; //10 without &, 11 with &
        
        
        ?>

    </body>
</html>
