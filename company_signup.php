<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';
    $name = $_POST["name"];
    $pwd = $_POST["password"];
    $cpwd = $_POST["conf_password"];
    $description = $_POST["description"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $rep_name = $_POST["rep_name"];
    $rep_phone = $_POST["rep_phone"];
    $rep_email = $_POST["rep_email"];

    function endsWith($string, $smol)
    {
        $len = strlen($smol);
        if ($len == 0) {
            return true;
        }
        return substr($string, -$len) === $smol;
    }



    // Check whether this username exists
    $existSql = "SELECT * FROM companies WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        // $exists = true;
        $showError = "User with given Email Already Exists";
    } else {
        // TODO: validate email
        // $exists = false;
        if ($pwd == $cpwd) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO companies (name, email, password, description, phone, email, website, rep_name, rep_phone, rep_email) VALUES ('$name', '$email', '$hash', '$description', '$phone', '$email', '$website', '$rep_name', '$rep_phone', '$rep_email')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords do not match";
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
    <?php require '_nav.php' ?>
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
        <h1 class="text-center">Company Signup</h1>
        <form action="signup.php" method="post">
            <div class="form row">
                <div class="form-group col-md-12 ">
                    <label for="name">Company Name(as in documents)</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group col-md-6">
                    <label for="conf_password">Confirm Password</label>
                    <input type="password" class="form-control" id="conf_password" name="conf_password">
                    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="email">Company Email Address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group col-md-3">
                    <label for="age">Company Phone</label>
                    <input type="number" class="form-control" id="age" name="age">
                </div>
                <div class="form-group col-md-3">
                    <label for="batchyear">Batch Year</label>
                    <input type="number" class="form-control" id="batchyear" name="batchyear">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="spec">Specialization</label>
                    <input type="text" class="form-control" id="spec" name="spec">
                </div>
                <div class="form-group col-md-6">
                    <label for="aoi">Area of Interest</label>
                    <input type="text" class="form-control" id="aoi" name="aoi">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="class10">Class 10 marks</label>
                    <input type="decimal" class="form-control" id="class10" name="class10">
                </div>
                <div class="form-group col-md-6">
                    <label for="class12">Class 12 marks</label>
                    <input type="decimal" class="form-control" id="class12" name="class12">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-3">
                    <label for="sem1">Sem1 spi</label>
                    <input type="decimal" class="form-control" id="sem1" name="sem1">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem2">Sem2 spi</label>
                    <input type="decimal" class="form-control" id="sem2" name="sem2">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem3">Sem3 spi</label>
                    <input type="decimal" class="form-control" id="sem3" name="sem3">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem4">Sem4 spi</label>
                    <input type="decimal" class="form-control" id="sem4" name="sem4">
                </div>
            </div>
            <div class="form row">
                <div class="form-group col-md-3">
                    <label for="sem5">Sem5 spi</label>
                    <input type="decimal" class="form-control" id="sem5" name="sem5">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem6">Sem6 spi</label>
                    <input type="decimal" class="form-control" id="sem6" name="sem6">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem7">Sem7 spi</label>
                    <input type="decimal" class="form-control" id="sem7" name="sem7">
                </div>
                <div class="form-group col-md-3">
                    <label for="sem8">Sem8 spi</label>
                    <input type="decimal" class="form-control" id="sem8" name="sem8">
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
