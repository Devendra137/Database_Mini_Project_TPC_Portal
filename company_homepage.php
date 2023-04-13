<?php
include 'connection.php';
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Home Page</title>
</head>
<body>
<?php require '_nav_comp.php' ?>
    <div class="container-fluid px-4">
      <br>
      <!-- <h1 class="mt-4">This is company page</h1> -->
        <div class="col-md-12">
             Hello, <?php echo $_SESSION['id'] ?>.
        </div>
      </div>
    </div>

</body>
</html>
