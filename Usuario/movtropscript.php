<?php
include "../Config/tropasdados.php";
include "../validar_session.php";
include "../Config/config_sistema.php";
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
	$linhatropE = mysql_num_rows($consultatropE);
while($linhatropC = mysql_fetch_object($consultatropE)) {
$povo = $linhatrop2->povo;
$xa = $linhatrop->x;
$ya = $linhatrop->y;
$aa = pow(($x-$xa),2) + pow(($y-$ya),2);
$dist = sqrt($aa);

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


echo $t1.$t2.$t3.$t4.$t5.$t6.$t7.$t8.$t9.$x.$y;
?>







<?php
}}}

?>













