<?php
// Retrieve data from recruited table
// Example query assuming table name is "recruited_data"
include "connection.php";

$GLOBALS['company'] = $_GET["company"];
$GLOBALS['role'] = $_GET["role"];
$company = $GLOBALS['company'];
$role = $GLOBALS['role'];

// Retrieve data from recruited table and format it into data points

$sql = "SELECT branch, max(ctc) as max_ctc, avg(ctc) as avg_ctc, min(ctc) as min_ctc FROM recruited where name = '$company' and job_title = '$role' group by branch";

$result = mysqli_query($conn, $sql);
$dataPoints1 = array();
$dataPoints2 = array();
$dataPoints3 = array();
while ($row = mysqli_fetch_assoc($result)) {
    $dataPoints1[] = array("label" => getBranch($row["branch"]), "y" => $row["max_ctc"]);
    $dataPoints2[] = array("label" => getBranch($row["branch"]), "y" => $row["avg_ctc"]);
    $dataPoints3[] = array("label" => getBranch($row["branch"]), "y" => $row["min_ctc"]);
}
mysqli_close($conn);
?>

<!DOCTYPE HTML>
<html>

<head>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Branch Wise Salary Distribution"
                },
                axisY: {
                    title: "Salary",
                    includeZero: true
                },
                legend: {
                    cursor: "pointer",
                    verticalAlign: "center",
                    horizontalAlign: "right",
                    itemclick: toggleDataSeries
                },
                data: [{
                    type: "column",
                    name: "Max CTC",

                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                }, {
                    type: "column",
                    name: "Avg CTC",

                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                }, {
                    type: "column",
                    name: "Min CTC",

                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

            function toggleDataSeries(e) {
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                }
                else {
                    e.dataSeries.visible = true;
                }
                chart.render();
            }

        }
    </script>
</head>

<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>