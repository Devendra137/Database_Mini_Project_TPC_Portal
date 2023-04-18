<?php
include "connection.php";
$GLOBALS["company"] = $_GET["company"];
$GLOBALS['branches'] = $_GET['branches'];
$company = $GLOBALS['company'];

?>
<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Year', 'Total_students'],
                <?php
                // Retrieve data from the "recruited" table
                $branches = $GLOBALS['branches'];
                $result = $conn->query("SELECT year, COUNT(rollno) AS Total_students FROM recruited where name='$company' and (branch & $branches) > 0 GROUP BY year;");
                while ($row = $result->fetch_assoc()) {
                    echo "['" . $row['year'] . "', " . $row['Total_students'] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Year wise statistics'
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