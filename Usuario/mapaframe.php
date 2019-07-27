<?php
include "../validar_session.php";
include "../Config/config_sistema.php";

$consultaald2 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linhaald2 = mysql_num_rows($consultaald2);
while($linhaald2 = mysql_fetch_object($consultaald2)) {

$consultamapa2 = mysql_query("select * from mapaview where dono = '$login_usuario'");
	$linhamapa2 = mysql_num_rows($consultamapa2);
while($linhamapa2 = mysql_fetch_object($consultamapa2)) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="StyleSheet" href="frame.css">
<style type="text/css">
<!--
-->
</style>
</head>
<body>
<?php
$xmod = 0;
$ymod = 0;
$x = $linhamapa2 -> x;
$y = $linhamapa2 ->y;
$var1 = $_GET['var1'];
$motion = $_GET['motion'];
If($motion == 01) {
$xmod = 0;
$ymod = 1; }

If($motion == -10) {
$xmod = -1;
$ymod = 0; }

If($motion == 10) {
$xmod = 1;
$ymod = 0; }

If($motion == -01) {
$xmod = 0;
$ymod = -1; }

$updx = mysql_query("update mapaview set x = $x + $xmod where dono = '$login_usuario'");
$updy = mysql_query("update mapaview set y = $y + $ymod where dono = '$login_usuario'");

$x = $linhamapa2 -> x;
$y = $linhamapa2 ->y;
$xlol = $x;
$ylol = $y;

$x1 = ($x - 4) + $xmod;
$y1 = ($y + 4) + $ymod;
$x2 = ($x - 3) + $xmod;
$y2 = ($y + 4) + $ymod;
$x3 = ($x - 2) + $xmod;
$y3 = ($y + 4) + $ymod;
$x4 = ($x - 1) + $xmod;
$y4 = ($y + 4) + $ymod;
$x5 = ($x - 0) + $xmod;
$y5 = ($y + 4) + $ymod;
$x6 = ($x + 1) + $xmod;
$y6 = ($y + 4) + $ymod;
$x7 = ($x + 2) + $xmod;
$y7 = ($y + 4) + $ymod;
$x8 = ($x + 3) + $xmod;
$y8 = ($y + 4) + $ymod;
$x9 = ($x + 4) + $xmod;
$y9 = ($y + 4) + $ymod;
$x10 = ($x - 4) + $xmod;
$y10 = ($y + 3) + $ymod;
$x11 = ($x - 3) + $xmod;
$y11 = ($y + 3) + $ymod;
$x12 = ($x - 2) + $xmod;
$y12 = ($y + 3) + $ymod;
$x13 = ($x - 1) + $xmod;
$y13 = ($y + 3) + $ymod;
$x14 = ($x - 0) + $xmod;
$y14 = ($y + 3) + $ymod;
$x15 = ($x + 1) + $xmod;
$y15 = ($y + 3) + $ymod;
$x16 = ($x + 2) + $xmod;
$y16 = ($y + 3) + $ymod;
$x17 = ($x + 3) + $xmod;
$y17 = ($y + 3) + $ymod;
$x18 = ($x + 4) + $xmod;
$y18 = ($y + 3) + $ymod;
$x19 = ($x - 4) + $xmod;
$y19 = ($y + 2) + $ymod;
$x20 = ($x - 3) + $xmod;
$y20 = ($y + 2) + $ymod;
$x21 = ($x - 2) + $xmod;
$y21 = ($y + 2) + $ymod;
$x22 = ($x - 1) + $xmod;
$y22 = ($y + 2) + $ymod;
$x23 = ($x - 0) + $xmod;
$y23 = ($y + 2) + $ymod;
$x24 = ($x + 1) + $xmod;
$y24 = ($y + 2) + $ymod;
$x25 = ($x + 2) + $xmod;
$y25 = ($y + 2) + $ymod;
$x26 = ($x + 3) + $xmod;
$y26 = ($y + 2) + $ymod;
$x27 = ($x + 4) + $xmod;
$y27 = ($y + 2) + $ymod;
$x28 = ($x - 4) + $xmod;
$y28 = ($y + 1) + $ymod;
$x29 = ($x - 3) + $xmod;
$y29 = ($y + 1) + $ymod;
$x30 = ($x - 2) + $xmod;
$y30 = ($y + 1) + $ymod;
$x31 = ($x - 1) + $xmod;
$y31 = ($y + 1) + $ymod;
$x32 = ($x - 0) + $xmod;
$y32 = ($y + 1) + $ymod;
$x33 = ($x + 1) + $xmod;
$y33 = ($y + 1) + $ymod;
$x34 = ($x + 2) + $xmod;
$y34 = ($y + 1) + $ymod;
$x35 = ($x + 3) + $xmod;
$y35 = ($y + 1) + $ymod;
$x36 = ($x + 4) + $xmod;
$y36 = ($y + 1) + $ymod;
$x37 = ($x - 4) + $xmod;
$y37 = ($y + 0) + $ymod;
$x38 = ($x - 3) + $xmod;
$y38 = ($y + 0) + $ymod;
$x39 = ($x - 2) + $xmod;
$y39 = ($y + 0) + $ymod;
$x40 = ($x - 1) + $xmod;
$y40 = ($y + 0) + $ymod;
$x41 = ($x - 0) + $xmod;
$y41 = ($y + 0) + $ymod;
$x42 = ($x + 1) + $xmod;
$y42 = ($y + 0) + $ymod;
$x43 = ($x + 2) + $xmod;
$y43 = ($y + 0) + $ymod;
$x44 = ($x + 3) + $xmod;
$y44 = ($y + 0) + $ymod;
$x45 = ($x + 4) + $xmod;
$y45 = ($y + 0) + $ymod;
$x46 = ($x - 4) + $xmod;
$y46 = ($y - 1) + $ymod;
$x47 = ($x - 3) + $xmod;
$y47 = ($y - 1) + $ymod;
$x48 = ($x - 2) + $xmod;
$y48 = ($y - 1) + $ymod;
$x49 = ($x - 1) + $xmod;
$y49 = ($y - 1) + $ymod;
$x50 = ($x - 0) + $xmod;
$y50 = ($y - 1) + $ymod;
$x51 = ($x + 1) + $xmod;
$y51 = ($y - 1) + $ymod;
$x52 = ($x + 2) + $xmod;
$y52 = ($y - 1) + $ymod;
$x53 = ($x + 3) + $xmod;
$y53 = ($y - 1) + $ymod;
$x54 = ($x + 4) + $xmod;
$y54 = ($y - 1) + $ymod;
$x55 = ($x - 4) + $xmod;
$y55 = ($y - 2) + $ymod;
$x56 = ($x - 3) + $xmod;
$y56 = ($y - 2) + $ymod;
$x57 = ($x - 2) + $xmod;
$y57 = ($y - 2) + $ymod;
$x58 = ($x - 1) + $xmod;
$y58 = ($y - 2) + $ymod;
$x59 = ($x - 0) + $xmod;
$y59 = ($y - 2) + $ymod;
$x60 = ($x + 1) + $xmod;
$y60 = ($y - 2) + $ymod;
$x61 = ($x + 2) + $xmod;
$y61 = ($y - 2) + $ymod;
$x62 = ($x + 3) + $xmod;
$y62 = ($y - 2) + $ymod;
$x63 = ($x + 4) + $xmod;
$y63 = ($y - 2) + $ymod;
$x64 = ($x - 4) + $xmod;
$y64 = ($y - 3) + $ymod;
$x65 = ($x - 3) + $xmod;
$y65 = ($y - 3) + $ymod;
$x66 = ($x - 2) + $xmod;
$y66 = ($y - 3) + $ymod;
$x67 = ($x - 1) + $xmod;
$y67 = ($y - 3) + $ymod;
$x68 = ($x - 0) + $xmod;
$y68 = ($y - 3) + $ymod;
$x69 = ($x + 1) + $xmod;
$y69 = ($y - 3) + $ymod;
$x70 = ($x + 2) + $xmod;
$y70 = ($y - 3) + $ymod;
$x71 = ($x + 3) + $xmod;
$y71 = ($y - 3) + $ymod;
$x72 = ($x + 4) + $xmod;
$y72 = ($y - 3) + $ymod;
$x73 = ($x - 4) + $xmod;
$y73 = ($y - 4) + $ymod;
$x74 = ($x - 3) + $xmod;
$y74 = ($y - 4) + $ymod;
$x75 = ($x - 2) + $xmod;
$y75 = ($y - 4) + $ymod;
$x76 = ($x - 1) + $xmod;
$y76 = ($y - 4) + $ymod;
$x77 = ($x - 0) + $xmod;
$y77 = ($y - 4) + $ymod;
$x78 = ($x + 1) + $xmod;
$y78 = ($y - 4) + $ymod;
$x79 = ($x + 2) + $xmod;
$y79 = ($y - 4) + $ymod;
$x80 = ($x + 3) + $xmod;
$y80 = ($y - 4) + $ymod;
$x81 = ($x + 4) + $xmod;
$y81 = ($y - 4) + $ymod;

If ($var1 != 0) {
$updcood1 = mysql_query("update mapaview set x = $linhaald2->x where dono = '$login_usuario'");
$updcood2 = mysql_query("update mapaview set y = $linhaald2->y where dono = '$login_usuario'");
echo'<meta http-equiv="refresh" content="0;URL=mapaframe.php?var1=0&motion=0">';
}
$var1 = 0;
$identx = "0";
$identy = "0";
$imagem = "0";

function smap() {
global $imagem,$consultamapa2,$linhamapa2,$x,$motion,$xmod,$ymod,$identx,$identy,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10,$x11,$x12,$x13,$x14,$x15,$x16,$x17,$x18,$x19,$x20,$x21,$x22,$x23,$x24,$x25,$x26,$x27,$x28,$x29,$x30,$x31,$x32,$x33,$x34,$x5,$x36,$x37,$x38,$x39,$x40,$x41,$x42,$x43,$x44,$x45,$x46,$x47,$x48,$x9,$x0,$x51,$x52,$x3,$x54,$x55,$x56,$x57,$x58,$x59,$x60,$x61,$x62,$x63,$x64,$x65,$x66,$x67,$x68,$x69,$x70,$x71,$x72,$x73,$x74,$x75,$x76,$x77,$x78,$x79,$x80,$x81,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8,$y9,$y10,$y11,$y12,$y13,$y14,$y15,$y16,$y17,$y18,$y19,$y20,$y21,$y22,$y23,$y24,$y25,$y26,$y27,$y28,$y29,$y30,$y31,$y32,$y33,$y34,$y5,$y36,$y37,$y38,$y39,$y40,$y41,$y42,$y43,$y44,$y45,$y46,$y47,$y48,$y49,$y50,$y51,$y52,$y53,$y54,$y55,$y56,$y57,$y58,$y59,$y60,$y61,$y62,$y63,$y64,$y65,$y66,$y67,$y68,$y69,$y70,$y71,$y72,$y73,$y74,$y75,$y76,$y77,$y78,$y79,$y80,$y81;
$xyxy = $$identx.$$identy;
$consultasmap = mysql_query("select * from aldeias where xy = '$xyxy'");
	$linhasmap = mysql_num_rows($consultasmap);
while($linhasmap = mysql_fetch_object($consultasmap)) {
If($linhasmap->dono = 1){
$imagem = "1";}}
echo '
<form action="mapaframe2.php" target="mf2" name="infos" id="infos"  method="get" enctype="multipart/form-data">
<input type="hidden" value="0" name="player" id="player">
<input type="hidden" value="0" name="aldeia" id="aldeia">
<input type="hidden" value="0" name="pop" id="pop">
<input type="hidden" value="0" name="clan" id="clan">
<div><input type="image" src="../img/vila'.$imagem.'.png" border="0" value="'.$xyxy.'" id="cood" name="cood"></div>
</form>
';
}
?>


<?php
function showvil() {
global $imagem,$consultamapa2,$linhamapa2,$x,$motion,$xmod,$ymod,$identx,$identy,$x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$y1,$y2,$y3,$y4,$y5,$y6,$y7,$y8;

}?>









<center>
<iframe src="mapaframe2.php?cood=" id="mf2" name="mf2" height="130" frameborder="0" scrolling="no"></iframe>


<b>
<div id="tmap" name="tmap">
<table id="map" name="map" border="1" cellpading="0" cellspacing="0"  height="260" ><br>
<div><td align="center"></td><td align="center"><font color="blue"><?php echo $x1;?></font></td><td align="center"><font color="blue"><?php echo $x2;?></font></td><td align="center"><font color="blue"><?php echo $x3;?></font></td><td align="center"><font color="blue"><?php echo $x4;?></font></td><td align="center"><font color="blue"><?php echo $x5;?></font></td><td align="center"><font color="blue"><?php echo $x6;?></font></td><td align="center"><font color="blue"><?php echo $x7;?></font></td><td align="center"><font color="blue"><?php echo $x8;?></font></td><td align="center"><font color="blue"><?php echo $x9;?></font></td>   <tr>
<td align="center"><font color="red"><?php echo $y1;?></font></td><td align="center"><a href="#"><?php smap($identx = "x1",$identy = "y1",$imagem = "0");?></a></td><td align="center"><?php smap($identx = "x2",$identy = "y2",$imagem = "0");?></td><td align="center"><a href="#"><?php smap($identx = "x3",$identy = "y3",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x4",$identy = "y4",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x5",$identy = "y5",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x6",$identy = "y6",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x7",$identy = "y7",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x8",$identy = "y8",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x9",$identy = "y9",$imagem = "0");?></a></td>   </tr><tr>
<td align="center"><font color="red"><?php echo $y10;?></font></td><td align="center"><a href="#"><?php smap($identx = "x10",$identy = "y10",$imagem = "0");?></a></td><td align="center"><?php smap($identx = "x11",$identy = "y11",$imagem = "0");?></td><td align="center"><a href="#"><?php smap($identx = "x12",$identy = "y12",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x13",$identy = "y13",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x14",$identy = "y14",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x15",$identy = "y15",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x16",$identy = "y16",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x17",$identy = "y17",$imagem = "0");?></a></td><td align="center"><a href="#"><?php smap($identx = "x18",$identy = "y18",$imagem = "0");?></a></td>   </tr><tr>
<td align="center"><font color="red"><?php echo $y19;?></font></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td>   </tr><tr>
<td align="center"><font color="red"><?php echo $y28;?></font></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td>   </tr><tr>
<td align="center"><font color="red"><?php echo $y37;?></font></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td>   </tr><tr>
<td align="center"><font color="red"><?php echo $y46;?></font></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td>   </tr><tr>
<td align="center"><font color="red"><?php echo $y55;?></font></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td>   </tr><tr>
<td align="center"><font color="red"><?php echo $y64;?></font></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td>   </tr><tr>
<td align="center"><font color="red"><?php echo $y73;?></font></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td><td align="center"></td>   </tr>



</div>
</table>
</div>
</b></center>





</body>
</html>
<?php }} ?>





