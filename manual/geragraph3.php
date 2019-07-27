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
		  ['<?php echo"Average Time (Minutes)";?>',  <?php echo $medtime1;?>,      <?php echo $medtime2;?>, <?php echo $medtime3;?>, <?php echo $medtime4;?>, <?php echo $medtime5;?>],
		  ['<?php echo"Average Cereal Consumption";?>',  <?php echo $medcon1;?>,      <?php echo $medcon2;?>, <?php echo $medcon3;?>, <?php echo $medcon4;?>, <?php echo $medcon5;?>],
		  ['<?php echo"Average Speed (Troop Speed: X".$troop_speed.")";?>',  <?php echo $avrgv1;?>,      <?php echo $avrgv2;?>, <?php echo $avrgv3;?>, <?php echo $avrgv4;?>, <?php echo $avrgv5;?>],
		  ['<?php echo"Average Looting";?>',  <?php echo $avrgl1;?>,      <?php echo $avrgl2;?>, <?php echo $avrgl3;?>, <?php echo $avrgl4;?>, <?php echo $avrgl5;?>],
		  ['<?php echo"Average Points";?>',  <?php echo $avrgrpoints1;?>,      <?php echo $avrgrpoints2;?>, <?php echo $avrgrpoints3;?>, <?php echo $avrgrpoints4;?>, <?php echo $avrgrpoints5;?>]
        ]);

        var options = {
          title: 'Troops Statistics 3',
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