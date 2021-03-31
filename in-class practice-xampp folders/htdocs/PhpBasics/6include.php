 <html>
    <head><title>include</title></head>
    <body>
        <?php
        // include: if the path is wrong, the page will continue to be loaded with warning 
        // require: the page will NOT be loaded with error
        // include_once, require_once: load only once
        
        require "./includes/header.php";
        ?>
        
        <h1><?php
        include "./includes/myBody.php";
        myBodyFunction();
        
        ?></h1>
        
        <?php
        include_once "./includes/footer.php";
        ?>

    </body>
</html>


