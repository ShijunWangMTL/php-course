<!DOCTYPE html>
<?php
include 'db.php';

$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$perPage = (isset($_GET['per-page']) && ($_GET['per-page']) <= 50 ? $_GET['per-page'] : 5);
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

$sql = "SELECT * FROM tasks LIMIT " . $start . " , " . $perPage . " ";
$total = $db->query("SELECT * FROM tasks")->num_rows;
$pages = ceil($total / $perPage);

$rows = $db->query($sql);
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
            <center><h1>Todo Tasks</h1></center>
            <div class="row" style="margin-top: 70px;">
                <div class="col-md-10 col-md-offset-1">
                    <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
                    <button type="button" class="btn btn-default pull-right" onclick="print()">Print</button>
                    <hr><br>
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add a task</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="add.php">
                                        <div class="form-group">
                                            <label>Task Name</label>
                                            <input type="text" required name="task" class="form-control">                                                
                                        </div>
                                        <input type="submit" name="send" value="Add Task" class="btn btn-success">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <form action="search.php" method="post" class="form-group">
                            <input type="text" placeholder="Search..." name="search" class="form-control">
                            <br>
                            <input type="submit" name="" value="Search" class="btn btn-warning">                          
                        </form>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Task</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $rows->fetch_assoc()): ?>
                                <tr>
                                    <td scope="row"><?php echo $row['id'] ?></td>
                                    <td class="col-md-9"><?php echo $row['name'] ?></td>
                                    <td>
                                        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
                                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <center>
                        <ul class="pagination">
                            <?php for ($i = 1; $i <= $pages; $i++): ?>
                                <li>
                                    <a href="?page=<?php echo $i; ?>&per-page=<?php echo $perPage; ?>">
                                        <?php echo $i; ?>
                                    </a> 
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </center>

                </div>
            </div>
        </div>
    </body>
</html>
