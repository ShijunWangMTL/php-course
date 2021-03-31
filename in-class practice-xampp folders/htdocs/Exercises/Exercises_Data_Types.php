<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercises_Data_Types</title>
    </head>
    <body>
        <?php
        echo "<hr>Exercise 1:<br>"; 
        //Create two variables (‘x’, ‘y’) add then, and multiply it by 5. Assign the output to a new variable ‘z’.
        //Expected output -> The total is (z).
        $x = 3;
        $y = 2.3;
        $z = ($x + $y) * 5;
        echo "The total is ". $z;
        
        echo "<hr>Exercise 2:<br>";
        //Create two variables ‘price’ and ‘vat’. Create a new variable ‘totalPrice’ and calculate the vat on the price and print out the price, vat and total price.
        //Expected output -> Price: ‘price’
        //Vat: ‘vat’
        //Total price: ‘totalPrice’
        $price = 9.98;
        $vat = 9.98 * 0.14975;
        $totalPrice = $price + $vat;
        echo "Price: " . $price . "<br>";
        echo "Vat: " . number_format($vat, 2) . "<br>";
        echo "Total price: " . number_format($totalPrice, 2);
        
        echo "<hr>Exercise 3:<br>";
        //Create three variables ‘x’, ‘y’, ‘z’ and calculate the average ‘average’ of the numbers and print it out on the screen. Be aware that the average is a decimal number, so use a function number_format in PHP.
        //(Expected output -> The average is ‘average’
        $a = 11;
        $b = 2;
        $c = 4;
        $average = ($a + $b + $c) / 3;
        echo "The average is " . number_format($average, 3);
        
        echo "<hr>Exercise 4:<br>";
        //Create an array ‘countries’ that displays 5 countries and the capital names.
        //(Expected output -> The capital of Netherlands is Amsterdam.
        //The capital of Germany is Berlin.
        //The capital of Thailand is Bangkok).
        $countries = array("Netherlands"=>"Amsterdam", "Germany"=>"Berlin", "Thailand"=>"Bangkok", "Canada"=>"Ottawa", "Sweden"=>"Stockholm");
        foreach($countries as $country=>$capital) {
            echo "The capital of $country is $capital.<br>";
        }
        
        echo "<hr>Exercise 5:<br>";
        //Create an integer ‘cmToInch’ that converts a number of centimeters ‘cm’ to inches ‘inch’. (tip: 1 centimeter is equivalent to 0,39 inch).
        //(Expected output -> (cm) centimeters is (inch) inches.
        function cmToInch($cm){
            return $cm * 0.39;
        }
        $cm = 20;
        echo $cm . " centimeters is " . cmToInch($cm) . " inches.";
        
        echo "<hr>Exercise 6:<br>";
        //Create an array ‘expenses’ with your biggest expenses of the month. Loop through the array and add the expenses in an integer ‘totalAmount’. 
        //Finally, display the total expenses that you had and the amount of values ‘amountOfExpenses’ you had stored inside of your array.
        //(Expected output -> My (amountOfExpenses) biggest expenses were (totalamount)
        $expenses = array(223, 124.56, 89.95, 158);
        $totalAmount = 0;
        $amountOfExpenses = 0;
        foreach ($expenses as $expense) {
            $totalAmount += $expense;
            $amountOfExpenses ++;
        }
        echo "My $amountOfExpenses biggest expenses were $totalAmount";  
        
        echo "<hr>Exercise 7:<br>";
        //Create an array ‘weather’ of weather conditions with the following values: rain, sunshine, clouds, hail, sleet, snow, wind. Using
        //the array variable for all the weather conditions, echo the following statement to the browser:
        //We’ve seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds and some rain. At least we didn’t get any hail or sleet.
        $weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
        echo "We’ve seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6]. Then came $weather[1] with a few $weather[2] and some $weather[0]. At least we didn’t get any $weather[3] or $weather[4].";
                    
        
        ?>
    </body>
</html>
