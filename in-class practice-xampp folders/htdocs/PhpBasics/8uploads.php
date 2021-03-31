<?php
// super global: 6 => $_FILES
//echo $name = $_FILES["myfile"]["name"] . "<br>"; // name of the uploaded file
//echo $type = $_FILES["myfile"]["type"] . "<br>"; // doc type of the uploaded file
//echo $temp_location = $_FILES["myfile"]["tmp_name"] . "<br>"; // temp location on server
//echo $error = $_FILES["myfile"]["error"] . "<br>";

// uploads
if (isset($_POST["btn_submit"])) {
    $file = $_FILES["myfile"];
    $name = $_FILES["myfile"]["name"];
    $tmp_name = $_FILES["myfile"]["tmp_name"];
    $size = $_FILES["myfile"]["size"]; // size unit: bytes
    $error = $_FILES["myfile"]["error"];
    
    $tempExtension = explode(".", $name);
    $tempExtension = end($tempExtension);
    $tempExtension = strtolower($tempExtension);
    //$tempExtension = strtolower(end(explode(".", $name)));
    
    $isAllowd = array("jpg", "jpeg", "png", "pdf");
    if(in_array($tempExtension, $isAllowd)) {
        if($error === 0) { 
            if($size < 1000000){
                $newFileName = uniqid('', true) . "." . $tempExtension;  //uniqid(prefix, more_entropy)
                //more_entropy:Optional. Specifies more entropy at the end of the return value. This will make the result more unique. When set to TRUE, the return string will be 23 characters. Default is FALSE, and the return string will be 13 characters long
                $fileDestination = "./uploads/" . $newFileName;
                move_uploaded_file($tmp_name, $fileDestination);
                header("Location: 8uploads_index.php?uploadsuccess");   // show in URL            
            }else {
                echo "Sorry, file size is too big";
            }
        } else {
            echo "There was an error, try again.";
        }
    } else {
        echo "Your file extension is not accepted";
    }
    
}

?>
