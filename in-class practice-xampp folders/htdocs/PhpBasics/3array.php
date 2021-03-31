<html>
    <head>
        <title>array</title>
    </head>
    <body>
        <?php
        $car = array("BMW", "Honda", "Audi");
        echo $car[1]; // Honda
        # echo $car[4]; // undefined offset:4
        echo "<br>";
        
        $myCar = array("Audi", 2015, 75.35); // array with different value types
        var_dump($myCar); // array(3) { [0]=> string(4) "Audi" [1]=> int(2015) [2]=> float(75.35) }       
        echo "<br>";
        
        //show array values only
        print_r($myCar); // Array ( [0] => Audi [1] => 2015 [2] => 75.35 )        
        echo "<br>";
        
        $car2 = array("Toyota", "Chevy", "VW");
        $cars = array_merge($car, $car2);
        var_dump($cars);
        echo "<hr>";
        
        // multi-dementional arrays
        $cars = array("Expensive" => array("Audi", "Mercedes","BMW"), 
                      "Inexpensive" => array(array(), "Ford", "Toyota", "Mazda")
            );
        echo $cars["Expensive"][0];
        ?>

    </body>
</html>



