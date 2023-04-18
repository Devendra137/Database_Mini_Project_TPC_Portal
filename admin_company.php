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

    <title>Company</title>
    <script>
        function checkdelete() {
            // let text;
            // if(confirm("Are you sure you want to delete this Role?")==true){

            // }
            return confirm('Are you sure you want to delete this Company');
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
                        <center>Companies<center>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-light table-hover table text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Rep Name</th>
                                    <th scope="col">Rep Phone</th>
                                    <th scope="col">Rep Email</th>
                                    <th scope="col">Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "select * from companies";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $row["name"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["email"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["website"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["rep_name"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["rep_phone"]; ?>
                                            </td>
                                            <td>
                                                <?= $row["rep_email"]; ?>
                                            </td>
                                            <td><a href="updateprofile2.php?id=<?= $row["id"]; ?>"
                                                    class="btn btn-success">Update</a>
                                                <a href="admin_delete_student.php?id=<?= $row["id"]; ?>"
                                                    onclick="return checkdelete()" class="btn btn-danger">Delete</a>
                                                <!-- <a href="admin_changepass_company.php?id="
                                                    onclick="return checkdelete()" class="btn btn-dark">Change Password</a> -->
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