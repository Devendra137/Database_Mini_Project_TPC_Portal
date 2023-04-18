<?php

session_start();

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $GLOBALS['company'] = $_POST["company"];
    $GLOBALS['role'] = $_POST["role"];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Company Wise Data</title>

</head>

<body>
    <style>
        .btn1 {
            margin-right: 50px;
        }

        .btn2 {
            margin-left: 10px;
        }
    </style>
    <?php require '_nav_in.php' ?>
    <div class="container-fluid px-4">
        <br>
        <!-- <h1 class="mt-4">This is company page</h1> -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Branch-wise Placement Statistics</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-light table text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Branch</th>
                                    <th scope="col">Number of Students hired</th>
                                    <th scope="col">Max CTC</th>
                                    <th scope="col">Min CTC</th>
                                    <th scope="col">Average CTC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $company = $GLOBALS['company'];
                                $role = $GLOBALS['role'];
                                $query = "select branch, job_title, count(rollno), max(ctc), min(ctc), avg(ctc) from recruited where name = '$company' and job_title = '$role' group by branch;";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?= getBranch($row["branch"]); ?>
                                            </td>
                                            <td>
                                                <?= $row["count(rollno)"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["max(ctc)"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["min(ctc)"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["avg(ctc)"]; ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="4">No record found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>