<?php

session_start();

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $company = $_POST["company"];
  $GLOBALS['company'] = $company;
  $eligbr = array_values($_POST['eligible-branch']);
  $eligible_branch = 0;

  $i = 0;

  while ($i < count($eligbr)) {
    $eligible_branch = $eligible_branch + $eligbr[$i];
    $i = $i + 1;
  }
  $GLOBALS['branches'] = $eligible_branch;
}
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



  <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['corechart'] });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Year', 'Total_students'],
       
      ]);

      var options = {
        title: 'Year wise statistics'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script> -->

  <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script>

    window.onload = function () {

      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title: {
          text: "Year Wise Statistics"
        },
        axisY: {
          title: "Total Students"
        },
        data: [{
          type: "column",
          dataPoints:
        }]
      });
      chart.render();

    }
  </script> -->


  <title>Year Wise Stats</title>
</head>

<body>
  <?php require '_nav_in.php' ?>

  <div class="container-fluid px-4">
    <br>
    <!-- <h1 class="mt-4">This is company page</h1> -->
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Year-wise Placement Statistics</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id=example class="table table-striped table-light table text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Year</th>
                  <th scope="col">Job Title</th>
                  <th scope="col">Number of Students hired</th>
                  <th scope="col">Max CTC</th>
                  <th scope="col">Min CTC</th>
                  <th scope="col">Average CTC</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $company = $GLOBALS['company'];
                $branch = $GLOBALS['branches'];
                $query = "select year, job_title, concat(job_title, '_', year) as identifier, count(rollno), max(ctc), min(ctc), avg(ctc) from recruited where (branch & $branch) > 0 and name='$company' group by (identifier);";
                $query_run = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $row) {
                    ?>
                    <tr>
                      <td>
                        <?= $row["year"]; ?>
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
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
            <script src="table.js"></script>


          </div>


        </div>



      </div>
    </div>

    <div class="container my-4">
      <a href="piechart.php?company=<?= $GLOBALS["company"]; ?>&branches=<?= $GLOBALS["branches"]; ?>"
        class="btn btn-primary" style="margin-right:30px">Piechart Year
        Wise</button></a>
      <a href="bargraph.php?company=<?= $GLOBALS["company"]; ?>&branches=<?= $GLOBALS["branches"]; ?>"><button
          type="submit" class="btn btn-primary" style="margin-right:30px">Bargraph
          Year Wise</button></a>
      <a href="maxminavg.php?company=<?= $GLOBALS["company"]; ?>&branches=<?= $GLOBALS["branches"]; ?>"><button
          type="submit" class="btn btn-primary">CTC Year
          Wise</button></a>
    </div>


</body>

</html>