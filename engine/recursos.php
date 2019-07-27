<?php

include "../validar_session.php";

include "../Config/config_sistema.php";



// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");

$online = ("0");
$updates = mysql_query("update dados_usuarios set online = '$online' where Login = '$login_usuario'");





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>





<?php
$consulta3000999 = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	$linha590 = mysql_num_rows($consulta3000999);

while($linha590 = mysql_fetch_object($consulta3000999)) {
if  ($linha590->vilas ==1) {

$consultaabcd = mysql_query("select * from config where tempo");
while($linhaabcd = mysql_fetch_object($consultaabcd)) {
	$tempoo = $linhaabcd->tempo;






}




$consulta300053 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha833 = mysql_num_rows($consulta300053);
while($linha833 = mysql_fetch_object($consulta300053)) {

$nivelmadeira = $linha833->nivelmadeira;
$nivelouro = $linha833->nivelouro;
$nivelferro = $linha833->nivelferro;
$nivelcomida = $linha833->nivelcomida;
$consumo = $linha833->consumo;



$aaa = 2 * pow($nivelmadeira,2);
$madeiraaposconta = $aaa * $server_speed;

$bbb = 2 * pow($nivelouro,2);
$ouroaposconta = $bbb * $server_speed;

$ccc = 2 * pow($nivelferro,2);
$ferroaposconta = $ccc * $server_speed;

$ddd = 2 * pow($nivelcomida,2);
$comidaaposconta2 = $ddd * $server_speed;
$comidaaposconta = $comidaaposconta2 - $consumo;





$attdbmadeira = mysql_query("update aldeias set madeirahora = $madeiraaposconta where dono = '$login_usuario'");
$attdbouro = mysql_query("update aldeias set ourohora = $ouroaposconta where dono = '$login_usuario'");
$attdbferro = mysql_query("update aldeias set ferrohora = $ferroaposconta where dono = '$login_usuario'");
$attdbcomida = mysql_query("update aldeias set comidahora = $comidaaposconta where dono = '$login_usuario'");



$population = $linha833->nivelmadeira + $linha833->nivelouro + $linha833->nivelferro + $linha833->nivelcomida + $linha833->edanv + $linha833->edbnv + $linha833->edcnv + $linha833->galpaonv + $linha833->edenv + $linha833->edfnv + $linha833->edgnv + $linha833->edcentralnv + $linha833->armazemnv + $linha833->edjnv + $linha833->edknv + $linha833->quartelnv + $linha833->edmnv + $linha833->ednnv + $linha833->cpmnv + $linha833->edpnv + $linha833->edqnv + $linha833->edrnv + $linha833->estabulonv + $linha833->edtnv;



}
while($linha833 = mysql_fetch_object($consulta300053)) {


$madeiraparaatt=($linha833->madeirahora);
$ouroparaatt=($linha833->ourohora);
$ferroparaatt=($linha833->ferrohora);
$comidaparaatt=($linha833->comidahora);

}



$uptempo = mysql_query("UPDATE config SET tempo = UTC_TIMESTAMP()");





		$timesecond = time();



$consultatime = mysql_query("select * from config where time");
while($linhatime = mysql_fetch_object($consultatime)) {
	$timee = $linhatime->time;



$tempoparaup = $timesecond - $timee;


$consulta3000530 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha8330 = mysql_num_rows($consulta3000530);
while($linha8330 = mysql_fetch_object($consulta3000530)) {

$antigapop = $linha8330->pop;
$capacidade = $linha8330->capacidade;
$capacidadecomida = $linha8330->capacidadecomida;


$uptime = mysql_query("UPDATE config SET time = $timesecond");





$attmadeira = mysql_query("UPDATE aldeias SET madeira = ($madeiraaposconta / 3600) * $tempoparaup + madeira WHERE dono = '$login_usuario'");
$attouro = mysql_query("UPDATE aldeias SET ouro = ($ouroaposconta / 3600) * $tempoparaup + ouro WHERE dono = '$login_usuario'");
$attferro = mysql_query("UPDATE aldeias SET ferro = ($ferroaposconta / 3600) * $tempoparaup + ferro WHERE dono = '$login_usuario'");
$attcomida = mysql_query("UPDATE aldeias SET comida = ($comidaaposconta / 3600) * $tempoparaup + comida WHERE dono = '$login_usuario'");
$attpop = mysql_query("UPDATE aldeias SET pop = $population WHERE dono = '$login_usuario'");
$attpop2 = mysql_query("UPDATE dados_usuarios SET pop = $population WHERE Login = '$login_usuario'");


$consulta3000533 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha8333 = mysql_num_rows($consulta3000533);
while($linha8333 = mysql_fetch_object($consulta3000533)) {

$novapop = $linha8333->pop;

$attdisponivel = $linha8333->popdisponivel + ($novapop - $antigapop);

$attpopdisponivel = mysql_query("UPDATE aldeias SET popdisponivel = $attdisponivel WHERE dono = '$login_usuario'");

$madeiraatual = $linha8333->madeira;
$ouroatual = $linha8333->ouro;
$ferroatual = $linha8333->ferro;
$comidaatual = $linha8333->comida;


$niveldooarmazem = $linha8333->armazemnv;
$ajustarcapacidade = pow($niveldooarmazem,2) * 50 +1000;
$attcapajuste = mysql_query("UPDATE aldeias SET capacidade = $ajustarcapacidade WHERE dono = '$login_usuario'");

$niveldoogalpao = $linha8333->galpaonv;
$ajustarcapacidadecomida = pow($niveldoogalpao,2) * 50 +1100;
$attcapajuste = mysql_query("UPDATE aldeias SET capacidadecomida = $ajustarcapacidadecomida WHERE dono = '$login_usuario'");




If ($madeiraatual >= $capacidade) {
$madeirareajuste = mysql_query("UPDATE aldeias SET madeira = $capacidade WHERE dono = '$login_usuario'");
} else { }

If ($ouroatual >= $capacidade) {
$ouroreajuste = mysql_query("UPDATE aldeias SET ouro = $capacidade WHERE dono = '$login_usuario'");
} else { }

If ($ferroatual >= $capacidade) {
$ferroreajuste = mysql_query("UPDATE aldeias SET ferro = $capacidade WHERE dono = '$login_usuario'");
} else { }

If ($comidaatual >= $capacidadecomida) {
$comidareajuste = mysql_query("UPDATE aldeias SET comida = $capacidadecomida WHERE dono = '$login_usuario'");
} else { }


}
}}}}




?>

</body>
</html>
















