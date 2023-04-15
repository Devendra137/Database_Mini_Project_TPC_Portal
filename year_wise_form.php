<?php
$showAlert = false;
$showError = false;
session_start();

$rollno = $_SESSION['rollno'];

include "connection.php";
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

    <div class="container my-4">
        <br><br>
        <h3>Personal Details</h3><br>
        <form method="post" action="updateprofile.php">
            <div class="form row">
                <div class="form-group col-md-6 ">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp"
                        value="<?php echo $GLOBALS['username'] ?>">
                </div>
                <div class="form-group col-md-6 ">
                    <label for="rollno">Roll Number</label>
                    <input type="text" class="form-control" id="rollno" name="rollno" aria-describedby="emailHelp"
                        value="<?php echo $_SESSION['rollno'] ?>" readonly>
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="emailaddress">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="<?php echo $GLOBALS['email'] ?>" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" value="<?php echo $GLOBALS['age'] ?>">
                </div>
            </div>
            <br>
            <br>
            <h3>Academic Details</h3><br>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="spec">Specialization</label>
                    <input type="text" class="form-control" id="spec" name="spec" value="<?php echo $GLOBALS['spec'] ?>"
                        readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="batchyear">Batch Year</label>
                    <input type="number" class="form-control" id="batchyear" name="batchyear"
                        value="<?php echo $GLOBALS['batchyear'] ?>" readonly>
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-12">
                    <label for="aoi">Area(s) of Interest</label>
                    <input type="text" class="form-control" id="aoi" name="aoi" value="<?php echo $GLOBALS['aoi'] ?>">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="class10">Class 10 marks</label>
                    <input type="decimal" class="form-control" id="class10" name="class10"
                        value="<?php echo $GLOBALS['class10'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="class12">Class 12 marks</label>
                    <input type="decimal" class="form-control" id="class12" name="class12"
                        value="<?php echo $GLOBALS['class12'] ?>">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-3">
                    <label for="sem1">Sem1 SPI</label>
                    <input type="decimal" class="form-control" id="sem1" name="sem1"
                        value="<?php echo $GLOBALS['sem1'] ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem2">Sem2 SPI</label>
                    <input type="decimal" class="form-control" id="sem2" name="sem2"
                        value="<?php echo $GLOBALS['sem2'] ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem3">Sem3 SPI</label>
                    <input type="decimal" class="form-control" id="sem3" name="sem3"
                        value="<?php echo $GLOBALS['sem3'] ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem4">Sem4 SPI</label>
                    <input type="decimal" class="form-control" id="sem4" name="sem4"
                        value="<?php echo $GLOBALS['sem4'] ?>">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-3">
                    <label for="sem5">Sem5 SPI</label>
                    <input type="decimal" class="form-control" id="sem5" name="sem5"
                        value="<?php echo $GLOBALS['sem5'] ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem6">Sem6 SPI</label>
                    <input type="decimal" class="form-control" id="sem6" name="sem6"
                        value="<?php echo $GLOBALS['sem6'] ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem7">Sem7 SPI</label>
                    <input type="decimal" class="form-control" id="sem7" name="sem7"
                        value="<?php echo $GLOBALS['sem7'] ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem8">Sem8 SPI</label>
                    <input type="decimal" class="form-control" id="sem8" name="sem8"
                        value="<?php echo $GLOBALS['sem8'] ?>">
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
