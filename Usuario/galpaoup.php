<center>

<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";

include "../Config/formulas.php";

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


If ($linha5980->galpaotrabalhadores != 0) {
echo "<font color=red><b>Este edifício já está sendo evoluído</font></b>";
} else {


$nivelgalpao = $linha5980->galpaonv;
$madeiraestoque = $linha5980->madeira;
$ouroestoque = $linha5980->ouro;
$ferroestoque = $linha5980->ferro;
$comidaestoque = $linha5980->comida;

$popdisponivel = $linha5980->popdisponivel;


$upgalpaomadeira = $formulamadeiragalpao;
$upgalpaoouro = $formulaourogalpao;
$upgalpaoferro = $formulaferrogalpao;
$upgalpaocomida = $formulacomidagalpao;
$upgalpaotempo = $formulatempogalpao;

date_default_timezone_set('America/Los_Angeles');

$error = 0;

If ($popdisponivel < $nivelgalpao + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
$error = 1;
}
If ($upgalpaomadeira > $madeiraestoque) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
$error = 1;
}
If ($upgalpaoouro > $ouroestoque) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
$error = 1;
}
If ($upgalpaoferro > $ferroestoque) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
$error = 1;
}
If ($upgalpaocomida > $comidaestoque) {
echo "<font color=red><b>Comida Insuficiente!</font></b>";
$error = 1;
}



If ($error == 1) {
echo "<font color=red><b>Ação impossível de ser concluída</font></b>";
} else {

$updatetrabalhadores = mysql_query("update aldeias set popdisponivel = $popdisponivel - ($nivelgalpao + 1) where dono = '$login_usuario'");
$updatetrabalhadores2 = mysql_query("update aldeias set galpaotrabalhadores = $nivelgalpao + 1 where dono = '$login_usuario'");









$updatemadeiragalpaoup = mysql_query("update aldeias set madeira = $madeiraestoque - $upgalpaomadeira where dono = '$login_usuario'");
$updateourogalpaoup = mysql_query("update aldeias set ouro = $ouroestoque - $upgalpaoouro where dono = '$login_usuario'");
$updateferrogalpaoup = mysql_query("update aldeias set ferro = $ferroestoque - $upgalpaoferro where dono = '$login_usuario'");
$updatecomidagalpaoup = mysql_query("update aldeias set comida = $comidaestoque - $upgalpaocomida where dono = '$login_usuario'");

$consulta552 = mysql_query("select * from config where time ");
 $linha552 = mysql_num_rows($consulta552); 
 while ($linha552 = mysql_fetch_object($consulta552)) { 




$tempoparaup = HtoS($upgalpaotempo) ;




$timeagora = $linha552->time;


$tempodestino = $timeagora + $tempoparaup;
$updategalpaodestino = mysql_query("update aldeias set galpaotempodestino = $tempodestino where dono = '$login_usuario'");




$checkgalpaotempo = $linha5980->galpaotempodestino;

If ($checkgalpaotempo == 0) {


If ($updategalpaodestino) {
echo "<font color=green><b>Ação realizada com sucesso!</font></b>";



}

}








}}
}}

?>

</center>





