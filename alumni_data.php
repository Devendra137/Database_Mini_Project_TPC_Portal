<?php
include 'connection.php'
  ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Hello</title>
</head>

<body>

  <?php require '_nav_in_alumni.php' ?>
  <div class="container-fluid px-4">
    <br>
    <!-- <h1 class="mt-4">This is company page</h1> -->
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>ALL ALUMNI</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-striped table-light table-hover">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Roll No</th>
                  <th scope="col">Batch Of</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone No</th>
                  <th scope="col">LinkedIn</th>
                  <th scope="col">Job</th>
                  <th scope="col">Company</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "select * from alumni;";
                $query_run = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $row) {
                    ?>
                    <tr>
                      <td>
                        <?= $row["fname"]; ?>
                      </td>
                      <td>
                        <?= $row["rollno"]; ?>
                      </td>
                      <td>
                        <?= $row["batchof"]; ?>
                      </td>
                      <td>
                        <?= $row["email"]; ?>
                      </td>
                      <td>
                        <?= $row["phone"]; ?>
                      </td>
                      <td>
                        <?= $row["linkedin"]; ?>
                      </td>
                      <td>
                        <?= $row["job"]; ?>
                      </td>
                      <td>
                        <?= $row["company"]; ?>
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
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
            <script src="table.js"></script>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>