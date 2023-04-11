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

    <title>Hello</title>
</head>
<body>
<?php require '_nav.php' ?>
    <div class="container-fluid px-4">
      <br>
      <!-- <h1 class="mt-4">This is company page</h1> -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>ALL JOBS</h3>
                </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped table-light">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Job title</th>
                      <th scope="col">Job status</th>
                      <th scope="col">Company</th>
                      <th scope="col">Salary</th>
                      <th scope="col">Class10</th>
                      <th scope="col">Class12</th>
                      <th scope="col">Sem6</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $query = "select * from company";
                      $query_run = mysqli_query($conn,$query);
                      if(mysqli_num_rows($query_run)>0){
                        foreach($query_run as $row){
                          ?>
                          <tr>
                            <td><?= $row["jobt"];?></td>
                            <td><?= $row["jobs"];?></td>
                            <td><?= $row["comp"];?></td>
                            <td><?= $row["sal"];?></td>
                            <td><?= $row["class10"];?></td>
                            <td><?= $row["class12"];?></td>
                            <td><?= $row["sem6"];?></td>
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

            </body>
            </html>