<html>
    <head>
        <title>Output escaping</title>
    </head>
    <body>
        <h1>Output escaping</h1>
        
        <?php
            //display the results of submitting the form
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //echo "Hello, " . $_POST['name'];
            echo "Hello, " . htmlspecialchars($_POST['name']);
            // input: <script>alert("ho ho ho")</script>
            // output:  Hello, <script>alert("ho ho ho")</script> // with htmlspecialchars()
        }        
        ?>
        
        <form method="post">
            <div>
                <label for="name">Your name</label>
                <input id="name" name="name" autofocus />
            </div>
            
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>

    </body>
</html>



