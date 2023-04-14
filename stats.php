<?php
$showAlert = false;
$showError = false;
session_start();

$rollno = $_SESSION['rollno'];

include "connection.php";

$details = mysqli_fetch_assoc($conn->query("select * from students where rollno='$rollno'"));

$GLOBALS['username'] = $details["username"];
$GLOBALS['email'] = $details["email"];
$GLOBALS['age'] = $details["age"];
$GLOBALS['batchyear'] = $details["batchyear"];
$GLOBALS['spec'] = $details["spec"];
$GLOBALS['aoi'] = $details["aoi"];
$GLOBALS['class10'] = $details["class10"];
$GLOBALS['class12'] = $details["class12"];
$GLOBALS['sem1'] = $details["sem1"];
$GLOBALS['sem2'] = $details["sem2"];
$GLOBALS['sem3'] = $details["sem3"];
$GLOBALS['sem4'] = $details['sem4'];
$GLOBALS['sem5'] = $details['sem5'];
$GLOBALS['sem6'] = $details['sem6'];
$GLOBALS['sem7'] = $details['sem7'];
$GLOBALS['sem8'] = $details['sem8'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Statistics</title>
</head>

<body>
    <?php require '_nav_in.php' ?>
    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
