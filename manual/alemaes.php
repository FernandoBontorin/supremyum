<?php
include "../Config/tropasdados.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
html {
	width: 100%;
	height: 99%;
	border: 0;
	margin: 0;
}

body {
	width: 100%;
	height: 99%;
	border: 0;
	margin: 0;
	background-color:#DEB887;
}

--!>
</style>
</head>
<body>
<center>
<h3>Alemães</h3>
<br>
<center>
Pontos fortes: Cavalaria com bom ataque. Infantaria com boa pilhagem de recursos.
<br>
Pontos fracos: Unidades de cerco fracas. Infantaria com defesa fraca e ataque na média. Cavalaria com defesa razoável em quase todas unidades.

<div id="troops" name="troops">
<table name="ttroops" id="ttroops" border="1" cellpading="0" cellspacing="0">
<td align="center">
<b>
<?php echo $t11nome;?><img src="../img/troops/infant.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t12nome;?><img src="../img/troops/infant.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t13nome;?><img src="../img/troops/infant.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t14nome;?><img src="../img/troops/esp.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t15nome;?><img src="../img/troops/cav.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t16nome;?><img src="../img/troops/cav.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t17nome;?><img src="../img/troops/cav.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t18nome;?><img src="../img/troops/cerco.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t19nome;?><img src="../img/troops/cerco.png">
</b>
</td>
<tr>
<td align="center">
<b>A = </b>
<?php echo $t11atk ?><br>
<b>Di = </b>
<?php echo $t11defi ?><br>
<b>Dc = </b>
<?php echo $t11defc ?><br>
<b>Dcerco = </b>
<?php echo $t11defcerco ?><br>
<b>V = </b>
<?php echo $t11v ?><br>
<b>C = </b>
<?php echo $t11con ?><br>
<b>P = </b>
<?php echo $t11p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t12atk ?><br>
<b>Di = </b>
<?php echo $t12defi ?><br>
<b>Dc = </b>
<?php echo $t12defc ?><br>
<b>Dcerco = </b>
<?php echo $t12defcerco ?><br>
<b>V = </b>
<?php echo $t12v ?><br>
<b>C = </b>
<?php echo $t12con ?><br>
<b>P = </b>
<?php echo $t12p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t13atk ?><br>
<b>Di = </b>
<?php echo $t13defi ?><br>
<b>Dc = </b>
<?php echo $t13defc ?><br>
<b>Dcerco = </b>
<?php echo $t13defcerco ?><br>
<b>V = </b>
<?php echo $t13v ?><br>
<b>C = </b>
<?php echo $t13con ?><br>
<b>P = </b>
<?php echo $t13p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t14atk ?><br>
<b>Di = </b>
<?php echo $t14defi ?><br>
<b>Dc = </b>
<?php echo $t14defc ?><br>
<b>Dcerco = </b>
<?php echo $t14defcerco ?><br>
<b>V = </b>
<?php echo $t14v ?><br>
<b>C = </b>
<?php echo $t14con ?><br>
<b>P = </b>
<?php echo $t14p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t15atk ?><br>
<b>Di = </b>
<?php echo $t15defi ?><br>
<b>Dc = </b>
<?php echo $t15defc ?><br>
<b>Dcerco = </b>
<?php echo $t15defcerco ?><br>
<b>V = </b>
<?php echo $t15v ?><br>
<b>C = </b>
<?php echo $t15con ?><br>
<b>P = </b>
<?php echo $t15p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t16atk ?><br>
<b>Di = </b>
<?php echo $t16defi ?><br>
<b>Dc = </b>
<?php echo $t16defc ?><br>
<b>Dcerco = </b>
<?php echo $t16defcerco ?><br>
<b>V = </b>
<?php echo $t16v ?><br>
<b>C = </b>
<?php echo $t16con ?><br>
<b>P = </b>
<?php echo $t16p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t17atk ?><br>
<b>Di = </b>
<?php echo $t17defi ?><br>
<b>Dc = </b>
<?php echo $t17defc ?><br>
<b>Dcerco = </b>
<?php echo $t17defcerco ?><br>
<b>V = </b>
<?php echo $t17v ?><br>
<b>C = </b>
<?php echo $t17con ?><br>
<b>P = </b>
<?php echo $t17p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t18atk ?><br>
<b>Di = </b>
<?php echo $t18defi ?><br>
<b>Dc = </b>
<?php echo $t18defc ?><br>
<b>Dcerco = </b>
<?php echo $t18defcerco ?><br>
<b>V = </b>
<?php echo $t18v ?><br>
<b>C = </b>
<?php echo $t18con ?><br>
<b>P = </b>
<?php echo $t18p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t19atk ?><br>
<b>Di = </b>
<?php echo $t19defi ?><br>
<b>Dc = </b>
<?php echo $t19defc ?><br>
<b>Dcerco = </b>
<?php echo $t19defcerco ?><br>
<b>V = </b>
<?php echo $t19v ?><br>
<b>C = </b>
<?php echo $t19con ?><br>
<b>P = </b>
<?php echo $t19p ?><br>
</td>
<tr>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t11m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t11o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t11f; ?><br>
<img src="../img/comida.bmp"><?php echo $t11c; ?><br>
<img src="../img/time.bmp"><?php echo $t11t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t12m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t12o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t12f; ?><br>
<img src="../img/comida.bmp"><?php echo $t12c; ?><br>
<img src="../img/time.bmp"><?php echo $t12t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t13m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t13o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t13f; ?><br>
<img src="../img/comida.bmp"><?php echo $t13c; ?><br>
<img src="../img/time.bmp"><?php echo $t13t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t14m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t14o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t14f; ?><br>
<img src="../img/comida.bmp"><?php echo $t14c; ?><br>
<img src="../img/time.bmp"><?php echo $t14t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t15m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t15o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t15f; ?><br>
<img src="../img/comida.bmp"><?php echo $t15c; ?><br>
<img src="../img/time.bmp"><?php echo $t15t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t16m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t16o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t16f; ?><br>
<img src="../img/comida.bmp"><?php echo $t16c; ?><br>
<img src="../img/time.bmp"><?php echo $t16t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t17m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t17o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t17f; ?><br>
<img src="../img/comida.bmp"><?php echo $t17c; ?><br>
<img src="../img/time.bmp"><?php echo $t17t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t18m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t18o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t18f; ?><br>
<img src="../img/comida.bmp"><?php echo $t18c; ?><br>
<img src="../img/time.bmp"><?php echo $t18t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t19m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t19o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t19f; ?><br>
<img src="../img/comida.bmp"><?php echo $t19c; ?><br>
<img src="../img/time.bmp"><?php echo $t19t; ?>
</td>
</table>
</div>
</center>
</center>
<br>
<br>
<b>A = </b>Ataque<br>
<b>Di = </b>Defesa contra infantaria<br>
<b>Dc = </b>Defesa contra cavalaria<br>
<b>Dcerco = </b>Defesa contra unidades de cerco<br>
<b>V = </b>Velocidade<br>
<b>C = </b>Consumo da unidade (o valor indica quantas unidades de comida por hora serão necessárias para sustentar a unidade. O valor interfete diretamente na produção de comida.)<br>
<b>P = </b>Pilhagem de recursos por unidade (quantidade de recursos que cada unidade suporta carregar após um saque)<br>
</body>
</html>