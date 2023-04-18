<?php
$showAlert = false;
$showError = false;
session_start();

include "connection.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Company Wise Statistics Form</title>
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
        <h3>Company-wise Statistics</h3><br>
        <form method="post" action="company_wise.php">
            <div class="form row">
                <div class="form-group col-md-12 ">
                    <label for="start_year">Start Year</label>
                    <input type="number" class="form-control" id="start_year" name="start_year">
                </div>
            </div>

            <div class="form row">
                <div class="form-group col-md-12">
                    <label for="end_year">End Year</label>
                    <input type="number" class="form-control" id="end_year" name="end_year">
                </div>

            </div>
            <div class="form row">
                <div class="form-group col-md-6">
                    <label for="eligible-branch">Branches</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="eligible-branch[]" id="cse" value='1'>
                        <label class="form-check-label" for="it">Computer Science</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="eligible-branch[]" id="aids" value='2'>
                        <label class="form-check-label" for="aids">Artificial Intelligence and Data Science</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="eligible-branch[]" id="me" value='4'>
                        <label class="form-check-label" for="mnc">Mathematics and Computing</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="eligible-branch[]" id="me" value='8'>
                        <label class="form-check-label" for="ecommerce">Electrical and Electronics</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="eligible-branch[]" id="cee" value='16'>
                        <label class="form-check-label" for="teaching">Chemical and Environmental</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="eligible-branch[]" id="me" value='32'>
                        <label class="form-check-label" for="me">Mechanical </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="eligible-branch[]" id="ce" value='64'>
                        <label class="form-check-label" for="ce">Civil</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="eligible-branch[]" id="met" value='128'>
                        <label class="form-check-label" for="mme">Metallurgical</label>
                    </div>
                </div>
                <br>
                <br>
            </div>
            <center><button type="submit" class="btn btn-primary">View Statistics</button></center>
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