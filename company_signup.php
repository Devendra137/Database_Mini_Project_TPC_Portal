<?php
$showAlert = false;
$showError = false;
$showError2 = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';

    if (empty($_POST['name'])) {
        $showError2 = true;
    } else {
        $name = $_POST["name"];
    }
    if (empty($_POST['password'])) {
        $showError2 = true;
    } else {
        $pwd = $_POST["password"];
    }
    if (empty($_POST['conf_password'])) {
        $showError2 = true;
    } else {
        $cpwd = $_POST["conf_password"];
    }



    if (empty($_POST['phone'])) {
        $showError2 = true;
    } else {
        $phone = $_POST["phone"];
    }
    if (empty($_POST['email'])) {
        $showError2 = true;
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST['website'])) {
        $showError2 = true;
    } else {
        $website = $_POST["website"];
    }
    if (empty($_POST['rep_name'])) {
        $showError2 = true;
    } else {
        $rep_name = $_POST["rep_name"];
    }
    if (empty($_POST['rep_phone'])) {
        $showError2 = true;
    } else {
        $rep_phone = $_POST["rep_phone"];
    }
    if (empty($_POST['rep_email'])) {
        $showError2 = true;
    } else {
        $rep_email = $_POST["rep_email"];
    }

    $description = $_POST["description"];
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
        if ($pwd == $cpwd && $showError2 == false) {
            $hash = password_hash($pwd, PASSWORD_DEFAULT);
            $sql = "INSERT INTO companies (name, email, password, description, phone, website, rep_name, rep_phone, rep_email) VALUES ('$name', '$email', '$hash', '$description', '$phone', '$website', '$rep_name', '$rep_phone', '$rep_email')";
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
    <?php require '_nav_comp_in.php' ?>
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
        <br>
        <h1 class="text-center">Company Signup</h3>
            <br>
            <br>
            <form action="company_signup.php" method="post">
                <h3 class="text-center">Company Details</h3>
                <br>
                <div class="form row">
                    <div class="form-group col-md-12 ">
                        <label for="name">Company Name(as in documents)</label>
                        <span>*
                        </span>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
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
                        <label for="conf_password">Confirm Password</label>
                        <span>*
                        </span>
                        <input type="password" class="form-control" id="conf_password" name="conf_password">
                        <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
                    </div>
                </div>
                <div class="form row">
                    <div class="form-group col-md-6">
                        <label for="email">Company Email Address</label>
                        <span>*
                        </span>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Company Phone</label>
                        <span>*
                        </span>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                </div>
                <div class="form row">
                    <div class="form-group col-md-12">
                        <label for="website">Company Website</label>
                        <span>*
                        </span>
                        <input type="text" class="form-control" id="website" name="website">
                    </div>
                </div>
                <div class="form row">
                    <div class="form-group col-md-12">
                        <label for="description"> Company Description </label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                </div>

                <br>
                <br>

                <h3 class="text-center">Representative Details</h3>
                <br>
                <div class="form row">
                    <div class="form-group col-md-6">
                        <label for="rep_name">Representative Name</label>
                        <span>*
                        </span>
                        <input type="text" class="form-control" id="rep_name" name="rep_name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="rep_phone">Representative Phone</label>
                        <span>*
                        </span>
                        <input type="text" class="form-control" id="rep_phone" name="rep_phone">
                    </div>
                </div>
                <div class="form row">
                    <div class="form-group col-md-12">
                        <label for="rep_email">Representative Email</label>
                        <span>*
                        </span>
                        <input type="text" class="form-control" id="rep_email" name="rep_email">
                    </div>
                </div>

                <center><button type="submit" class="btn btn-primary">SignUp</button></center>
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