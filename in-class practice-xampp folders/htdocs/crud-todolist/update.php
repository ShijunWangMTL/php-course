<?php
include 'db.php';
$id = (int) $_GET['id'];
$sql = "SELECT * FROM tasks WHERE id='$id'";
$rows = $db->query($sql);
$row = $rows->fetch_assoc();

if (isset($_POST['send'])) {
    $task = htmlspecialchars($_POST['task']);
    $sql2 = "UPDATE tasks SET name='$task' WHERE id='$id'";
    $db->query($sql2);
    header('location: index.php');
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        -->
        <title>CRUD Application</title>
        <!-- compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--  compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <center><h1>Update Task</h1></center>
            <div class="row" style="margin-top: 70px;">
                <div class="col-md-10 col-md-offset-1">
                    <table class="table">
                        <hr><br>
                        <form method="post">
                            <div class="form-group">
                                <label>Task name</label>
                                <input type="text" required name="task" class="form-control" value="<?php echo $row['name'];?>">
                            </div>
                            <input type="submit" name="send" value="Update Task" class="btn btn-success">&nbsp;
                            <a href="index.php" class="btn btn-warning">Back</a>
                        </form>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>
