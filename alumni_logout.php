<?php
session_start();

session_unset();
session_destroy();

header("location: alumni_login.php");
exit;
?>