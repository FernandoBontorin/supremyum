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
          ['<?php echo"Attack";?>',  <?php echo $mediaatk1;?>,      <?php echo $mediaatk2;?>, <?php echo $mediaatk3;?>, <?php echo $mediaatk4;?>, <?php echo $mediaatk5;?>],
          ['<?php echo"Defense/Infantry";?>',  <?php echo $mediadefi1;?>,      <?php echo $mediadefi2;?>, <?php echo $mediadefi3;?>, <?php echo $mediadefi4;?>, <?php echo $mediadefi5;?>],
          ['<?php echo"Defense/Cavalry";?>',  <?php echo $mediadefc1;?>,       <?php echo $mediadefc2;?>, <?php echo $mediadefc3;?>, <?php echo $mediadefc4;?>, <?php echo $mediadefc5;?>],
          ['<?php echo"Defense/Siege";?>',  <?php echo $mediadefcerco1;?>,      <?php echo $mediadefcerco2;?>, <?php echo $mediadefcerco3;?>, <?php echo $mediadefcerco4;?>, <?php echo $mediadefcerco5;?>],
	   	  ['<?php echo"Average Combat Points";?>',  <?php echo $avrg1;?>,      <?php echo $avrg2;?>, <?php echo $avrg3;?>, <?php echo $avrg4;?>, <?php echo $avrg5;?>]
        ]);

        var options = {
          title: 'Troops Statistics',
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