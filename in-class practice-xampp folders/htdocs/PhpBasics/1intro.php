<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>introduction</title>
    </head>
    <body>
        <?php
        //phpinfo();
        
        $name = 'John';
        //echo "My name is $name"; //My name is John
        echo "My name is {$name}<br>"; // same output as above
        //echo 'My name is {$name}';  //output: My name is {$name}
        
        echo 'Hello World'; //output: Hello World
        //print 'Hello World'; //output: Hello World
        
        //echo 'Hello', ' World'; //output: Hello World
        //print 'Hello', ' World'; // error
        
        // use concatenation operator: .
        //print "Hello" . " World"; //output: Hello World
        
        //-------------comments-------------c
        /*
         * multi lines
         */
        # comments
        
        echo "<br>";
        echo nl2br("Hello \r\n World");
        echo "<br>";
        $name = "Jack";
        echo "Hello John <br>" . $name. "<br>";
        echo "Hello Tom";
      
        
        
        ?>
    </body>
</html>
