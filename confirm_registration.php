<?php

$showAlert = false;
$showError = false;
session_start();

$rollno = $_SESSION['rollno'];
$GLOBALS['name'] = $_GET['name'];
$name = $GLOBALS['name'];
$GLOBALS['role_id'] = $_GET['role_id'];
$role_id = $GLOBALS['role_id'];
// echo $rollno;
// echo $name;
// echo $role_id;
// $table_name = $name . "_" . $role_id;
// echo $table_name;


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

$table_name = $name . "_" . $role_id;

echo $table_name;

echo "<br><br>$rollno";

$sql2 = "insert into `$table_name` values('$rollno')";
// $result2 = mysqli_query($conn, $sql2);
$conn->query($sql2);

header("location:eligible.php");

?>