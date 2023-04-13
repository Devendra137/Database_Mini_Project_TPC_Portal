<?php
$showAlert = false;
$showError = false;
session_start();

$rollno = $_SESSION['rollno'];

include "connection.php";

$details = mysqli_fetch_assoc($conn->query("select * from students where rollno='$rollno'"));

$GLOBALS['username'] = $details["username"];
$GLOBALS['email'] = $details["email"];
$GLOBALS['age'] = $details["age"];
$GLOBALS['batchyear'] = $details["batchyear"];
$GLOBALS['spec'] = $details["spec"];
$GLOBALS['aoi'] = $details["aoi"];
$GLOBALS['class10'] = $details["class10"];
$GLOBALS['class12'] = $details["class12"];
$GLOBALS['sem1'] = $details["sem1"];
$GLOBALS['sem2'] = $details["sem2"];
$GLOBALS['sem3'] = $details["sem3"];
$GLOBALS['sem4'] = $details['sem4'];
$GLOBALS['sem5'] = $details['sem5'];
$GLOBALS['sem6'] = $details['sem6'];
$GLOBALS['sem7'] = $details['sem7'];
$GLOBALS['sem8'] = $details['sem8'];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello</title>
</head>
<body>
<?php require '_nav_in.php' ?>
    <div class="container-fluid px-4">
      <br>
      <!-- <h1 class="mt-4">This is company page</h1> -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>JOBS YOU ARE ELIGIBLE FOR</h3>
                </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped table-light">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Job title</th>
                      <th scope="col">Job profile</th>
                      <th scope="col">Company</th>
                      <th scope="col">Salary</th>
                      <th scope="col">Class10</th>
                      <th scope="col">Class12</th>
                      <th scope="col">Sem6</th>
                      <th scope="col">Click to apply</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $class10 = $GLOBALS['class10'];
                    $class12 = $GLOBALS['class12'];
                    $sem6 = $GLOBALS['sem6'];

                      $query = "select * from company2 natural join companies where class10 <= '$class10' and class12 <= '$class12' and sem6 <= '$sem6';";
                      $query_run = mysqli_query($conn,$query);
                      if(mysqli_num_rows($query_run)>0){
                        foreach($query_run as $row){
                          ?>
                          <tr>
                            <td><?= $row["jobtitle"];?></td>
                            <td><?= $row["jobprofile"];?></td>
                            <td><?= $row["name"];?></td>
                            <td><?= $row["salary"];?></td>
                            <td><?= $row["class10"];?></td>
                            <td><?= $row["class12"];?></td>
                            <td><?= $row["sem6"];?></td>
                            <td><form id="myForm" action="submit.php" method="post" target="_blank"><button type="submit" class="btn btn-primary" id="submitBtn">Apply</button></form></td>
                            
                          </tr>
                        <?php
                        }
                      }
                      else{
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
