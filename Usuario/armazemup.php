<center>

<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";

include_once "../Config/formulas.php";

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




 $consulta3080 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha5980 = mysql_num_rows($consulta3080); 
 while ($linha5980 = mysql_fetch_object($consulta3080)) { 


If ($linha5980->armazemtrabalhadores != 0) {
echo "<font color=red><b>Este edifício já está sendo evoluído</font></b>";
} else {


$nivelarmazem = $linha5980->armazemnv;
$madeiraestoque = $linha5980->madeira;
$ouroestoque = $linha5980->ouro;
$ferroestoque = $linha5980->ferro;
$comidaestoque = $linha5980->comida;

$popdisponivel = $linha5980->popdisponivel;


$uparmazemmadeira = $formulamadeiraarmazem;
$uparmazemouro = $formulaouroarmazem;
$uparmazemferro = $formulaferroarmazem;
$uparmazemcomida = $formulacomidaarmazem;
$uparmazemtempo = $formulatempoarmazem;

date_default_timezone_set('America/Los_Angeles');

$error = 0;

If ($popdisponivel < $nivelarmazem + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
$error = 1;
}
If ($uparmazemmadeira > $madeiraestoque) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
$error = 1;
}
If ($uparmazemouro > $ouroestoque) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
$error = 1;
}
If ($uparmazemferro > $ferroestoque) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
$error = 1;
}
If ($uparmazemcomida > $comidaestoque) {
echo "<font color=red><b>Comida Insuficiente!</font></b>";
$error = 1;
}



If ($error == 1) {
echo "<font color=red><b>Ação impossível de ser concluída</font></b>";
} else {

$updatetrabalhadores = mysql_query("update aldeias set popdisponivel = $popdisponivel - ($nivelarmazem + 1) where dono = '$login_usuario'");
$updatetrabalhadores2 = mysql_query("update aldeias set armazemtrabalhadores = $nivelarmazem + 1 where dono = '$login_usuario'");









$updatemadeiraarmazemup = mysql_query("update aldeias set madeira = $madeiraestoque - $uparmazemmadeira where dono = '$login_usuario'");
$updateouroarmazemup = mysql_query("update aldeias set ouro = $ouroestoque - $uparmazemouro where dono = '$login_usuario'");
$updateferroarmazemup = mysql_query("update aldeias set ferro = $ferroestoque - $uparmazemferro where dono = '$login_usuario'");
$updatecomidaarmazemup = mysql_query("update aldeias set comida = $comidaestoque - $uparmazemcomida where dono = '$login_usuario'");

$consulta552 = mysql_query("select * from config where time ");
 $linha552 = mysql_num_rows($consulta552); 
 while ($linha552 = mysql_fetch_object($consulta552)) { 




$tempoparaup = HtoS($uparmazemtempo) ;




$timeagora = $linha552->time;


$tempodestino = $timeagora + $tempoparaup;
$updatearmazemdestino = mysql_query("update aldeias set armazemtempodestino = $tempodestino where dono = '$login_usuario'");




$checkarmazemtempo = $linha5980->armazemtempodestino;

If ($checkarmazemtempo == 0) {


If ($updatearmazemdestino) {
echo "<font color=green><b>Ação realizada com sucesso!</font></b>";



}

}








}}
}}

?>

</center>





