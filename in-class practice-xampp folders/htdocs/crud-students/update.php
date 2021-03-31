<?php
include 'db.php';
$id = (int) $_GET['id'];
$sql = "SELECT * FROM students WHERE id='$id'";
$rows = $db->query($sql);
$row = $rows->fetch_assoc();

if (isset($_POST['send'])) {
    $stNum = htmlspecialchars($_POST['stNum']);
    $stName = htmlspecialchars($_POST['stName']);
    $sql2 = "UPDATE students SET stNum = '$stNum', stName='$stName' WHERE id='$id'";
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
        <title>Student List Management</title>
        <!-- compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--  compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <center><h1>Update Student</h1></center>
            <div class="row" style="margin-top: 70px;">
                <div class="col-md-10 col-md-offset-1">
                    <table class="table">
                        <hr><br>
                        <form method="post">
                            <div class="form-group">
                                <label>Student number</label>
                                <input type="text" required name="stNum" class="form-control" value="<?php echo $row['stNum'];?>">
                                <label>Student name</label>
                                <input type="text" required name="stName" class="form-control" value="<?php echo $row['stName'];?>">
                            </div>
                            <input type="submit" name="send" value="Update" class="btn btn-success">&nbsp;
                            <a href="index.php" class="btn btn-warning">Back</a>
                        </form>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>
