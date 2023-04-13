
<?php

$showAlert = false;
$showError = false;
session_start();

$id = $_SESSION['id'];
$name = $_SESSION['name'];

include "connection.php";

$details = mysqli_fetch_assoc($conn->query("select * from companies where id='$id'"));

$GLOBALS['name'] = $details["name"];
$GLOBALS['email'] = $details["email"];
$GLOBALS['description'] = $details["description"];
$GLOBALS['phone'] = $details["phone"];
$GLOBALS['website'] = $details["website"];
$GLOBALS['rep_name'] = $details["rep_name"];
$GLOBALS['rep_phone'] = $details["rep_phone"];
$GLOBALS['rep_email'] = $details["rep_email"];
$GLOBALS['id'] = $details["id"];
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';
    $id = $_SESSION["id"];

    $email = $_POST["email"];
    $jobtitle = $_POST["jobtitle"];
    $jobprofile = $_POST["jobprofile"];
    $jobtype = $_POST["jobtype"];
    $salary = $_POST["salary"];
    $skill = $_POST["skill"];
    $date = $_POST["date"];
    // $spec = $_POST["spec"];
    // $aoi = $_POST["aoi"];
    $class10 = $_POST["class10"];
    $class12 = $_POST["class12"];
    // $sem1 = $_POST["sem1"];
    // $sem2 = $_POST["sem2"];
    // $sem3 = $_POST["sem3"];
    // $sem4 = $_POST["sem4"];
    // $sem5 = $_POST["sem5"];
    $sem6 = $_POST["sem6"];
    // $sem7 = $_POST["sem7"];
    // $sem8 = $_POST["sem8"];

   



    // Check whether this username exists
    // $existSql = "SELECT * FROM `students` WHERE rollno = '$rollno'";
    // $result = mysqli_query($conn, $existSql);
    // $numExistRows = mysqli_num_rows($result);
    // if ($numExistRows > 0) {
    //     // $exists = true;
    //     $showError = "User Already Exists";
    // } else {
    //     if (!endsWith($email, '@iitp.ac.in')) { //email should have iitp.ac.in
    //         $showError = "Enter only IITP email address";
    //     }
    //     // $exists = false;
    //     if (($password == $cpassword) && endsWith($email, '@iitp.ac.in')) {
    //         $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `company2` ( `id`,`email`, `jobtitle`, `jobprofile`,`jobtype`,`salary`,`skill`,`date`,`class10`,`class12`,`sem6`) VALUES ('$id', '$email', '$jobtitle','$jobprofile','$jobtype','$salary','$skill','$date','$class10','$class12','$sem6')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
    //     } else if (!endsWith($email, '@iitp.ac.in')) {
    //         $showError = "Enter only IITP email";
    //     } else {
    //         $showError = "Passwords do not match";
    //     }
    // }
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
    <?php require '_nav_comp.php' ?>
    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> New Role Added
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
        <h1 class="text-center">Add Role</h1>
        <form action="newrole.php" method="post">
        <div class="form row">
                <div class="form-group col-md-6 ">
                    <label for="name">Company name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                    value="<?php echo $GLOBALS['name'] ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email"
                    value="<?php echo $GLOBALS['email'] ?>" readonly>
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="jobtitle">Job Title</label>
                    <input type="text" class="form-control" id="jobtitle" name="jobtitle" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="jobprofile">Job Profile</label>
                    <input type="text" class="form-control" id="jobprofile" name="jobprofile" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                    <label for="jobtype">Job type</label>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name = "jobtype" id="flexRadioDefault1" value="IT">
                    <label class="form-check-label" for="flexRadioDefault1">
                        IT
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jobtype" id="flexRadioDefault2" value="Finance">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Finance
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jobtype" id="flexRadioDefault3" value="Consulting">
                    <label class="form-check-label" for="flexRadioDefault3">
                        Consulting
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jobtype" id="flexRadioDefault4" value="E-commerce">
                    <label class="form-check-label" for="flexRadioDefault4">
                        E-commerce
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jobtype" id="flexRadioDefault5" value="Teaching">
                    <label class="form-check-label" for="flexRadioDefault5">
                        Teaching
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jobtype" id="flexRadioDefault6" value="Other">
                    <label class="form-check-label" for="flexRadioDefault6">
                        Other
                    </label>
                    </div>
                </div>
            </div>
            

            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="salary">Minimum Salary</label>
                    <input type="decimal" class="form-control" id="salary" name="salary">
                </div>
                <div class="form-group col-md-6">
                    <label for="skill">Primary Skill Requirement</label>
                    <input type="text" class="form-control" id="skill" name="skill">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="lastdate">Last Date for registration</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group col-md-3">
                    <label for="class10">Minimum class 10 marks</label>
                    <input type="decimal" class="form-control" id="class10" name="class10">
                </div>
                <div class="form-group col-md-3">
                    <label for="class12">Minimum class 12 marks</label>
                    <input type="decimal" class="form-control" id="class12" name="class12">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="sem6">Sem 6 spi</label>
                    <input type="text" class="form-control" id="sem6" name="sem6">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Add Role</button>
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
