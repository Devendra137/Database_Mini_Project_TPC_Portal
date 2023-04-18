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

function getBranch(int $a)
{
    if ($a == 1) {
        return 'Computer Science';
    } else if ($a == 2) {
        return 'Artificial Intelligence';
    } else if ($a == 4) {
        return 'Mathematics and Computing';
    } else if ($a == 8) {
        return 'Electrical and Electronics';
    } else if ($a == 16) {
        return 'Chemical';
    } else if ($a == 32) {
        return 'Mechanical';
    } else if ($a == 64) {
        return 'Civil';
    } else if ($a == 128) {
        return 'Metallurgy';
    } else {
        return 'NA';
    }
}

?>