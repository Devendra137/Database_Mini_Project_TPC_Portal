<?php
$showAlert = false;
$showError = false;
$showError2 = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';
    if (empty($_POST['username'])) {
        $showError2 = true;
    } else {
        $username = $_POST["username"];
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

    if (empty($_POST['age'])) {
        $showError2 = true;
    } else {
        $age = $_POST["age"];
    }
    if (empty($_POST['batchyear'])) {
        $showError2 = true;
    } else {
        $batchyear = $_POST["batchyear"];
    }
    if (empty($_POST['branch'])) {
        $showError2 = true;
    } else {
        $branch = $_POST["branch"];
    }
    if (empty($_POST['aoi'])) {
        $showError2 = true;
    } else {
        $aoi = $_POST["aoi"];
    }
    if (empty($_POST['class10'])) {
        $showError2 = true;
    } else {
        $class10 = $_POST["class10"];
    }
    if (empty($_POST['class12'])) {
        $showError2 = true;
    } else {
        $class12 = $_POST["class12"];
    }
    if (empty($_POST['class12'])) {
        $showError2 = true;
    } else {
        $class12 = $_POST["class12"];
    }
    // if (empty($_POST['transcript'])) {
    //     $class12_err = "REQUIRED";
    // } else {
    //     $class12 = $_POST["class12"];
    // }
    // if (empty($_POST['class12'])) {
    //     $class12_err = "REQUIRED";
    // } else {
    //     $class12 = $_POST["class12"];
    // }
    $transcript = $_POST['transcript'];
    $resume = $_POST['resume'];

    $currentsem = $_POST["currentsem"];
    $sem1 = 0;
    $cpi = 0;
    if ($currentsem > 1) {
        $sem1 = $_POST["sem1"];
        $cpi = $cpi + $sem1;
    }
    $sem2 = 0;
    if ($currentsem > 2) {
        $sem2 = $_POST["sem2"];
        $cpi = $cpi + $sem2;
    }
    $sem3 = 0;
    if ($currentsem > 3) {
        $sem3 = $_POST["sem3"];
        $cpi = $cpi + $sem3;
    }
    $sem4 = 0;
    if ($currentsem > 4) {
        $sem4 = $_POST["sem4"];
        $cpi = $cpi + $sem4;
    }
    $sem5 = 0;
    if ($currentsem > 5) {
        $sem5 = $_POST["sem5"];
        $cpi = $cpi + $sem5;
    }
    $sem6 = 0;
    if ($currentsem > 6) {
        $sem6 = $_POST["sem6"];
        $cpi = $cpi + $sem6;
    }
    $sem7 = 0;
    if ($currentsem > 7) {
        $sem7 = $_POST["sem7"];
        $cpi = $cpi + $sem7;
    }

    if ($currentsem > 1) {
        $cpi = $cpi / ($currentsem - 1);
    }

    function endsWith($string, $smol)
    {
        $len = strlen($smol);
        if ($len == 0) {
            return true;
        }
        return substr($string, -$len) === $smol;
    }


    $existSql = "SELECT * FROM `students` WHERE rollno = '$rollno'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        // $exists = true;
        $showError = "User Already Exists";
    } else {
        if (!endsWith($email, '@iitp.ac.in')) { //email should have iitp.ac.in
            $showError = "Enter only IITP email address";
        }
        // $exists = false;
        if (($password == $cpassword) && endsWith($email, '@iitp.ac.in') && ($showError2 == false)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `students` ( `username`, `password`, `email`,`rollno`,`age`,`batchyear`,`branch`,`aoi`,`class10`,`class12`,`currentsem`, `sem1`,`sem2`,`sem3`,`sem4`,`sem5`,`sem6`,`sem7`,`transcript`,`resume`, `cpi`) VALUES ('$username', '$hash', '$email','$rollno','$age','$batchyear','$branch','$aoi','$class10','$class12', '$currentsem', '$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$transcript','$resume', '$cpi')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } else if (!endsWith($email, '@iitp.ac.in')) {
            $showError = "Enter only IITP email";
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
    <?php require '_nav.html' ?>
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
        <h1 class="text-center">Student Signup</h1>
        <form action="signup.php" method="post">
            <div class="form row">
                <div class="form-group col-md-6 ">
                    <label for="username">Username</label>
                    <span>*
                    </span>

                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

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
                    <label for="emailaddress">Email Address</label>
                    <span>*
                    </span>

                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group col-md-3">
                    <label for="age">Age</label>
                    <span>*
                    </span>

                    <input type="number" class="form-control" id="age" name="age">
                </div>
                <div class="form-group col-md-3">
                    <label for="batchyear">Batch Year</label>
                    <span>*
                    </span>

                    <input type="number" class="form-control" id="batchyear" name="batchyear">
                </div>
            </div>

            <div class="form row ">


                <label for="branch" class="col control-label">Branch</label>
                <span>*
                </span>

                <br>

                <div class="col-sm-12">
                    <select class="form-control" id="branch" name="branch">
                        <option value="">N/A
                        </option>
                        <option value=1>Computer Science
                        </option>
                        <option value=2>Artificial Intelligence
                        </option>
                        <option value=4>Mathematics and Computing
                        </option>
                        <option value=8>Electrical and Electronics
                        </option>
                        <option value=16>Chemical
                        </option>
                        <option value=32>Mechanical
                        </option>
                        <option value=64>Civil
                        </option>
                        <option value=128>Metallurgy
                        </option>

                    </select>
                </div>
            </div>
            <br>



            <div class="form row">
                <div class="form-group col-md-4">
                    <label for="aoi">Area of Interest</label>
                    <span>*
                    </span>

                    <input type="text" class="form-control" id="aoi" name="aoi">
                </div>
                <div class="form-group col-md-4">
                    <label for="class10">Class 10 marks</label>
                    <span>*
                    </span>

                    <input type="decimal" class="form-control" id="class10" name="class10">
                </div>
                <div class="form-group col-md-4">
                    <label for="class12">Class 12 marks</label>
                    <span>*
                    </span>

                    <input type="decimal" class="form-control" id="class12" name="class12">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-4">
                    <label for="currentsem">Current Semester</label>
                    <input type="number" class="form-control" id="currentsem" name="currentsem"
                        value="<?php echo $GLOBALS['currentsem'] ?>">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-3">
                    <label for="sem1">Semester 1 spi</label>
                    <input type="decimal" class="form-control" id="sem1" name="sem1">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem2">Semester 2 spi</label>
                    <input type="decimal" class="form-control" id="sem2" name="sem2">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem3">Semester 3 spi</label>
                    <input type="decimal" class="form-control" id="sem3" name="sem3">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem4">Semester 4 spi</label>
                    <input type="decimal" class="form-control" id="sem4" name="sem4">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-4">
                    <label for="sem5">Semester 5 spi</label>
                    <input type="decimal" class="form-control" id="sem5" name="sem5">
                </div>
                <div class="form-group col-md-4">
                    <label for="sem6">Semester 6 spi</label>
                    <input type="decimal" class="form-control" id="sem6" name="sem6">
                </div>
                <div class="form-group col-md-4">
                    <label for="sem7">Semester 7 spi</label>
                    <input type="decimal" class="form-control" id="sem7" name="sem7">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="transcript">Transcript link</label>

                    <input type="text" class="form-control" id="transcript" name="transcript">
                </div>
                <div class="form-group col-md-6">
                    <label for="resume">Resume Link</label>

                    <input type="text" class="form-control" id="resume" name="resume">
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