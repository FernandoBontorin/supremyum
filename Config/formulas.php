<?php
include "../validar_session.php";
include "../engine/recursos.php";
include "../Config/config_sistema.php";

date_default_timezone_set('America/Los_Angeles');

function HtoS($h) {
$z = strtotime("00:00:00");
$h = strtotime($h);
return ($h-$z);}


function StoH($s) {
$z = strtotime("00:00:00");
return Date("H:i:s", $s + $z);
}


$consultaconfig = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linhaconfig = mysql_num_rows($consultaconfig);
while($linhaconfig = mysql_fetch_object($consultaconfig)) {

$consultaTIME = mysql_query("select * from config where time");
	$linhaTIME = mysql_num_rows($consultaTIME);
while($linhaTIME = mysql_fetch_object($consultaTIME)) {

$consultaTROPAS = mysql_query("select * from tropas where IDaldeia = '$linhaconfig->ID'");
	$linhaTROPAS = mysql_num_rows($consultaTROPAS);
while($linhaTROPAS = mysql_fetch_object($consultaTROPAS)) {

$consultaFILA = mysql_query("select * from fila where aldeiaid = '$linhaconfig->ID'");
	$linhaFILA = mysql_num_rows($consultaFILA);
while($linhaFILA = mysql_fetch_object($consultaFILA)) {

$tempoatual = $linhaTIME->time;
$t11atual = $linhaTROPAS->t11;
$t11filaatual = $linhaFILA->t11;
$t12atual = $linhaTROPAS->t12;
$t12filaatual = $linhaFILA->t12;
$t13atual = $linhaTROPAS->t13;
$t13filaatual = $linhaFILA->t13;
$t14atual = $linhaTROPAS->t14;
$t14filaatual = $linhaFILA->t14;

$niveldoedcentral = $linhaconfig->edcentralnv;
$abcde1 = $linhaconfig->edcentralnv;
$abcde = $abcde1 * 2;
If ($abcde == 0) {
$niveldoedcentral = 0.5;
} else {
}

$formulamadeiram = pow($linhaconfig->nivelmadeira,2) * 7 + 30;
$formulaourom = pow($linhaconfig->nivelmadeira,2) * 15 + 30;
$formulaferrom = pow($linhaconfig->nivelmadeira,2) * 15 + 30;
$formulacomidam = pow($linhaconfig->nivelmadeira,2) * 5 + 10;
$upmadeiratempodb = "00:01:40";
$descontotempom = HtoS($upmadeiratempodb) / 100 * $abcde;
$formulatempom = StoH(HtoS($upmadeiratempodb)  / $server_speed * $nivelmadeira  - $descontotempom)."\n";
$desbug1 = HtoS($upmadeiratempodb)  / $server_speed * $nivelmadeira  - $descontotempom;
If ($desbug1 < 0) {
$formulatempom = StoH(0);
} else {
}


$formulamadeirao = pow($linhaconfig->nivelouro,2) * 15 + 30;
$formulaouroo = pow($linhaconfig->nivelouro,2) * 7 + 30;
$formulaferroo = pow($linhaconfig->nivelouro,2) * 15 + 30;
$formulacomidao = pow($linhaconfig->nivelouro,2) * 5 + 10;
$upourotempodb = "00:01:40";
$descontotempoo = HtoS($upourotempodb) / 100 * $abcde;
$formulatempoo = StoH(HtoS($upourotempodb)  / $server_speed * $nivelouro  - $descontotempoo)."\n";
$desbug2 = HtoS($upourotempodb)  / $server_speed * $nivelouro  - $descontotempoo;
If ($desbug2 < 0) {
$formulatempoo = StoH(0);
} else {
}





$formulamadeiraf = pow($linhaconfig->nivelferro,2) * 15 + 30;
$formulaourof = pow($linhaconfig->nivelferro,2) * 15 + 30;
$formulaferrof = pow($linhaconfig->nivelferro,2) * 7 + 30;
$formulacomidaf = pow($linhaconfig->nivelferro,2) * 5 + 10;
$upferrotempodb = "00:01:40";
$descontotempof = HtoS($upferrotempodb) / 100 * $abcde;
$formulatempof = StoH(HtoS($upferrotempodb)  / $server_speed * $nivelferro  - $descontotempof)."\n";
$desbug3 = HtoS($upferrotempodb)  / $server_speed * $nivelferro  - $descontotempof;
If ($desbug3 < 0) {
$formulatempof = StoH(0);
} else {
}



$formulamadeirac = pow($linhaconfig->nivelcomida,2) * 15 + 20;
$formulaouroc = pow($linhaconfig->nivelcomida,2) * 15 + 20;
$formulaferroc = pow($linhaconfig->nivelcomida,2) * 15 + 20;
$formulacomidac = pow($linhaconfig->nivelcomida,2) * 3 + 7;
$upcomidatempodb = "00:00:50";
$descontotempoc = HtoS($upcomidatempodb) / 100 * $abcde;
$formulatempoc = StoH(HtoS($upcomidatempodb)  / $server_speed * $nivelcomida  - $descontotempoc)."\n";
$desbug4 = HtoS($upcomidatempodb)  / $server_speed * $nivelcomida  - $descontotempoc;
If ($desbug4 < 0) {
$formulatempoc = StoH(0);
} else {
}



$desbugedcentral = $abcde;
$formulamadeiraedcentral = pow($abcde1,2) * 17 + 30;
$formulaouroedcentral = pow($abcde1,2) * 10 + 30;
$formulaferroedcentral = pow($abcde1,2) * 15 + 30;
$formulacomidaedcentral = pow($abcde1,2) * 3 + 10;
$upedcentraltempodb = "00:02:50";
$descontotempoedcentral = HtoS($upedcentraltempodb) / 100 * $abcde;
$formulatempoedcentral = StoH(HtoS($upedcentraltempodb)  / $server_speed * $niveldoedcentral  - $descontotempoedcentral)."\n";
$desbug5 = HtoS($upmadeiratempodb)  / $server_speed * $niveldoedcentral  - $descontotempoedcentral;
If ($desbug5 < 0) {
$formulatempoedcentral = StoH(0);
} else {
}




$nivelarmazem = $linhaconfig->armazemnv;
If ($nivelarmazem == 0) {
$nivelarmazem = 0.5;
} else {
}
$formulamadeiraarmazem = pow($linhaconfig->armazemnv,2) * 15 + 70;
$formulaouroarmazem = pow($linhaconfig->armazemnv,2) * 15 + 30;
$formulaferroarmazem = pow($linhaconfig->armazemnv,2) * 15 + 60;
$formulacomidaarmazem = pow($linhaconfig->armazemnv,2) * 3 + 15;
$uparmazemtempodb = "00:08:20";
$descontotempoarmazem = HtoS($uparmazemtempodb) / 100 * $abcde;
$formulatempoarmazem = StoH(HtoS($uparmazemtempodb)  / $server_speed * $nivelarmazem  - $descontotempoarmazem)."\n";
$desbug6 = HtoS($uparmazemtempodb)  / $server_speed * $nivelarmazem  - $descontotempoarmazem;
If ($desbug6 < 0) {
$formulatempoarmazem = StoH(0);
} else {
}


$estocagemarmazem = pow($nivelarmazem,2) * 50 +1000;







$nivelgalpao = $linhaconfig->galpaonv;
If ($nivelgalpao == 0) {
$nivelgalpao = 0.5;
} else {
}
$formulamadeiragalpao = pow($linhaconfig->galpaonv,2) * 14 + 70;
$formulaourogalpao = pow($linhaconfig->galpaonv,2) * 14 + 30;
$formulaferrogalpao = pow($linhaconfig->galpaonv,2) * 14 + 60;
$formulacomidagalpao = pow($linhaconfig->galpaonv,2) * 3 + 25;
$upgalpaotempodb = "00:07:00";
$descontotempogalpao = HtoS($upgalpaotempodb) / 100 * $abcde;
$formulatempogalpao = StoH(HtoS($upgalpaotempodb)  / $server_speed * $nivelgalpao  - $descontotempogalpao)."\n";
$desbug7 = HtoS($upgalpaotempodb)  / $server_speed * $nivelgalpao  - $descontotempogalpao;
If ($desbug7 < 0) {
$formulatempogalpao = StoH(0);
} else {
}


$estocagemgalpao = pow($nivelgalpao,2) * 50 +1100;




$nivelquartel = $linhaconfig->quartelnv;
If ($nivelquartel == 0) {
$nivelquartel = 0.5;
} else {
}
$formulamadeiraquartel = pow($linhaconfig->quartelnv,2) * 40 + 250;
$formulaouroquartel = pow($linhaconfig->quartelnv,2) * 40 + 200;
$formulaferroquartel = pow($linhaconfig->quartelnv,2) * 40 + 280;
$formulacomidaquartel = pow($linhaconfig->quartelnv,2) * 15 + 110;
$upquarteltempodb = "00:56:40";
$descontotempoquartel = HtoS($upquarteltempodb) / 100 * $abcde;
$formulatempoquartel = StoH(HtoS($upquarteltempodb)  / $server_speed * $nivelquartel  - $descontotempoquartel)."\n";
$desbug8 = HtoS($upquarteltempodb)  / $server_speed * $nivelquartel  - $descontotempoquartel;
If ($desbug8 < 0) {
$formulatempoquartel = StoH(0);
} else {
}










}}}}

?>