<html>
    <head>
        <title>reading files</title>
    </head>
    <body>
        <?php
        $filePath = "uploads/readingfile.txt";
        $output = file_get_contents($filePath);
       // echo $output;
        $ages = explode("\n", $output);
//        echo "<br>";
//        print_r($ages);
        $totalAge = 0;
        $counter = 0;
        foreach ($ages as $age) {
            echo $age . "<br>";
            $totalAge += $age;
            $counter++;
        }
        echo "The average age is: " . $totalAge / $counter;
        
        
        ?>

    </body>
</html>
