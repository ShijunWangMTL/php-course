<!doctype html>
<?php
include 'db.php';
if (isset($_POST['search'])) {
    $page = (isset($_GET['page']) ? $_GET['page'] : 1);
    $perPage = (isset($_GET['per-page']) && ($_GET['per-page']) <= 50 ? $_GET['per-page'] : 5);
    $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

    $stName = htmlspecialchars($_POST['search']);
    //$sql = "SELECT * FROM students WHERE stName LIKE '%$name%'";
    $sql = "SELECT * FROM students WHERE stName LIKE '%$stName%' LIMIT " . $start . " , " . $perPage . " ";
    $total = $db->query("SELECT * FROM students WHERE stName LIKE '%$stName%'")->num_rows;
    $pages = ceil($total / $perPage);

    $rows = $db->query($sql);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        -->

        <!-- compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--  compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Eearch Results</title>
    </head>
    <body>
        <div class="container">
            <center><h1>Search Results</h1></center>
            <div class="row" style="margin-top: 70px;">
                <div class="col-md-10 col-md-offset-1">
                    <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success hidden-print">Add Student</button>
                    <button type="button" class="btn btn-default pull-right hidden-print" onclick="print()">Print</button>
                    <hr><br>
                    <div class="col-md-12 text-center hidden-print">
                        <form action="search.php" method="post" class="form-group">
                            <input type="text" placeholder="Search..." name="search" class="form-control">
                            <br>
                            <input type="submit" name="" value="Search" class="btn btn-warning">                          
                        </form>
                    </div>                  
                    
                    <?php if (mysqli_num_rows($rows) < 1) : ?>
                        <h2 class="text-center">Nothing found.</h2>
                        <br>                        
                    <?php else: ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Task</th>
                                    <th scope="col" class="hidden-print">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $rows->fetch_assoc()): ?>
                                    <tr>
                                        <td scope="row" class="col-md-2"><?php echo $row['id'] ?></td>
                                        <td class="col-md-4"><?php echo $row['stNum'] ?></td>
                                        <td class="col-md-4"><?php echo $row['stName'] ?></td>
                                        <td>
                                            <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success hidden-print">Edit</a>
                                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger hidden-print">Delete</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>

                    <center>
                        <ul class="pagination hidden-print">
                            <?php for ($i = 1; $i <= $pages; $i++): ?>
                                <li>
                                    <a href="?page=<?php echo $i; ?>&per-page=<?php echo $perPage; ?>">
                                        <?php echo $i; ?>
                                    </a> 
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </center>
                    <center><a href="index.php" class="btn btn-warning hidden-print">Back</a></center>
                </div>
            </div>
        </div>
    </body>
</html>
