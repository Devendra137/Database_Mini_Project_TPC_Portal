<?php

session_start();

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $GLOBALS['start_year'] = $_POST["start_year"];
  $GLOBALS['end_year'] = $_POST["end_year"];
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
          <h3>Company-wise Placement Statistics</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-light table text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Company</th>
                  <th scope="col">Job Title</th>
                  <th scope="col">Number of Students hired</th>
                  <th scope="col">Max CTC</th>
                  <th scope="col">Min CTC</th>
                  <th scope="col">Average CTC</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $start_year = $GLOBALS['start_year'];
                $end_year = $GLOBALS['end_year'];
                $query = "select concat(name, '_', job_title) as identifier, name, job_title, count(rollno), max(ctc), min(ctc), avg(ctc) from recruited where year >= $start_year and year <= $end_year group by identifier;";
                $query_run = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $row) {
                    ?>
                    <tr>
                      <td>
                        <?= $row["name"]; ?>
                      </td>
                      <td>
                        <?= $row["job_title"]; ?>
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

  <div class="container my-4 ">
    <a href="piechart2.php?start_year=<?= $GLOBALS["start_year"]; ?>&end_year=<?= $GLOBALS["end_year"]; ?>"><button
        type="submit" class="btn btn-primary" name="btn1" style="margin-right:30px">Piechart
        Company
        Wise</button></a>
    <a href="bargraph2.php?start_year=<?= $GLOBALS["start_year"]; ?>&end_year=<?= $GLOBALS["end_year"]; ?>"><button type="submit" class="btn btn-primary" name="btn2" style="margin-right:30px">Bargraph
        Company
        Wise</button></a>
    <a href="maxminavg2.php?start_year=<?= $GLOBALS["start_year"]; ?>&end_year=<?= $GLOBALS["end_year"]; ?>"><button type="submit" class="btn btn-primary" name="btn3">CTC Company
        Wise</button></a>
  </div>

</body>

</html>