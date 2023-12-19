<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Demo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        td{
            text-align: center;
        }
        /* Reset some default styles */
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }

        /* Set default font family and color */
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Navigation bar styling */
        .navbar {
            background-color: #727272;
        }

        .navbar .nav-link {
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        .navbar .nav-link.active {
            color: #ffc107;
        }

        .container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
        .navbar .nav-link:hover {
        color: #ffc107;
        }

        .navbar .nav-link.active {
            color: #ffc107;
        }

        .container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }


    </style>
</head>
<body>

    <nav class="navbar navbar-light" style="background-color: #727272">
        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('students') ? 'active' : ''}}" href="{{url('/students')}}">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('courses') ? 'active' : ''}}" href="{{url('/courses')}}">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('enrollments') ? 'active' : ''}}" href="{{url('/enrollments')}}">Enrollments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::is('grades') ? 'active' : ''}}" href="{{url('/grades')}}">Grades</a>
            </li>

        </ul>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

</body>
</html>
