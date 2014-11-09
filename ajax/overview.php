<!DOCTYPE html>
<html>
<head>
    <title>User Overview</title>
</head>
<body>

<div class="normalSection">
    <div class="sectionContainer" id="weeklyChart">
        <h2>WEEKLY CHARTS \o/</h2>
        <div id="chart">

        </div>
    </div><br>

    <div class="sectionContainer" id="monthlyChart">
        <h2>MONTHLY CHARTS \o/</h2>
    </div><br>

    <div class="sectionContainer" id="yearly">
        <h2>YEARLY CHARTS \o/</h2>
    </div>
</div>

<script
    src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    alert("ping");
    $( "#chart").load( "Controllers/piechart.html.php");
</script>
</body>
</html>