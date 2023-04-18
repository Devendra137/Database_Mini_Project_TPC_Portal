<?php
session_start();
$id = $_SESSION['id'];
include 'connection.php'
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
  <?php require '_nav_comp.php' ?>
  <div class="container-fluid px-4">
    <br>
    <!-- <h1 class="mt-4">This is company page</h1> -->
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>
            <center>ALL ROLES BY THE COMPANY<center>
          </h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-light table-hover table text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Job title</th>
                  <th scope="col">Job profile</th>
                  <th scope="col">Salary</th>
                  <th scope="col">Last Date to Apply</th>
                  <th scope="col">Operations</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "select * from company2 where id='$id'";
                $query_run = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $row) {
                    ?>
                    <tr>
                      <td>
                        <?= $row["jobtitle"]; ?>
                      </td>
                      <td>
                        <?= $row["jobprofile"]; ?>
                      </td>
                      <td>
                        <?= $row["salary"]; ?>
                      </td>
                      <td>
                        <?= $row["date"]; ?>
                      </td>
                      <td><a href="updaterole.php?role_id=<?= $row["role_id"]; ?>" class="btn btn-dark">Update</a>
                        <a href="deleterole.php?role_id=<?= $row["role_id"]; ?>" onclick="return checkdelete()"
                          class="btn btn-danger">Delete</a>
                        <a href="viewregstud.php?role_id=<?= $row["role_id"]; ?>&id=<?= $row["id"]; ?>"
                          class="btn btn-danger">Registered Student</a>
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