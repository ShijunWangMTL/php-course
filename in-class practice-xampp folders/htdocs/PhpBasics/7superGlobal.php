<html>
    <head>
        <title>super global</title>
    </head>
    <body>
        <?php
        // 1 => $GLOBALS
        $x = 100;
        $y = 200;

        function add() {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        add();
        echo $z; //300
        echo "<hr>";

        // 2 => $_POST
        // collect data from the HTML form (invisible)
        // isset() checks whether a variable is set, which means that it has to be declared and is not NULL.
        //$_POST array is superglobal and always exists (set). so need to check if empty()
        if (isset($_POST)) {
            if (!empty($_POST['name'])) //'name' refers to the html element, the name that user input
                echo $_POST['name'] . ", your form is submitted.";
            echo '<br>';
            print_r($_POST);
        }
        echo "<hr>";

        // 3 => $_GET
        // NB: similarities and differences between $_POST and $_GET
        // data will be invisible in URL
        
        // 4 => $_SESSION
        // good to use for sensitive information
        // SESSION exists as long as the browser is open
        //session: server-side. cookie: client-side
        session_start();
        //code should be between session_start() and session_destroy()
        $_SESSION["Name"] = "John";
        $_SESSION["Age"] = 56;

        echo "Hello " . $_SESSION["Name"];
        session_destroy();
        // when closing the browser/session, information will be destroyed
        echo '<br>';
        echo "Hello " . $_SESSION["Name"];
        echo "<hr>";

        // 5 => $_COOKIE
        // small file that webserver stores in the client computer
        // no destroy for cookie, but expiration exists
        // Arguments of cookie: name, value, expiration date(in unit of seconds), path(the path on the server which the cookie will be available), domain(that the cookie will be available), security(https)
        // if expiration is not defined, cookie will only be stored for the current session
        #$time = time() + 86400 * 30;
        $time = time() - 86400 * 30; // cookie not exist when refresh the page/session ends
        setcookie("name", "John", $time); //name, value, expiration date
        print_r($_COOKIE);
        echo '<br>';
        echo $_COOKIE["name"]; // no value after refreshing the page

        // 6 => $_FILES
        
        
        ?>
        <hr>
        <form action="7superGlobal.php" method="POST">
            <input type="text" name="name">
            <input type="text" name="age">
            <button type="submit">SUBMIT</button>
        </form>
        <hr>
    </body>
</html>
