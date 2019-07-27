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
Pontos fortes: Cavalaria com bom ataque, boa velocidade e defesa acima da média. Infantaria com boa pilhagem de recursos.
<br>
Pontos fracos: Unidades de cerco fracas. Infantaria com defesa fraca e ataque na média.

<div id="troops" name="troops">
<table name="ttroops" id="ttroops" border="1" cellpading="0" cellspacing="0">
<td>
<b>
Guerreiro<img src="../img/troops/infant.png">
</b>
</td>
<td>
<b>
Protetor<img src="../img/troops/infant.png">
</b>
</td>
<td>
<b>
Assasino<img src="../img/troops/infant.png">
</b>
</td>
<td>
<b>
Informante<img src="../img/troops/esp.png">
</b>
</td>
<td>
<b>
Cavaleiro básico<img src="../img/troops/cav.png">
</b>
</td>
<td>
<b>
Cavaleiro relâmpago<img src="../img/troops/cav.png">
</b>
</td>
<td>
<b>
Cavaleiro mestre<img src="../img/troops/cav.png">
</b>
</td>
<td>
<b>
Aríete<img src="../img/troops/cerco.png">
</b>
</td>
<td>
<b>
Catapulta<img src="../img/troops/cerco.png">
</b>
</td>
<tr>
<td align="center">
<b>A = </b>
<?php echo $t1atk ?><br>
<b>Di = </b>
<?php echo $t1defi ?><br>
<b>Dc = </b>
<?php echo $t1defc ?><br>
<b>Dcerco = </b>
<?php echo $t1defcerco ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t2atk ?><br>
<b>Di = </b>
<?php echo $t2defi ?><br>
<b>Dc = </b>
<?php echo $t2defc ?><br>
<b>Dcerco = </b>
<?php echo $t2defcerco ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t3atk ?><br>
<b>Di = </b>
<?php echo $t3defi ?><br>
<b>Dc = </b>
<?php echo $t3defc ?><br>
<b>Dcerco = </b>
<?php echo $t3defcerco ?><br>
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
</body>
</html>