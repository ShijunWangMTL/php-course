<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student List Manager</title>
    <link href="{{asset('css/main.css')}}" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
    </style>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                <ul class="nav nav-pills nav-fill">
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="/login">Login</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="/list">List</a>
                    </li>
                </ul>
                <form class="d-flex" method="get" action="search">
                    <input name="searchName" class="form-control me-2" type="search" placeholder="Enter name..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </nav>
        </header>

        <body>
            <center>
                <br>
                <h1>@yield('pageTitle')</h1>
            </center>
            <br>
            @yield('content')
        </body>
        <footer>
            <br>
            <hr>
            <div>Copyright Student List 2021</div>
        </footer>
    </div>
</body>

</html>