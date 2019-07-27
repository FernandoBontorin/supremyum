<?php
include"padrao.php";
include "../Config/tropasdados.php";
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];
$t4 = $_POST['t4'];
$t5 = $_POST['t5'];
$t6 = $_POST['t6'];
$t7 = $_POST['t7'];
$t8 = $_POST['t8'];
$t9 = $_POST['t9'];
$x = $_POST['x'];
$y = $_POST['y'];

?>
<center>
<?php




$consultatrop = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linhatrop = mysql_num_rows($consultatrop);
while($linhatrop = mysql_fetch_object($consultatrop)) {
$consultatrop2 = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	$linhatrop2 = mysql_num_rows($consultatrop2);
while($linhatrop2 = mysql_fetch_object($consultatrop2)) {
$consultatropE = mysql_query("select * from tropas where dono = '$login_usuario'");
	$linhatropE = mysql_num_rows($consultatropE);
while($linhatropC = mysql_fetch_object($consultatropE)) {





//Anti-cheat abaixo.

function nullcheck() {
global $t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9;
$var = "1";
$nulos = "0";
while($var < 10) {
$lol = "t".$var;
If ($$lol <= 0) {
$nulos = $nulos + 1;
}
$var = $var + 1;
If($nulos >= 9) {
exit("Error 501: You must to select at least 1 unit!");
}}}

nullcheck();



function coodcheck($mostrar) {
global $x, $y;
$xy = "$x"."$y";
$consultatrop = mysql_query("select * from aldeias where xy = '$xy'");
	If($linhatrop = mysql_num_rows($consultatrop)) {
If($mostrar == 1) {
while($linhatrop = mysql_fetch_object($consultatrop)) {
echo "Village: ".$linhatrop->nome."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp      Owner: ".$linhatrop->dono;
}}} else { exit("Error 502: Invalid Coordinates!");}
}

coodcheck(0);


function soueu() {
global $x, $y, $login_usuario;
$xy = "$x"."$y";
$consultatrop = mysql_query("select * from aldeias where xy = '$xy'");
	If($linhatrop = mysql_num_rows($consultatrop)) {
while($linhatrop = mysql_fetch_object($consultatrop)) {
If($linhatrop->dono == $login_usuario) {
exit("Error 502: Invalid Coordinates!");}
}}}

soueu();
//Fim do anti-cheat.

?>
</center>
<?php


$povo = $linhatrop2->povo;
$xa = $linhatrop->x;
$ya = $linhatrop->y;
$aa = pow(($x-$xa),2) + pow(($y-$ya),2);
$dist = sqrt($aa);

function detect($unit){
global $linhatrop2, $linhatrop, $p1nome, $p2nome, $p3nome, $p4nome, $p5nome, $p6nome, $p7nome, $p8nome, $p9nome, $p10nome, $p11nome, $p12nome, $p13nome, $p14nome, $p15nome, $p999nome;
$povo = $linhatrop2->povo;
$povok = 1;
$unitk = 0;
//Traz as variaveis para a funcao.
while ($povok < 16) {
If ($unitk < 10) {
$ptrop = "p".$povok."nome";
$t = "t".$povok."".$unit."nome";
global $$t;
$unitk = $unitk + 1;
If ($unitk > 9) { $unitk = 1; }
}
$povok = $povok + 1;
}
//Da o echo.
$ptrop2 = "p".$povo."nome";
$t2 = "t".$povo."".$unit."nome";
echo $$t2;
}

function dist() {
global $x, $y, $linhatrop;
$xa = $linhatrop->x;
$ya = $linhatrop->y;
$xb = $x;
$yb = $y;
$aa = pow(($xb-$xa),2) + pow(($yb-$ya),2);
$dist = sqrt($aa);
}
dist();



function calctime($povo){
global $dist, $t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9;
//Traz as variaveis para a funcao.
$unitk = 1;
While ($unitk < 10) {
$tropv = "t".$povo.$unitk."v";
global $$tropv;
$unitk = $unitk + 1;
}

If ($t1 >= 1) {$ta1 = "t".$povo."1v";} else { $ta1 = "lol";}
If ($t2 >= 1) {$ta2 = "t".$povo."2v";} else { $ta2 = "lol";}
If ($t3 >= 1) {$ta3 = "t".$povo."3v";} else { $ta3 = "lol";}
If ($t4 >= 1) {$ta4 = "t".$povo."4v";} else { $ta4 = "lol";}
If ($t5 >= 1) {$ta5 = "t".$povo."5v";} else { $ta5 = "lol";}
If ($t6 >= 1) {$ta6 = "t".$povo."6v";} else { $ta6 = "lol";}
If ($t7 >= 1) {$ta7 = "t".$povo."7v";} else { $ta7 = "lol";}
If ($t8 >= 1) {$ta8 = "t".$povo."8v";} else { $ta8 = "lol";}
If ($t9 >= 1) {$ta9 = "t".$povo."9v";} else { $ta9 = "lol";}
$lol = "99999";
$tropas = array($$ta1,$$ta2,$$ta3,$$ta4,$$ta5,$$ta6,$$ta7,$$ta8,$$ta9);
sort($tropas);
$vfin = $tropas[0];
$var1a = $dist/$vfin;
$var1b = $var1a*3600;
$tempomov = StoH($var1b);
echo $tempomov;
}





function getunit($num){
global $login_usuario,$povo,$linhatropC;

$tt1 = "linhatropC";
$t1 = "t$povo$num";
echo $$tt1->$t1;}

function mostrar($issu) {
$lol = $issu;
If ($issu>0) {
} else { $lol = "0";}
echo $lol;

}
?>
<center>
<table name="trop1" id="trop1" border="1" style=" background-color: white;" cellpadding="0" cellspacing="0">
<td align="center" colspan="9"><b>Confirm</b></td><tr>
<td align="center"><?php detect(1); ?></td><td align="center"><?php detect(2); ?></td><td align="center"><?php detect(3); ?></td><td align="center"><?php detect(4); ?></td><td align="center"><?php detect(5); ?></td><td align="center"><?php detect(6); ?></td><td align="center"><?php detect(7); ?></td><td align="center"><?php detect(8); ?></td><td align="center"><?php detect(9); ?></td></tr><tr>
<td align="center"><?php mostrar($t1);?></td><td align="center"><?php mostrar($t2);?></td><td align="center"><?php mostrar($t3);?></td><td align="center"><?php mostrar($t4);?></td><td align="center"><?php mostrar($t5);?></td><td align="center"><?php mostrar($t6);?></td><td align="center"><?php mostrar($t7);?></td><td align="center"><?php mostrar($t8);?></td><td align="center"><?php mostrar($t9);?></td></tr><tr>
<td align="center" colspan="9"><form action="movtropscript.php" target="_top" name="mt" id="mt"  method="post" enctype="multipart/form-data"><input type="hidden" name="t1" value="<?php echo $t1;?>"><input type="hidden" name="t2" value="<?php echo $t2;?>"><input type="hidden" name="t3" value="<?php echo $t3;?>"><input type="hidden" name="t4" value="<?php echo $t4;?>"><input type="hidden" name="t5" value="<?php echo $t5;?>"><input type="hidden" name="t6" value="<?php echo $t6;?>"><input type="hidden" name="t7" value="<?php echo $t7;?>"><input type="hidden" name="t8" value="<?php echo $t8;?>"><input type="hidden" name="t9" value="<?php echo $t9;?>"><input type="hidden" name="x" value="<?php echo $x;?>"><input type="hidden" name="y" value="<?php echo $y;?>"></td></tr><tr>
<td align="center" colspan="9"><br><br><b>Coordinates</b></td></tr><tr>
<td align="center" colspan="9">X:<input type="number" value="<?php echo $x; ?>" id="x" name="x" disabled>Y:<input type="number" value="<?php echo $y; ?>" id="y" name="y" disabled></td></tr><tr>
<td align="center" colspan="9"><b><?php coodcheck(1); ?><br><?php  echo "Time: "; calctime($povo);?></b></td></tr><tr>
<td align="center" colspan="9"><input type="submit" value="Send Troops!"></tr>
</table>

</table>



</center>






<?php
}}}

?>













