<?php
include("../Config/tropasdados.php");
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', '<?php echo $p1nome;?>', '<?php echo $p2nome;?>', '<?php echo $p3nome;?>', '<?php echo $p4nome;?>', '<?php echo $p5nome;?>'],
		  ['<?php echo"Wood Cost";?>',  <?php echo $mediam1;?>,      <?php echo $mediam2;?>, <?php echo $mediam3;?>, <?php echo $mediam4;?>, <?php echo $mediam5;?>],
		  ['<?php echo"Gold Cost";?>',  <?php echo $mediao1;?>,      <?php echo $mediao2;?>, <?php echo $mediao3;?>, <?php echo $mediao4;?>, <?php echo $mediao5;?>],
		  ['<?php echo"Iron Cost";?>',  <?php echo $mediaf1;?>,      <?php echo $mediaf2;?>, <?php echo $mediaf3;?>, <?php echo $mediaf4;?>, <?php echo $mediaf5;?>],
		  ['<?php echo"Food Cost";?>',  <?php echo $mediac1;?>,      <?php echo $mediac2;?>, <?php echo $mediac3;?>, <?php echo $mediac4;?>, <?php echo $mediac5;?>],
		  ['<?php echo"Average Cost";?>',  <?php echo $avrgcost1;?>,      <?php echo $avrgcost2;?>, <?php echo $avrgcost3;?>, <?php echo $avrgcost4;?>, <?php echo $avrgcost5;?>]
        ]);

        var options = {
          title: 'Troops Statistics 2',
          hAxis: {title: '', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>