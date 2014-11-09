
<!-- modified from the sample pieChart file from the chart.js documentation. -->
<?php
include "./input.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="Chart.js"></script>
</head>
<body>
<script>
    var pieData =
        [
            <?php
                generateChartData();
            ?>
        ];
</script>
window.onload = function() {
var ctx = document.getElementById("chart-area").getContext("2d");
window.myPie = new Chart(ctx).Pie(pieData);
}
</body>
</html>

