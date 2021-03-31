<html>
    <head>
        <title>Exercises_User_Defined_Functions</title>
    </head>
    <body>
        <?php
        echo "<hr>Exercise 1:<br>";

        //Create two variables ‘price’ and ‘vat’, and create a function called ‘calculateVat’ that takes two parameters, and returns a variable ‘calculatedPrice’. Print out the price, vat and total price.
        //Expected output -> (Price is: ‘price’, Vat is: ‘vat’, Total price is: ‘calculateVat’)
        function calculateVat($price, $vatRate) {
            $vat = number_format($price * $vatRate, 2);
            $calculatedPrice = $price + $vat;
            echo "Price is: " . $price . ", Vat is: " . $vat . ", Total price is: " . $calculatedPrice . ".";
        }

        calculateVat(10, 0.14975);

        echo "<hr>Exercise 2:<br>";

        //Create a variable ‘year’ and create a function ‘isLeapYear’ that checks if the year is a leap year. If it is a leap year, return a Boolean value. 
        //Expected output -> (‘year’ is a leap year’) (‘year is not a leap year’)
        function isLeapYear($year) {
            if ($year % 100 != 0) {
                if ($year % 4 == 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                if ($year % 400 == 0) {
                    return true;
                } else {
                    return false;
                }
            }
        }

        $year1 = 1900;
        if (isLeapYear($year1)) {
            echo "The year $year1 is a leap year.";
        } else {
            echo "The year $year1 is not a leap year.";
        }
        echo "<br>";
        
        $year2 = 2012;
        if (isLeapYear($year2)) {
            echo "The year $year2 is a leap year.";
        } else {
            echo "The year $year2 is not a leap year.";
        }
        echo "<br>";
        
        $year3 = 2021;
        if (isLeapYear($year3)) {
            echo "The year $year3 is a leap year.";
        } else {
            echo "The year $year3 is not a leap year.";
        }

        echo "<hr>Exercise 3:<br>";

        //Create two variables ‘num1’ and ‘num2’ and create four functions ‘addNumbers’, ‘subtractNumbers’, ‘multiplyNumbers’ and ‘divideNumbers’. 
        //The function accepts two parameters, and return the addition, subtraction, multiplicity and division of the two numbers.
        //Expected output -> (‘Addition of ‘num1’ and ‘num2’ is ‘addnumbers’)
        function addNumbers($num1, $num2) {
            return $num1 + $num2;
        }

        function subtractNumbers($num1, $num2) {
            return $num1 - $num2;
        }

        function multiplyNumbers($num1, $num2) {
            return $num1 * $num2;
        }

        function divideNumbers($num1, $num2) {
            return $num1 / $num2;
        }

        $num1 = 33;
        $num2 = 1.4;
        echo "Addition of $num1 and $num2 is " . addNumbers($num1, $num2) . ".<br>";
        echo "Subtraction of $num1 and $num2 is " . subtractNumbers($num1, $num2) . ".<br>";
        echo "Multiplicity of $num1 and $num2 is " . multiplyNumbers($num1, $num2) . ".<br>";
        echo "Division of $num1 and $num2 is " . divideNumbers($num1, $num2) . ".<br>";

        echo "<hr>Exercise 4:<br>";

        //Create a function ‘swapNumbers’ that takes two parameters ‘num1’ and ‘num2’,and inside the function, that swaps the numbers.
        //Expected output -> (‘Before swapping: num1 = 4, num2 = 8’);(‘After swapping: num1 = 8, num2 = 4’)
        function swapNumbers(&$num1, &$num2) {
            $temp = $num1;
            $num1 = $num2;
            $num2 = $temp;
        }

        $number1 = 4;
        $number2 = 8;
        echo "Before swapping: num1 = $number1, num2 = $number2 <br> ";
        swapNumbers($number1, $number2);
        echo "After swapping: num1 = $number1, num2 = $number2 <br> ";

        echo "<hr>Exercise 5:<br>";

        //Create a function ‘evenOrNot’ that checks if a given number ‘num1’ is even or odd. Echo the expected output.
        //Expected output -> (‘Num1 is even’);  -> (‘Num1 is odd’)
        function evenOrNot($num) {
            if ($num % 2 == 0) {
                echo "$num is even.<br>";
            } else {
                echo "$num is odd.<br>";
            }
        }
        evenOrNot(0);
        evenOrNot(8);
        evenOrNot(11);

        echo "<hr>Exercise 6:<br>";

        //Create a function ‘isPrime’ that checks if ‘num1’ is a prime number or not. 
        //Return true if it is a prime number and return false if it is not a prime number.
        //Expect output -> (‘num1 is a prime number’)
        //(‘num1 is not a prime number’)
        function isPrime($num) {
            if ($num == 1 || $num == 2 || $num == 3) {
                return true;
            }
            for ($count = 2; $count <= $num / 2; $count++) {
                if ($num % $count == 0) {
                    return false;
                }
            }
            return true;
        }
        $a = 2;
        if(isPrime($a)){
            echo "$a is a prime number.";
        }else {
            echo "$a is not a prime number.";
        }
        echo "<br>";
        $b = 51;
        if(isPrime($b)){
            echo "$b is a prime number.";
        }else {
            echo "$b is not a prime number.";
        }
        echo "<br>";
        $c = 137;
        if(isPrime($c)){
            echo "$c is a prime number.";
        }else {
            echo "$c is not a prime number.";
        }
        
        
        ?>

    </body>
</html>

