<?php
$showAlert = false;
$showError = false;
session_start();

$GLOBALS['email'] = $_GET['email'];
$email = $GLOBALS['email'];
// echo $id;

include "connection.php";

$details = mysqli_fetch_assoc($conn->query("select * from alumni where email='$email'"));


$GLOBALS['fname'] = $details["fname"];
$GLOBALS['rollno'] = $details["rollno"];
$GLOBALS['batchof'] = $details["batchof"];
$GLOBALS['phone'] = $details["phone"];
$GLOBALS['linkedin'] = $details["linkedin"];
$GLOBALS['job'] = $details["job"];
$GLOBALS['company'] = $details["company"];
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $rollno = $_POST["rollno"];
    $batchof = $_POST["batchof"];
    $phone = $_POST["phone"];
    $linkedin = $_POST["linkedin"];
    $job = $_POST["job"];
    $company = $_POST["company"];

    $conn->query("update alumni set fname='$fname', rollno='$rollno', batchof='$batchof', phone='$phone', linkedin='$linkedin', job='$job', company='$company' where email ='$email';");
    header("location: admin_alumni.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
</head>

<body>
    <?php require '_nav_in_alumni.php' ?>
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

    <div class="container my-4">
        <br>
        <h1 class="text-center">Update Details</h3>
            <br>
            <br>
            <form action="admin_alumni_update.php?email=<?= $GLOBALS["email"]; ?>" method="post">
                <h3 class="text-center">Alumnus Personal Details</h3>
                <br>
                <div class="form row">
                    <div class="form-group col-md-6 ">
                        <label for="fname">Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp"
                            value="<?php echo $fname ?>">


                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="rollno">Roll Number</label>
                        <input type="text" class="form-control" id="rollno" name="rollno" aria-describedby="emailHelp"
                            value="<?php echo $rollno ?>">
                    </div>
                </div>

                <div class="form row">
                    <div class="form-group col-md-6">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>"
                            readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="batchof">Batch Of</label>
                        <input type="number" class="form-control" id="batchof" name="batchof"
                            value="<?php echo $batchof ?>">
                    </div>
                </div>
                <br>
                <br>
                <h3>Professional Details</h3><br>
                <div class="form row">
                    <div class="form-group col-md-6">
                        <label for="phone">Phone No</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="linkedin">LinkedIn Profile</label>
                        <input type="text" class="form-control" id="lnkedin" name="linkedin"
                            value="<?php echo $linkedin ?>">
                    </div>
                </div>
                <div class="form row">
                    <div class="form-group col-md-6">
                        <label for="job">Job Title</label>
                        <input type="text" class="form-control" id="job" name="job"
                            value="<?php echo $job ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" id="company" name="company"
                            value="<?php echo $company ?>">
                    </div>
                </div>
                <br>
                <center><button type="submit" class="btn btn-primary">Update</button></center>
            </form>
    </div>

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