<?php

include "connection.php";
$GLOBALS["start_year"] = $_GET["start_year"];
$start_year = $GLOBALS['start_year'];
$GLOBALS["end_year"] = $_GET["end_year"];
$end_year = $GLOBALS['end_year'];
$GLOBALS['branches'] = $_GET['branches'];
$branches = $GLOBALS['branches'];

// Retrieve data from recruited table and format it into data points
$sql = "select name,max(ctc) as max_ctc, avg(ctc) as avg_ctc, min(ctc) as min_ctc from recruited where (branch & $branches) > 0 and year >= $start_year and year <= $end_year group by name";
$result = mysqli_query($conn, $sql);
$dataPoints1 = array();
$dataPoints2 = array();
$dataPoints3 = array();
while ($row = mysqli_fetch_assoc($result)) {
    $dataPoints1[] = array("label" => $row["name"], "y" => $row["max_ctc"]);
    $dataPoints2[] = array("label" => $row["name"], "y" => $row["avg_ctc"]);
    $dataPoints3[] = array("label" => $row["name"], "y" => $row["min_ctc"]);
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
                    text: "CTC Data"
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
                    indexLabel: "{y}",
                    yValueFormatString: "$#0.##",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                }, {
                    type: "column",
                    name: "Avg CTC",
                    indexLabel: "{y}",
                    yValueFormatString: "$#0.##",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                }, {
                    type: "column",
                    name: "Min CTC",
                    indexLabel: "{y}",
                    yValueFormatString: "$#0.##",
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