<html>
    <head>
        <title>control structures</title>
    </head>
    <body>
        <?php
        $age = 17;
        if($age < 20) {
            echo "Sorry, you are too young.";
        } else if($age > 50){
            echo "Sorry, you are too old.";
        } else {
            echo "You are old enough.";
        }
        echo "<br>";
        
        $role = "Visitor";
        switch($role){
            case 'Visitor':
                echo "Welcome Visitor";
                break;
            case 'Admin':
                echo "Welcom Admin";
                break;
            default:
                echo "User has no rule.";
        }
        echo "<br>";
         
        echo "while loop: <br>";
        $x = 1;
        while ($x <= 10) {
            echo $x."<br>";
            $x++;
        }
         
        echo "do-while loop: <br>";
        $y = 1;
        do{
            echo $y."<br>";
            $y += 2;
        } while ($y <= 10);
        
        echo "for loop: <br>";
        for ($z = 1; $z <= 5; $z++) {
            echo "The number is: " . $z . "<br>";
        }
        
        echo "<hr>";
        $deposit = 1000;
        $interestRate = 0.05;
        for($year = 1; $year <= 5; $year++){
            $deposit += ($deposit * $interestRate);
            echo "The total amount after " . $year . " year is: " . $deposit . "<br>";
        }
        
        echo "<hr> Foreach loop <br>";
        $names = array("John", "Jack", "Mary", "Tom");
        foreach($names as $key){
            echo $key . "<br>";
        }
        echo "<hr>";
        $person = array("Name" => "Henry", "Age" => 30, "Gender" => "Male");
        foreach ($person as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        
        ?>

    </body>
</html>

