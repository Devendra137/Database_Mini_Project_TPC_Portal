<?php

$showAlert1 = false;
$showAlert2 = false;
$showError = false;
session_start();

// $id = $_SESSION['id'];

$GLOBALS["rollno"] = $_GET["rollno"];
$rollno = $GLOBALS['rollno'];
$id = $GLOBALS['rollno'];


include "connection.php";


$sql = "delete from students where rollno ='$rollno';";

$result = mysqli_query($conn, $sql);
if ($result) {
    $showAlert1 = true;
}




?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Delete Student</title>
</head>

<body>
    <?php require '_nav_comp.php';
    if ($showAlert1) {
        echo "<script> alert('DELETED STUDENT'S RECORD SUCCESSFULLY')</script>";
        ?>
        <META http-equiv="Refresh" content="0; URL = admin_student.php">
        <?php
    } else {
        echo "<font color='red'> Failed to delete record of student";
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