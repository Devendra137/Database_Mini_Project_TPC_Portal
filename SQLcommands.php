<?php
include 'connection.php';

$GLOBALS['result'] = $conn->query('show tables;');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $command = $_POST['command'];
  $GLOBALS['result'] = $conn->query($command);
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Direct SQL commands</title>
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
            <center>SQL commands</center>
          </h2>
        </div>
        <div class="card-body">
          <div class="container my-4">
            <form method="post" action="sqlcommands.php">
              <div class="form row">
                <div class="form-group col-md-12">
                  <label for="command">Query </label>
                  <input type="text" class="form-control" id="command" name="command" placeholder="show tables;"
                    aria-describedby="emailHelp">
                </div>
              </div>

              <div class="form row">
                <div class="form-group col-md-12">
                  <center>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </center>
                </div>
              </div>

              <br>
              <br>


              <div class="table-responsive">
                <table class="table table-striped table-light">
                  <tr>
                    <?php
                    $result = $GLOBALS['result'];
                    while ($field = $result->fetch_field()) {
                      echo '<th>' . $field->name . '</th>';
                    }

                    echo '</tr>';

                    while ($row = $result->fetch_assoc()) {
                      echo '<tr>';
                      foreach ($row as $cell) {
                        echo '<td>' . $cell . '</td>';
                      }
                      echo '</tr>';
                    }
                    ?>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>