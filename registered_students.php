<?php
session_start();
$id = $_GET['id'];
$role_id = $_GET['role_id'];

include 'connection.php';
$name = mysqli_fetch_assoc($conn->query("select name from companies where id = '$id'"))['name'];
$GLOBALS['table_name'] = $name . '_' . $role_id;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registered Students</title>
</head>

<body>
    <?php require '_nav_comp.php' ?>
    <div class="container-fluid px-4">
        <br>
        <!-- <h1 class="mt-4">This is company page</h1> -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        <center>All Students registered for this job<center>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-light table-hover table text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Roll No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Class 10 marks</th>
                                    <th scope="col">Class 12 marks</th>
                                    <th scope="col">CPI</th>
                                    <th scope="col">Area(s) of interest</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table_name = $GLOBALS['table_name'];
                                $query = "select * from $table_name join students";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $row["rollno"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["username"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["class10"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["class12"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["cpi"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["aoi"]; ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="6">No record found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>


</body>

</html>