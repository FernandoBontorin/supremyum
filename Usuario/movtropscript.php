<?php
include "../Config/tropasdados.php";
include "../validar_session.php";
include "../Config/config_sistema.php";
include "../engine/recursos.php";
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





$consultatrop = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linhatrop = mysql_num_rows($consultatrop);
while($linhatrop = mysql_fetch_object($consultatrop)) {
$consultatrop2 = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	$linhatrop2 = mysql_num_rows($consultatrop2);
while($linhatrop2 = mysql_fetch_object($consultatrop2)) {
$consultatropE = mysql_query("select * from tropas where dono = '$login_usuario'");
	$linhatropC = mysql_num_rows($consultatropE);
while($linhatropC = mysql_fetch_object($consultatropE)) {
$povo = $linhatrop2->povo;
$xa = $linhatrop->x;
$ya = $linhatrop->y;
$aa = pow(($x-$xa),2) + pow(($y-$ya),2);
$dist = sqrt($aa);


// Anti-Cheat abaixo.

function decquant($unit,$order) {
global $linhatrop2, $linhatropC, $povo;
$v1 = "linhatropC";
$v2 = "t$povo$unit";
If ($$v1->$v2 < $order) {
exit("Error 500: Insufficient Troops!");
}}

function chamardq() {
$var = "1";
while($var < 10) {
global $t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9, $povo;
$order = "t".$var;
decquant($var,$$order);
$var = $var + 1;
}
}

chamardq();




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




// Fim do Anti-Cheat.




function detect($unit){
global $linhatrop2, $linhatrop, $p1nome, $p2nome, $p3nome, $p4nome, $p5nome, $p6nome, $p7nome, $p8nome, $p9nome, $p10nome, $p11nome, $p12nome, $p13nome, $p14nome, $p15nome, $p999nome, $t11nome, $t12nome, $t13nome, $t14nome, $t15nome, $t16nome, $t17nome, $t18nome, $t19nome, $t21nome, $t22nome, $t23nome, $t24nome, $t25nome, $t26nome, $t27nome, $t28nome, $t29nome;
$povo = $linhatrop2->povo;
$ptrop = "p".$povo."nome";
$t = "t".$povo."".$unit."nome";
echo $$t;
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


function calctime($povo,$mostrar){
global $tempomov, $dist, $t1, $t2, $t3, $t4, $t5, $t6, $t7, $t8, $t9, $t11v, $t12v, $t13v, $t14v, $t15v, $t16v, $t17v, $t18v, $t19v, $t21v, $t22v, $t23v, $t24v, $t25v, $t26v, $t27v, $t28v, $t29v;
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
If ($mostrar == 1) {
echo $tempomov;
}
}

//Send.

function getid1() {
global $login_usuario, $linhatrop, $meuid;
$meuid = $linhatrop->ID;
}
getid1();



function getid2() {
global $x, $y, $destid, $povodest;
$xy = "$x"."$y";
$consultatrop = mysql_query("select * from aldeias where xy = '$xy'");
	If($linhatrop = mysql_num_rows($consultatrop)) {
while($linhatrop = mysql_fetch_object($consultatrop)) {
$destid = $linhatrop->ID;
$povodest = $linhatrop->povo;
}}}
getid2();
calctime($povo,0);
$moretime = HtoS($tempomov);
$timeagora = $timee;
$timefinal = $timee + $moretime;


$sqlsend = "insert into ataques (ID,remetente,destino,tempocmc,tempofinal,povorem,povodest,t1,t2,t3,t4,t5,t6,t7,t8,t9) values (' ','$meuid','$destid','$timeagora','$timefinal','$povo','$povodest','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9')";
$consultasend = mysql_query($sqlsend);
If($consultasend) { } else { echo "Error 900: Troop Send DB Error!";}

//End Send.








?>

<center>
<table border="1" cellpadding="2" cellspacing="0">
<td align="center" colspan="9"><b><font color="green">Troop Movements Successfully Processed!</font></b></td><tr>
<td align="center"><?php detect(1); ?></td><td align="center"><?php detect(2); ?></td><td align="center"><?php detect(3); ?></td><td align="center"><?php detect(4); ?></td><td align="center"><?php detect(5); ?></td><td align="center"><?php detect(6); ?></td><td align="center"><?php detect(7); ?></td><td align="center"><?php detect(8); ?></td><td align="center"><?php detect(9); ?></td></tr><tr>
<td align="center"><?php mostrar($t1);?></td><td align="center"><?php mostrar($t2);?></td><td align="center"><?php mostrar($t3);?></td><td align="center"><?php mostrar($t4);?></td><td align="center"><?php mostrar($t5);?></td><td align="center"><?php mostrar($t6);?></td><td align="center"><?php mostrar($t7);?></td><td align="center"><?php mostrar($t8);?></td><td align="center"><?php mostrar($t9);?></td></tr><tr>
<td align="center" colspan="9"><b><?php coodcheck(1); ?></b></td></tr><tr>
<td align="center" colspan="9"><b><?php calctime($povo,1); ?></b></td></tr><tr>
<td align="center" colspan="9"><b>Coordinates</b></td></tr><tr>
<td align="center" colspan="9">X:<input type="number" value="<?php echo $x; ?>" id="x" name="x" disabled>Y:<input type="number" value="<?php echo $y; ?>" id="y" name="y" disabled></td></tr><tr>
</table>
<a href="home.php">Home</a>
</center>




<?php
}}}

?>













