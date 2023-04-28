<?php
// Include connection.php for database connection
include "connection.php";
$GLOBALS['company'] = $_GET["company"];
$GLOBALS['role'] = $_GET["role"];
$company = $GLOBALS['company'];
$role = $GLOBALS['role'];

// Query to retrieve data from recruited table

$result = $conn->query("select branch, count(rollno) as students_placed from recruited where name = '$company' and job_title = '$role' group by branch;");


// Initialize an empty array to store dataPointsa
$dataPoints = array();

// Loop through the query result and populate dataPoints array
while ($row = $result->fetch_assoc()) {
    $dataPoints[] = array(
        "label" => getBranch($row['branch']),
        "y" => intval($row['students_placed'])
    );
}

?>
<!DOCTYPE HTML>
<html>

<head>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Branch Wise Statistics"
                },
                axisY: {
                    title: "Total Students"
                },
                data: [{
                    type: "column",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }
    </script>
</head>

<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>