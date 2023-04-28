<?php
$showAlert = false;
$showError = false;
$showError2 = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';

    if (empty($_POST['fname'])) {
        $showError2 = true;
    } else {
        $fname = $_POST["fname"];
    }
    if (empty($_POST['email'])) {
        $showError2 = true;
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST['rollno'])) {
        $showError2 = true;
    } else {
        $rollno = $_POST["rollno"];
    }
    if (empty($_POST['password'])) {
        $showError2 = true;
    } else {
        $password = $_POST["password"];
    }
    if (empty($_POST['cpassword'])) {
        $showError2 = true;
    } else {
        $cpassword = $_POST["cpassword"];
    }
    if (empty($_POST['batchof'])) {
        $showError2 = true;
    } else {
        $batchof = $_POST["batchof"];
    }
    if (empty($_POST['phone'])) {
        $showError2 = true;
    } else {
        $phone = $_POST["phone"];
    }
    if (empty($_POST['linkedin'])) {
        $showError2 = true;
    } else {
        $linkedin = $_POST["linkedin"];
    }
    if (empty($_POST['job'])) {
        $showError2 = true;
    } else {
        $job = $_POST["job"];
    }
    if (empty($_POST['company'])) {
        $showError2 = true;
    } else {
        $company = $_POST["company"];
    }


    function endsWith($string, $smol)
    {
        $len = strlen($smol);
        if ($len == 0) {
            return true;
        }
        return substr($string, -$len) === $smol;
    }
    // Check whether this username exists
    $existSql = "SELECT * FROM `alumni` WHERE rollno = '$rollno'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        // $exists = true;
        $showError = "User Already Exists";
    } else {
        // $exists = false;
        if (($password == $cpassword) && ($showError2 == false)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `alumni` ( `fname`, `password`, `email`,`rollno`,`batchof`,`phone`,`linkedin`,`job`,`company`) VALUES ('$fname', '$hash', '$email','$rollno','$batchof','$phone','$linkedin','$job','$company')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } else {
            if ($showError2 == false) {
                $showError = "Passwords do not match";
            }
        }
    }
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
    <?php require '_nav_alumni.php' ?>
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
    } else if ($showError2) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Fill all required spaces
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

    <div class="container my-4">
        <h1 class="text-center">Alumni Signup</h1>
        <form action="alumni_signup.php" method="post">
            <div class="form row">
                <div class="form-group col-md-6 ">
                    <label for="fname">Name</label>
                    <span>*
                    </span>
                    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="rollno">Roll Number</label>
                    <span>*
                    </span>
                    <input type="text" class="form-control" id="rollno" name="rollno" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <span>*
                    </span>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpassword">Confirm Password</label>
                    <span>*
                    </span>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="email">Email Address</label>
                    <span>*
                    </span>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="batchof">Batch Of</label>
                    <span>*
                    </span>
                    <input type="number" class="form-control" id="batchof" name="batchof">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="phone">Phone No</label>
                    <span>*
                    </span>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group col-md-6">
                    <label for="linkedin">LinkedIn Profile</label>
                    <span>*
                    </span>
                    <input type="text" class="form-control" id="linkedin" name="linkedin">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="job">Job Title</label>
                    <span>*
                    </span>
                    <input type="text" class="form-control" id="job" name="job">
                </div>
                <div class="form-group col-md-6">
                    <label for="company">Company</label>
                    <span>*
                    </span>
                    <input type="text" class="form-control" id="company" name="company">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">SignUp</button>
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