<?php
include "connection.php";
$GLOBALS["start_year"] = $_GET["start_year"];
$start_year = $GLOBALS['start_year'];
$GLOBALS["end_year"] = $_GET["end_year"];
$GLOBALS['branches'] = $_GET['branches'];
$end_year = $GLOBALS['end_year'];

?>
<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Company', 'Total_students'],
                <?php
                // Retrieve data from the "recruited" table
                $branches = $GLOBALS['branches'];
                $result = $conn->query("select name, count(rollno) AS Total_students from recruited where (branch & $branches) > 0 and year >= $start_year and year <= $end_year group by name;");
                while ($row = $result->fetch_assoc()) {
                    echo "['" . $row['name'] . "', " . $row['Total_students'] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Company wise statistics'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>

</html>