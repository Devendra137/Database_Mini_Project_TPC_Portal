<?php

include "connection.php";
$GLOBALS['company'] = $_GET["company"];
$GLOBALS['role'] = $_GET["role"];
$company = $GLOBALS['company'];
$role = $GLOBALS['role'];
?>
<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['branch', 'students_placed'],
                <?php
                // Retrieve data from the "recruited" table
                $result = $conn->query("select branch, count(rollno) as students_placed from recruited where name = '$company' and job_title = '$role' group by branch;");
                while ($row = $result->fetch_assoc()) {
                    echo "['" . getBranch($row['branch']) . "', " . $row['students_placed'] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Branch wise statistics'
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