<?php
require 'connection.php';

if (isset($_POST["Submit"])) {
    $jobt = $_POST["jobt"];
    $jobs = $_POST["jobs"];
    $sal = $_POST["sal"];
    $date = $_POST["date"];
    $class10 = $_POST["class10"];
    $class12 = $_POST["class12"];
    $sem6 = $_POST["sem6"];
    $comp = $_POST["comp"];

    $query = "insert into company2 (jobt, jobs, sal,date,class10,class12,sem6,comp) values('$jobt', '$jobs', '$sal','$date','$class10','$class12','$sem6','$comp')"; // insert into table if no issues
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script type="text/javascript">alert("User Registered Succesfully!")</script>';
        echo '<script language="javascript">window.location = "http://localhost/lab8/index.php";</script>';
    } else {
        echo '<script type="text/javascript">alert("Error!")</script>';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add role</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
    p.heading {
        margin-top: 20px;
    }

    p.top {
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 20px;
    }

    h1 {
        font-size: 40px;
    }

    label {
        font-size: 20px;
    }

    input {
        font-size: 20px;
    }

    a {
        font-size: 20px;
    }
</style>


<body>
    <p class="heading">
        <center>
            <h1>Add Role</h1>
        </center>
    </p>
    <p class="top">

    <form action="" method="post">
        <label for="jobt">Job Title: </label>
        <input type="text" id="jobt" name="jobt" required><br><br>

        <label for="jobs">Job Profile: </label>
        <input type="text" id="jobs" name="jobs" required><br><br>

        <label for="sal">Minimum Salary: </label>
        <input type="number" id="sal" name="sal" required><br><br>

        <label for="sal">Primary Skill Requirement: </label>
        <input type="number" id="sal" name="sal" required><br><br>


        <label for="date">Last Date for Registration: </label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="class10">Minimum Class 10 marks: </label>
        <input type="decimal" id="class10" name="class10"><br><br>
        <label for="class12">Minimum Class 12 marks: </label>
        <input type="decimal" id="class12" name="class12"><br><br>
        <label for="sem6">Semester 6 CPI: </label>
        <input type="decimal" id="sem6" name="sem6"><br><br>




        <input type="submit" value='Add role' name="Submit"> <br>
        <p class="top">
    </form>
    </p>
</body>

</html>