<?php
include 'connection.php'
  ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Student Announcements</title>
</head>

<body>
  <?php require '_nav_in_admin.php' ?>
  <div class="container-fluid px-4">
    <br>
    <!-- <h1 class="mt-4">This is company page</h1> -->
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h2>
            <center>STUDENT ANNOUNCEMENTS</center>
          </h2>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-light">
              <thead class="thead-dark">
                <tr>
                  <th scope="col" width="15%">Time</th>
                  <th scope="col" width="85%">Announcement</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "select * from announcements;";
                $query_run = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $row) {
                    ?>
                    <tr>
                      <td>
                        <?= $row["time"]; ?>
                      </td>
                      <td>
                        <?= $row["announcement"]; ?>
                      </td>
                    </tr>
                    <?php
                  }
                } else {
                  ?>
                  <tr>
                    <td colspan="10">
                      <center>No announcements right now. Come back later!</center>
                    </td>
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