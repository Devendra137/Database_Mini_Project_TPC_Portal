<?php
session_start();
// $id = $_SESSION['id'];
include 'connection.php';

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello</title>
    <script>
        function checkdelete() {
            // let text;
            // if(confirm("Are you sure you want to delete this Role?")==true){

            // }
            return confirm('Are you sure you want to delete this Role');
        }
    </script>
</head>

<body>
    <?php require '_nav_in_admin.php' ?>
    <div class="container-fluid px-4">
        <br>
        <!-- <h1 class="mt-4">This is company page</h1> -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        <center>Students<center>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-light">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Roll No</th>
                                    <th scope="col">Batch Year</th>
                                    <th scope="col">Branch</th>
                                    <th scope="col">Current Sem</th>
                                    <th scope="col">CPI </th>
                                    <th scope="col">Operations </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "select * from students";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $row["username"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["email"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["rollno"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["batchyear"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["branch"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["currentsem"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["cpi"]; ?>
                                            </td>
                                            <td><a href="updateprofilestud.php?rollno=<?= $row["rollno"]; ?>"
                                                    class="btn btn-dark">Update</a>
                                                <a href="admin_delete_student.php?rollno=<?= $row["rollno"]; ?>"
                                                    onclick="return checkdelete()" class="btn btn-danger">Delete</a>
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


</body>

</html>