<?php
include "../Config/tropasdados.php";
include_once "../Config/config_sistema.php";
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




<?php











$set = 0;
@$povoinfo = $_GET['povo'];
If(isset($povoinfo)){
If ($povoinfo >= 1) {
If ($povoinfo <= 15) {
 $set = 1;}}}
If ($set == 1){
$povoinfo = intval($povoinfo);
$nome = "p".$povoinfo."nome";
$t1nome = "t".$povoinfo."1nome";
$t2nome = "t".$povoinfo."2nome";
$t3nome = "t".$povoinfo."3nome";
$t4nome = "t".$povoinfo."4nome";
$t5nome = "t".$povoinfo."5nome";
$t6nome = "t".$povoinfo."6nome";
$t7nome = "t".$povoinfo."7nome";
$t8nome = "t".$povoinfo."8nome";
$t9nome = "t".$povoinfo."9nome";

$t1atk = "t".$povoinfo."1atk";
$t2atk = "t".$povoinfo."2atk";
$t3atk = "t".$povoinfo."3atk";
$t4atk = "t".$povoinfo."4atk";
$t5atk = "t".$povoinfo."5atk";
$t6atk = "t".$povoinfo."6atk";
$t7atk = "t".$povoinfo."7atk";
$t8atk = "t".$povoinfo."8atk";
$t9atk = "t".$povoinfo."9atk";

$t1defi = "t".$povoinfo."1defi";
$t2defi = "t".$povoinfo."2defi";
$t3defi = "t".$povoinfo."3defi";
$t4defi = "t".$povoinfo."4defi";
$t5defi = "t".$povoinfo."5defi";
$t6defi = "t".$povoinfo."6defi";
$t7defi = "t".$povoinfo."7defi";
$t8defi = "t".$povoinfo."8defi";
$t9defi = "t".$povoinfo."9defi";

$t1defc = "t".$povoinfo."1defc";
$t2defc = "t".$povoinfo."2defc";
$t3defc = "t".$povoinfo."3defc";
$t4defc = "t".$povoinfo."4defc";
$t5defc = "t".$povoinfo."5defc";
$t6defc = "t".$povoinfo."6defc";
$t7defc = "t".$povoinfo."7defc";
$t8defc = "t".$povoinfo."8defc";
$t9defc = "t".$povoinfo."9defc";

$t1defcerco = "t".$povoinfo."1defcerco";
$t2defcerco = "t".$povoinfo."2defcerco";
$t3defcerco = "t".$povoinfo."3defcerco";
$t4defcerco = "t".$povoinfo."4defcerco";
$t5defcerco = "t".$povoinfo."5defcerco";
$t6defcerco = "t".$povoinfo."6defcerco";
$t7defcerco = "t".$povoinfo."7defcerco";
$t8defcerco = "t".$povoinfo."8defcerco";
$t9defcerco = "t".$povoinfo."9defcerco";

$t1v = "t".$povoinfo."1v";
$t2v = "t".$povoinfo."2v";
$t3v = "t".$povoinfo."3v";
$t4v = "t".$povoinfo."4v";
$t5v = "t".$povoinfo."5v";
$t6v = "t".$povoinfo."6v";
$t7v = "t".$povoinfo."7v";
$t8v = "t".$povoinfo."8v";
$t9v = "t".$povoinfo."9v";

$t1con = "t".$povoinfo."1con";
$t2con = "t".$povoinfo."2con";
$t3con = "t".$povoinfo."3con";
$t4con = "t".$povoinfo."4con";
$t5con = "t".$povoinfo."5con";
$t6con = "t".$povoinfo."6con";
$t7con = "t".$povoinfo."7con";
$t8con = "t".$povoinfo."8con";
$t9con = "t".$povoinfo."9con";

$t1p = "t".$povoinfo."1p";
$t2p = "t".$povoinfo."2p";
$t3p = "t".$povoinfo."3p";
$t4p = "t".$povoinfo."4p";
$t5p = "t".$povoinfo."5p";
$t6p = "t".$povoinfo."6p";
$t7p = "t".$povoinfo."7p";
$t8p = "t".$povoinfo."8p";
$t9p = "t".$povoinfo."9p";

$t1m = "t".$povoinfo."1m";
$t2m = "t".$povoinfo."2m";
$t3m = "t".$povoinfo."3m";
$t4m = "t".$povoinfo."4m";
$t5m = "t".$povoinfo."5m";
$t6m = "t".$povoinfo."6m";
$t7m = "t".$povoinfo."7m";
$t8m = "t".$povoinfo."8m";
$t9m = "t".$povoinfo."9m";

$t1o = "t".$povoinfo."1o";
$t2o = "t".$povoinfo."2o";
$t3o = "t".$povoinfo."3o";
$t4o = "t".$povoinfo."4o";
$t5o = "t".$povoinfo."5o";
$t6o = "t".$povoinfo."6o";
$t7o = "t".$povoinfo."7o";
$t8o = "t".$povoinfo."8o";
$t9o = "t".$povoinfo."9o";

$t1f = "t".$povoinfo."1f";
$t2f = "t".$povoinfo."2f";
$t3f = "t".$povoinfo."3f";
$t4f = "t".$povoinfo."4f";
$t5f = "t".$povoinfo."5f";
$t6f = "t".$povoinfo."6f";
$t7f = "t".$povoinfo."7f";
$t8f = "t".$povoinfo."8f";
$t9f = "t".$povoinfo."9f";

$t1c = "t".$povoinfo."1c";
$t2c = "t".$povoinfo."2c";
$t3c = "t".$povoinfo."3c";
$t4c = "t".$povoinfo."4c";
$t5c = "t".$povoinfo."5c";
$t6c = "t".$povoinfo."6c";
$t7c = "t".$povoinfo."7c";
$t8c = "t".$povoinfo."8c";
$t9c = "t".$povoinfo."9c";

$t1t = "t".$povoinfo."1t";
$t2t = "t".$povoinfo."2t";
$t3t = "t".$povoinfo."3t";
$t4t = "t".$povoinfo."4t";
$t5t = "t".$povoinfo."5t";
$t6t = "t".$povoinfo."6t";
$t7t = "t".$povoinfo."7t";
$t8t = "t".$povoinfo."8t";
$t9t = "t".$povoinfo."9t";

?>
<center>
<h3><?php echo $$nome;?></h3>
<br>
<center>

<br>


<div id="troops" name="troops">
<table name="ttroops" id="ttroops" border="1" cellpading="0" cellspacing="0">
<td align="center">
<b>
<?php echo $$t1nome;?><img src="../img/troops/infant.png">
</b>
</td>
<td align="center">
<b>
<?php echo $$t2nome;?><img src="../img/troops/infant.png">
</b>
</td>
<td align="center">
<b>
<?php echo $$t3nome;?><img src="../img/troops/infant.png">
</b>
</td>
<td align="center">
<b>
<?php echo $$t4nome;?><img src="../img/troops/esp.png">
</b>
</td>
<td align="center">
<b>
<?php echo $$t5nome;?><img src="../img/troops/cav.png">
</b>
</td>
<td align="center">
<b>
<?php echo $$t6nome;?><img src="../img/troops/cav.png">
</b>
</td>
<td align="center">
<b>
<?php echo $$t7nome;?><img src="../img/troops/cav.png">
</b>
</td>
<td align="center">
<b>
<?php echo $$t8nome;?><img src="../img/troops/cerco.png">
</b>
</td>
<td align="center">
<b>
<?php echo $$t9nome;?><img src="../img/troops/cerco.png">
</b>
</td>
<tr>
<td align="center">
<b>A = </b>
<?php echo $$t1atk ?><br>
<b>Di = </b>
<?php echo $$t1defi ?><br>
<b>Dc = </b>
<?php echo $$t1defc ?><br>
<b>Dcerco = </b>
<?php echo $$t1defcerco ?><br>
<b>S = </b>
<?php echo $$t1v ?><br>
<b>C = </b>
<?php echo $$t1con ?><br>
<b>L = </b>
<?php echo $$t1p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $$t2atk ?><br>
<b>Di = </b>
<?php echo $$t2defi ?><br>
<b>Dc = </b>
<?php echo $$t2defc ?><br>
<b>Dcerco = </b>
<?php echo $$t2defcerco ?><br>
<b>S = </b>
<?php echo $$t2v ?><br>
<b>C = </b>
<?php echo $$t2con ?><br>
<b>L = </b>
<?php echo $$t2p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $$t3atk ?><br>
<b>Di = </b>
<?php echo $$t3defi ?><br>
<b>Dc = </b>
<?php echo $$t3defc ?><br>
<b>Dcerco = </b>
<?php echo $$t3defcerco ?><br>
<b>S = </b>
<?php echo $$t3v ?><br>
<b>C = </b>
<?php echo $$t3con ?><br>
<b>L = </b>
<?php echo $$t3p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $$t4atk ?><br>
<b>Di = </b>
<?php echo $$t4defi ?><br>
<b>Dc = </b>
<?php echo $$t4defc ?><br>
<b>Dcerco = </b>
<?php echo $$t4defcerco ?><br>
<b>S = </b>
<?php echo $$t4v ?><br>
<b>C = </b>
<?php echo $$t4con ?><br>
<b>L = </b>
<?php echo $$t4p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $$t5atk ?><br>
<b>Di = </b>
<?php echo $$t5defi ?><br>
<b>Dc = </b>
<?php echo $$t5defc ?><br>
<b>Dcerco = </b>
<?php echo $$t5defcerco ?><br>
<b>S = </b>
<?php echo $$t5v ?><br>
<b>C = </b>
<?php echo $$t5con ?><br>
<b>L = </b>
<?php echo $$t5p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $$t6atk ?><br>
<b>Di = </b>
<?php echo $$t6defi ?><br>
<b>Dc = </b>
<?php echo $$t6defc ?><br>
<b>Dcerco = </b>
<?php echo $$t6defcerco ?><br>
<b>S = </b>
<?php echo $$t6v ?><br>
<b>C = </b>
<?php echo $$t6con ?><br>
<b>L = </b>
<?php echo $$t6p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $$t7atk ?><br>
<b>Di = </b>
<?php echo $$t7defi ?><br>
<b>Dc = </b>
<?php echo $$t7defc ?><br>
<b>Dcerco = </b>
<?php echo $$t7defcerco ?><br>
<b>S = </b>
<?php echo $$t7v ?><br>
<b>C = </b>
<?php echo $$t7con ?><br>
<b>L = </b>
<?php echo $$t7p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $$t8atk ?><br>
<b>Di = </b>
<?php echo $$t8defi ?><br>
<b>Dc = </b>
<?php echo $$t8defc ?><br>
<b>Dcerco = </b>
<?php echo $$t8defcerco ?><br>
<b>S = </b>
<?php echo $$t8v ?><br>
<b>C = </b>
<?php echo $$t8con ?><br>
<b>L = </b>
<?php echo $$t8p ?><br>
</td>
<td align="center">
<b>A = </b>
<?php echo $$t9atk ?><br>
<b>Di = </b>
<?php echo $$t9defi ?><br>
<b>Dc = </b>
<?php echo $$t9defc ?><br>
<b>Dcerco = </b>
<?php echo $$t9defcerco ?><br>
<b>S = </b>
<?php echo $$t9v ?><br>
<b>C = </b>
<?php echo $$t9con ?><br>
<b>L = </b>
<?php echo $$t9p ?><br>
</td>
<tr>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $$t1m; ?><br>
<img src="../img/ouro.bmp"><?php echo $$t1o; ?><br>
<img src="../img/ferro.bmp"><?php echo $$t1f; ?><br>
<img src="../img/comida.bmp"><?php echo $$t1c; ?><br>
<img src="../img/time.bmp"><?php echo $$t1t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $$t2m; ?><br>
<img src="../img/ouro.bmp"><?php echo $$t2o; ?><br>
<img src="../img/ferro.bmp"><?php echo $$t2f; ?><br>
<img src="../img/comida.bmp"><?php echo $$t2c; ?><br>
<img src="../img/time.bmp"><?php echo $$t2t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $$t3m; ?><br>
<img src="../img/ouro.bmp"><?php echo $$t3o; ?><br>
<img src="../img/ferro.bmp"><?php echo $$t3f; ?><br>
<img src="../img/comida.bmp"><?php echo $$t3c; ?><br>
<img src="../img/time.bmp"><?php echo $$t3t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $$t4m; ?><br>
<img src="../img/ouro.bmp"><?php echo $$t4o; ?><br>
<img src="../img/ferro.bmp"><?php echo $$t4f; ?><br>
<img src="../img/comida.bmp"><?php echo $$t4c; ?><br>
<img src="../img/time.bmp"><?php echo $$t4t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $$t5m; ?><br>
<img src="../img/ouro.bmp"><?php echo $$t5o; ?><br>
<img src="../img/ferro.bmp"><?php echo $$t5f; ?><br>
<img src="../img/comida.bmp"><?php echo $$t5c; ?><br>
<img src="../img/time.bmp"><?php echo $$t5t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $$t6m; ?><br>
<img src="../img/ouro.bmp"><?php echo $$t6o; ?><br>
<img src="../img/ferro.bmp"><?php echo $$t6f; ?><br>
<img src="../img/comida.bmp"><?php echo $$t6c; ?><br>
<img src="../img/time.bmp"><?php echo $$t6t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $$t7m; ?><br>
<img src="../img/ouro.bmp"><?php echo $$t7o; ?><br>
<img src="../img/ferro.bmp"><?php echo $$t7f; ?><br>
<img src="../img/comida.bmp"><?php echo $$t7c; ?><br>
<img src="../img/time.bmp"><?php echo $$t7t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $$t8m; ?><br>
<img src="../img/ouro.bmp"><?php echo $$t8o; ?><br>
<img src="../img/ferro.bmp"><?php echo $$t8f; ?><br>
<img src="../img/comida.bmp"><?php echo $$t8c; ?><br>
<img src="../img/time.bmp"><?php echo $$t8t; ?>
</td>
<td align="center">
<img src="../img/madeira.bmp"><?php echo $$t9m; ?><br>
<img src="../img/ouro.bmp"><?php echo $$t9o; ?><br>
<img src="../img/ferro.bmp"><?php echo $$t9f; ?><br>
<img src="../img/comida.bmp"><?php echo $$t9c; ?><br>
<img src="../img/time.bmp"><?php echo $$t9t; ?>
</td>
</table>
</div>
</center>
</center>
<br>
<br>
<b>A = </b>Attack<br>
<b>Di = </b>Defense Against Infantry<br>
<b>Dc = </b>Defense Against Cavalry<br>
<b>Dcerco = </b>Defense Against Siege Units<br>
<b>S = </b>Speed (Fields per Hour)<br>
<b>C = </b>Cereal consumption by the unit (the value indicates how much food per hour will be required to support the unit. The value interferes directly in the production.)<br>
<b>L = </b>Looting of resources per unit (amount of resources that each unit supports load after an assault)<br>
<b>Speed of troops in server</b> = X<?php echo $troop_speed;?><br>

<?php
}
?>
</body>
</html>