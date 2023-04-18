<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .section1 {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #E0B0FF;
            padding: 20px;
        }

        .section2 {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #C18BEC;
            padding: 20px;
        }

        .section3 {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #B176E6;
            padding: 20px;
        }

        .btn-section {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php

    include "_nav_home.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 section1">
                <div class="text-center">
                    <h1> Company <h1>

                            <a href="company_login.php" class="btn btn-lg btn-dark">Login</a>
                </div>

            </div>
            <div class="col-sm-4 section2 ">
                <div class="text-center">
                    <h1> Student <h1>


                            <a href="login.php" class="btn btn-lg btn-dark">Login</a>
                </div>

            </div>
            <div class="col-sm-4 section3">
                <div class="text-center">
                    <h1> Alumni <h1>
                            <a href="alumni_login.php" class="btn btn-lg btn-dark">Login</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>