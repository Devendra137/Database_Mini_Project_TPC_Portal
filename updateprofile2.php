<?php
$showAlert = false;
$showError = false;
session_start();

$GLOBALS['id'] = $_GET['id'];
$id = $GLOBALS['id'];
echo $id;

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
$GLOBALS['id'] = $id;
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';
    $name = $_POST["name"];
    $description = $_POST["description"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $rep_name = $_POST["rep_name"];
    $rep_phone = $_POST["rep_phone"];
    $rep_email = $_POST["rep_email"];


    $conn->query("update companies set name='$name', email = '$email',description='$description', website='$website', rep_name='$rep_name', rep_phone='$rep_phone', rep_email='$rep_email' where id ='$id';");
    header("location: admin_company.php");
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
    }
    ?>

    <div class="container my-4">
        <br>
        <h1 class="text-center">Update Details</h3>
            <br>
            <br>
            <form action="updateprofile2.php?id=<?= $GLOBALS["id"]; ?>" method="post">
                <h3 class="text-center">Company Details</h3>
                <br>
                <div class="form row">
                    <div class="form-group col-md-12 ">
                        <label for="name">Company Name(as in documents)</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                            value="<?php echo $name ?>">


                    </div>
                </div>

                <div class="form row">
                    <div class="form-group col-md-6">
                        <label for="email">Company Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone">Company Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone ?>">
                    </div>
                </div>
                <div class="form row">
                    <div class="form-group col-md-6">
                        <label for="website">Company Website</label>
                        <input type="text" class="form-control" id="website" name="website"
                            value="<?php echo $website ?>">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="description"> Company Description </label>
                        <input type="text" class="form-control" id="description" name="description"
                            value="<?php echo $description ?>">
                    </div>
                </div>

                <br>
                <br>

                <h3 class="text-center">Representative Details</h3>
                <br>
                <div class="form row">
                    <div class="form-group col-md-6">
                        <label for="rep_name">Representative Name</label>
                        <input type="text" class="form-control" id="rep_name" name="rep_name"
                            value="<?php echo $rep_name ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="rep_phone">Representative Phone</label>
                        <input type="text" class="form-control" id="rep_phone" name="rep_phone"
                            value="<?php echo $rep_phone ?>">
                    </div>
                </div>
                <div class="form row">
                    <div class="form-group col-md-12">
                        <label for="rep_email">Representative Email</label>
                        <input type="text" class="form-control" id="rep_email" name="rep_email"
                            value="<?php echo $rep_email ?>">
                    </div>
                </div>

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