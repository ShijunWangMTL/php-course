<html>
    <head>
        <title>Write to file</title>
    </head>
    <body>
         <?php
        // write to file: fopen(), fwrite(), fclose()
        $myFile1 = fopen("./uploads/file1.txt", "w"); //$mode: "w"
        //w: open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
        //w+: open for reading and writing;place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
        //r: open for reading only; place the file pointer at the beginning of the file. 
        //r+: open for reading and writing; place the file pointer at the beginning of the file.

        $txt = "My name is John.";
        fwrite($myFile1, $txt);
        $txt = "My name is Jack.";  // append
        fwrite($myFile1, $txt); 
        fclose($myFile1);

        if (isset($_POST["btn_submit"])) {
            $myFile = fopen("./uploads/file.txt", "w");  //over write
            $txt = "My age is " . $_POST["age"] . ".\n";
            fwrite($myFile, $txt);
            fclose($myFile);
        }
        //"w": if re-submit form, previous value will be overritten.
        //"a": Open for writing only;place the file pointer at the end of the file.fseek() has no effect, writes are always appended.
        
        if (isset($_POST["btn_submit"])) {
            $myFile = fopen("./uploads/filea.txt", "a");  //append
            $txt = "My age is " . $_POST["age"] . ".\n";
            fwrite($myFile, $txt);
            fclose($myFile);
        }
        
        ?>

        <form action="9writeToFile.php" method="POST">
            <input type="txt" name="age">
            <button type="submit" name="btn_submit">Submit</button>
        </form>

    </body>
</html>
