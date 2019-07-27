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
<link rel="StyleSheet" href="style.css">
<style type="text/css">
<!--

-->
</style>


<script language="JavaScript"> 
function moveRelogio(){ 
   	momentoAtual = new Date() 
   	hora = momentoAtual.getHours() 
   	minuto = momentoAtual.getMinutes() 
   	segundo=segundo = momentoAtual.getSeconds() ;

   	horaImprimivel = hora + " : " + minuto + " : " + segundo 

   	document.form_relogio.relogio.value = horaImprimivel 


var x = "111111111111";   


   	setTimeout("moveRelogio()",1000) 
} 
</script> 

</head>
<body onload="moveRelogio()">




<?php
$consulta3000999 = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	$linha590 = mysql_num_rows($consulta3000999);

while($linha590 = mysql_fetch_object($consulta3000999)) {
if  ($linha590->vilas ==1) {

$consultaabcd = mysql_query("select * from config where tempo");
while($linhaabcd = mysql_fetch_object($consultaabcd)) {
	$tempoo = $linhaabcd->tempo;
echo $tempoo;





}



$consulta300053 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha83 = mysql_num_rows($consulta300053);
while($linha833 = mysql_fetch_object($consulta300053)) {
$madeirahora = $linha833->madeirahora;
$ourohora = $linha833->ourohora;
$ferrohora = $linha833->ferrohora;
$comidahora = $linha833->comidahora;



}
while($linha83 = mysql_fetch_object($consulta300053)) {


$madeiraparaatt=($linha83->madeirahora);
$ouroparaatt=($linha83->ourohora);
$ferroparaatt=($linha83->ferrohora);
$comidaparaatt=($linha83->comidahora);

}



$uptempo = mysql_query("UPDATE config SET tempo = UTC_TIMESTAMP()");





		$timesecond = time();
echo "            ".$timesecond;

$consultatime = mysql_query("select * from config where time");
while($linhatime = mysql_fetch_object($consultatime)) {
	$timee = $linhatime->time;


$tempoparaup = $timesecond - $timee;
echo "              ".$tempoparaup;




$uptime = mysql_query("UPDATE config SET time = $timesecond");


$attmadeira = mysql_query("UPDATE aldeias SET madeira = ($madeirahora / 3600) * $tempoparaup + madeira WHERE dono = '$login_usuario'");
$attouro = mysql_query("UPDATE aldeias SET ouro = ($ourohora / 3600) * $tempoparaup + ouro WHERE dono = '$login_usuario'");
$attferro = mysql_query("UPDATE aldeias SET ferro = ($ferrohora / 3600) * $tempoparaup + ferro WHERE dono = '$login_usuario'");
$attcomida = mysql_query("UPDATE aldeias SET comida = ($comidahora / 3600) * $tempoparaup + comida WHERE dono = '$login_usuario'");
}
}}


?>

</body>
</html>
















