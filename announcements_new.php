<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $announcement = $_POST['announcement'];

  $sql = ("insert into announcements values(now(), '$announcement');");
  $result = mysqli_query($conn, $sql);
  if ($result) {
      header("location: announcements_student.php");
  }
  else {
    echo("Announcement could not be made...");
  }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Make New Announcement</title>
</head>
<body>
<?php require '_nav_in_admin.php' ?>
    <div class="container-fluid px-4">
      <!-- <h1 class="mt-4">This is company page</h1> -->
      <div class="container my-4">
          <br><br>
          <h3>Make a new Announcement</h3><br>
          <form method="post" action="announcements_new.php">
              <div class="form row">
                  <div class="form-group col-md-12 ">
                      <label for="announcement">Announcement</label>
                      <input type="text" class="form-control" id="announcement" name="announcement" aria-describedby="emailHelp">
                  </div>
              </div>
              <br>
              <center><button type="submit" class="btn btn-primary">Update</button></center>
          </form>
      </div>
    </div>

</body>
</html>
