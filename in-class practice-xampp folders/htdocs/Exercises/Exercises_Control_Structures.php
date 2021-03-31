<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercises_Control_Structures</title>
    </head>
    <body>
        <?php
        echo "<hr>Exercise 1:<br>";
        //Create two variables with two integer numbers. Print out which one is the highest and lowest value. (eg. “Highest value is (…)”.” Lowest value is (…)”).
        $num1 = 5;
        $num2 = 7;
        $max;
        $min;
        if ($num1 >= $num2) {
            $max = $num1;
            $min = $num2;
        } else {
            $max = $num2;
            $min = $num1;
        }
        echo "Highest value is $max. " . " Lowest value is $min.";

        echo "<hr>Exercise 2:<br>";
        //Create a variable with a value in-between number 1 till 4 (Reject any other value). Based on the value, print out “Spades”, “Hearts”, “Diamonds” and “Clubs”.
        $suit = 1;
        switch ($suit) {
            case 1:
                echo "Spades";
                break;
            case 2:
                echo "Hearts";
                break;
            case 3:
                echo "Diamonds";
                break;
            case 4:
                echo "Clubs";
                break;
        }

        echo "<hr>Exercise 3:<br>";
        //The American grading system works with the letter A, B, C, D and F whereas C or higher means that you've passed the subject. 
        //Create a variable that shows the amount of points a student scored, and based on that number, output the letter that a student got.
        //Also, show if the student passed the exam or not.
        $score = 97;
        echo intdiv($score, 10) . "<br>";
        $grade;
        $isPassed;
        switch (intdiv($score, 10)) {
            case 10:
                $grade = "A";
                $isPassed = true;
                break;
            case 9:
                $grade = "A";
                $isPassed = true;
                break;
            case 8:
                $grade = "B";
                $isPassed = true;
                break;
            case 7:
                $grade = "C";
                $isPassed = true;
                break;
            case 6:
                $grade = "D";
                $isPassed = true;
                break;
            default:
                $grade = "F";
                $isPassed = false;
        }
        echo "The student's grade is $grade.<br>";
        if ($isPassed === true) {
            echo "The student passed the exam.";
        } else {
            echo "The student failed the exam.";
        }

        echo "<hr>Exercise 4:<br>";

        //A car manufacturer is replacing its machines. The machines will only be replaced if one or more of the following conditions is met:
        //The machine has more than 10.000 working hours;
        //The machine older than 7 years;
        //The machine has more than 25 failures per year.
        function replaceOrNot($hours, $age, $failures) {
            if ($hours > 10000 || $age > 7 || $failures > 25) {
                echo "The machine needs to be replaced.";
            } else {
                echo "The machine does not need to be replaced.";
            }
        }

        replaceOrNot(200, 8, 5);

        echo "<hr>Exercise 5:<br>";

        //Create a variable with a year. Create a program that shows if the year is a leap year. 
        //(A year is a leap year is you can divide is by 400 or by 4).        
        function isLeap($year) {
            if ($year % 100 != 0) {
                if ($year % 4 == 0) {
                    echo "The year $year is a leap year.";
                } else {
                    echo "The year $year is not a leap year.";
                }
            } else {
                if ($year % 400 == 0) {
                    echo "The year $year is a leap year.";
                } else {
                    echo "The year $year is not a leap year.";
                }
            }
        }

        $year = 1900;
        isLeap($year);
        echo "<br>";
        isLeap(2016);
        echo "<br>";
        isLeap(2000);

        echo "<hr>Exercise 6:<br>";

        //Write a program that displays the multiplication table of a given integer. 
        //Create a variable of the beginning and ending of the loop.
        function multiplicationTable($int) {
            $ending = $int;
            for ($index = 0; $index <= $ending; $index++) {
                echo $int . " * " . $index . " = " . $int * $index . "<br>";
            }
        }

        $number = 15;
        echo "The multiplication table of $number: <br>";
        multiplicationTable($number);

        echo "<hr>Exercise 7: Fibonacci series from 0 to 50<br>";
        //Write a program to get the Fibonacci series from 0 to 50.
        $fibonacci = array(0, 1);

        function getFibonacci($index) {
            global $fibonacci;
            for ($i = count($fibonacci); $i <= $index; $i++) {
                $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            }
            return $fibonacci[$index];
        }

        function getFibSeries($count) {
            echo "<table border=1 >";
            for ($index = 0; $index < $count; $index++) {
                if ($index % 5 == 0) {
                    echo "<tr>";
                }
                echo "<td>" . "Index $index: " . getFibonacci($index) . "</td>";
            }
            if ($index % 5 == 4) {
                echo "</tr>";
            }
            echo "</table>";
        }

        getFibSeries(51);
        ?>
    </body>
</html>
