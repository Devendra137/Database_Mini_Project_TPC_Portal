<?php
$server = "localhost";
$username = "root";
$password = "SQLP@ssw0rd";
$database = "placement";

$conn = mysqli_connect($server, $username, $password, $database);
$conni = new mysqli($server, $username, $password, $database);
if (!$conn || !$conni) {
    //     echo "success";
// }
// else{
    die("Error" . mysqli_connect_error());
}

?>
