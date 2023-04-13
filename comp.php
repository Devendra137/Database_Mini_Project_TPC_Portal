<?php
require 'connection.php';

function endsWith($string, $smol)
{
  $len = strlen($smol);
  if ($len == 0) {
    return true;
  }
  return substr($string, -$len) === $smol;
}

if(isset($_POST["Submit"])){
    $jobt = $_POST["jobt"];
    $jobs = $_POST["jobs"];
    $comp = $_POST["comp"];
    $sal = $_POST["sal"];
    $class10 = $_POST["class10"];
    $class12 = $_POST["class12"];
    $sem6 = $_POST["sem6"];

                    $query = "insert into company(jobt, jobs, comp, sal,class10,class12,sem6) values('$jobt', '$jobs', '$comp', '$sal','$class10','$class12','$sem6')";      // insert into table if no issues
                    $result = mysqli_query($conn, $query);
    
                    if($result){
                        echo '<script type="text/javascript">alert("User Registered Succesfully!")</script>';
                        echo '<script language="javascript">window.location = "http://localhost/lab8/index.php";</script>';
                    }
                    else{
                        echo '<script type="text/javascript">alert("Error!")</script>';
                    }
                }
    


?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

h1{
    font-size: 40px;
}

label{
    font-size: 20px;
}
input{
    font-size: 20px;
}

a{
    font-size: 20px;
}
</style>


<body>
    <p class = "heading">
        <center><h1>User Registration</h1></center></p>
    <p class = "top">
            <?php if (isset($error)): ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>

            <form action="" method="post">
                <label for="jobt">Job title:</label>
                <input type="text" id="jobt" name="jobt" required><br><br>

                <label for="jobs">Job status:</label>
                <input type="text" id="jobs" name="jobs" required><br><br>

                <label for="comp">Company:</label>
                <input type="text" id="comp" name="comp" required><br><br>
                <label for="sal">Salary:</label>
                <input type="number" id="sal" name="sal" required><br><br>
                <label for="class10">Class10 marks:</label>
                <input type="decimal" id="class10" name="class10" ><br><br>
                <label for="class12">Class12 marks:</label>
                <input type="decimal" id="class12" name="class12" ><br><br>
                <label for="sem6">Sem6 cpi:</label>
                <input type="decimal" id="sem 6" name="sem6" ><br><br>



            

                <input type="submit"  value = 'Register' name = "Submit"> <br>
                <p class = "top">
                Already a user? <a href="index.php">Login</a>
            </form>
    </p>
</body>
</html>
