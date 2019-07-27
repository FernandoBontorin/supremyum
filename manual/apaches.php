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
<h3>Apaches</h3>
<br>
<center>
Pontos fortes: Cavalaria barata. Unidades de cerco mais rápidas.
<br>
Pontos fracos: Unidades de cerco fracas. Infantaria e cavalaria com ataque e defesa regulares.

<div id="troops" name="troops">
<table name="ttroops" id="ttroops" border="1" cellpading="0" cellspacing="0">
<td align="center">
<b>
<?php echo $t21nome;?><img src="../img/troops/infant.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t22nome;?><img src="../img/troops/infant.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t23nome;?><img src="../img/troops/infant.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t24nome;?><img src="../img/troops/esp.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t25nome;?><img src="../img/troops/cav.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t26nome;?><img src="../img/troops/cav.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t27nome;?><img src="../img/troops/cav.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t28nome;?><img src="../img/troops/cerco.png">
</b>
</td>
<td align="center">
<b>
<?php echo $t29nome;?><img src="../img/troops/cerco.png">
</b>
</td>
<tr>
<td align="center">
<b>A = </b>
<?php echo $t21atk ?><br>
<b>Di = </b>
<?php echo $t21defi ?><br>
<b>Dc = </b>
<?php echo $t21defc ?><br>
<b>Dcerco = </b>
<?php echo $t21defcerco ?><br>
<b>V = </b>
<?php echo $t21v ?><br>
<b>C = </b>
<?php echo $t21con ?><br>
<b>P = </b>
<?php echo $t21p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t22atk ?><br>
<b>Di = </b>
<?php echo $t22defi ?><br>
<b>Dc = </b>
<?php echo $t22defc ?><br>
<b>Dcerco = </b>
<?php echo $t22defcerco ?><br>
<b>V = </b>
<?php echo $t22v ?><br>
<b>C = </b>
<?php echo $t22con ?><br>
<b>P = </b>
<?php echo $t22p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t23atk ?><br>
<b>Di = </b>
<?php echo $t23defi ?><br>
<b>Dc = </b>
<?php echo $t23defc ?><br>
<b>Dcerco = </b>
<?php echo $t23defcerco ?><br>
<b>V = </b>
<?php echo $t23v ?><br>
<b>C = </b>
<?php echo $t23con ?><br>
<b>P = </b>
<?php echo $t23p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t24atk ?><br>
<b>Di = </b>
<?php echo $t24defi ?><br>
<b>Dc = </b>
<?php echo $t24defc ?><br>
<b>Dcerco = </b>
<?php echo $t24defcerco ?><br>
<b>V = </b>
<?php echo $t24v ?><br>
<b>C = </b>
<?php echo $t24con ?><br>
<b>P = </b>
<?php echo $t24p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t25atk ?><br>
<b>Di = </b>
<?php echo $t25defi ?><br>
<b>Dc = </b>
<?php echo $t25defc ?><br>
<b>Dcerco = </b>
<?php echo $t25defcerco ?><br>
<b>V = </b>
<?php echo $t25v ?><br>
<b>C = </b>
<?php echo $t25con ?><br>
<b>P = </b>
<?php echo $t25p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t26atk ?><br>
<b>Di = </b>
<?php echo $t26defi ?><br>
<b>Dc = </b>
<?php echo $t26defc ?><br>
<b>Dcerco = </b>
<?php echo $t26defcerco ?><br>
<b>V = </b>
<?php echo $t26v ?><br>
<b>C = </b>
<?php echo $t26con ?><br>
<b>P = </b>
<?php echo $t26p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t27atk ?><br>
<b>Di = </b>
<?php echo $t27defi ?><br>
<b>Dc = </b>
<?php echo $t27defc ?><br>
<b>Dcerco = </b>
<?php echo $t27defcerco ?><br>
<b>V = </b>
<?php echo $t27v ?><br>
<b>C = </b>
<?php echo $t27con ?><br>
<b>P = </b>
<?php echo $t27p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t28atk ?><br>
<b>Di = </b>
<?php echo $t28defi ?><br>
<b>Dc = </b>
<?php echo $t28defc ?><br>
<b>Dcerco = </b>
<?php echo $t28defcerco ?><br>
<b>V = </b>
<?php echo $t28v ?><br>
<b>C = </b>
<?php echo $t28con ?><br>
<b>P = </b>
<?php echo $t28p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $t29atk ?><br>
<b>Di = </b>
<?php echo $t29defi ?><br>
<b>Dc = </b>
<?php echo $t29defc ?><br>
<b>Dcerco = </b>
<?php echo $t29defcerco ?><br>
<b>V = </b>
<?php echo $t29v ?><br>
<b>C = </b>
<?php echo $t29con ?><br>
<b>P = </b>
<?php echo $t29p ?><br>
</td>
<tr>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t21m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t21o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t21f; ?><br>
<img src="../img/comida.bmp"><?php echo $t21c; ?><br>
<img src="../img/time.bmp"><?php echo $t21t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t22m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t22o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t22f; ?><br>
<img src="../img/comida.bmp"><?php echo $t22c; ?><br>
<img src="../img/time.bmp"><?php echo $t22t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t23m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t23o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t23f; ?><br>
<img src="../img/comida.bmp"><?php echo $t23c; ?><br>
<img src="../img/time.bmp"><?php echo $t23t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t24m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t24o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t24f; ?><br>
<img src="../img/comida.bmp"><?php echo $t24c; ?><br>
<img src="../img/time.bmp"><?php echo $t24t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t25m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t25o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t25f; ?><br>
<img src="../img/comida.bmp"><?php echo $t25c; ?><br>
<img src="../img/time.bmp"><?php echo $t25t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t26m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t26o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t26f; ?><br>
<img src="../img/comida.bmp"><?php echo $t26c; ?><br>
<img src="../img/time.bmp"><?php echo $t26t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t27m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t27o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t27f; ?><br>
<img src="../img/comida.bmp"><?php echo $t27c; ?><br>
<img src="../img/time.bmp"><?php echo $t27t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t28m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t28o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t28f; ?><br>
<img src="../img/comida.bmp"><?php echo $t28c; ?><br>
<img src="../img/time.bmp"><?php echo $t28t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $t29m; ?><br>
<img src="../img/ouro.bmp"><?php echo $t29o; ?><br>
<img src="../img/ferro.bmp"><?php echo $t29f; ?><br>
<img src="../img/comida.bmp"><?php echo $t29c; ?><br>
<img src="../img/time.bmp"><?php echo $t29t; ?>
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
<b>Velocidade das tropas no servidor</b> = X<?php echo $troop_speed;?><br>
</body>
</html>