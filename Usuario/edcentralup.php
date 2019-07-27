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


If ($linha5980->edcentraltrabalhadores != 0) {
echo "<font color=red><b>Este edifício já está sendo evoluído</font></b>";
} else {


$niveledcentral = $linha5980->edcentralnv;
$madeiraestoque = $linha5980->madeira;
$ouroestoque = $linha5980->ouro;
$ferroestoque = $linha5980->ferro;
$comidaestoque = $linha5980->comida;

$popdisponivel = $linha5980->popdisponivel;


$upedcentralmadeira = $formulamadeiraedcentral;
$upedcentralouro = $formulaouroedcentral;
$upedcentralferro = $formulaferroedcentral;
$upedcentralcomida = $formulacomidaedcentral;
$upedcentraltempo = $formulatempoedcentral;

date_default_timezone_set('America/Los_Angeles');

$error = 0;

If ($popdisponivel < $niveledcentral + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
$error = 1;
}
If ($upedcentralmadeira > $madeiraestoque) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
$error = 1;
}
If ($upedcentralouro > $ouroestoque) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
$error = 1;
}
If ($upedcentralferro > $ferroestoque) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
$error = 1;
}
If ($upedcentralcomida > $comidaestoque) {
echo "<font color=red><b>Comida Insuficiente!</font></b>";
$error = 1;
}



If ($error == 1) {
echo "<font color=red><b>Ação impossível de ser concluída</font></b>";
} else {

$updatetrabalhadores = mysql_query("update aldeias set popdisponivel = $popdisponivel - ($niveledcentral + 1) where dono = '$login_usuario'");
$updatetrabalhadores2 = mysql_query("update aldeias set edcentraltrabalhadores = $niveledcentral + 1 where dono = '$login_usuario'");









$updatemadeiraedcentralup = mysql_query("update aldeias set madeira = $madeiraestoque - $upedcentralmadeira where dono = '$login_usuario'");
$updateouroedcentralup = mysql_query("update aldeias set ouro = $ouroestoque - $upedcentralouro where dono = '$login_usuario'");
$updateferroedcentralup = mysql_query("update aldeias set ferro = $ferroestoque - $upedcentralferro where dono = '$login_usuario'");
$updatecomidaedcentralup = mysql_query("update aldeias set comida = $comidaestoque - $upedcentralcomida where dono = '$login_usuario'");

$consulta552 = mysql_query("select * from config where time ");
 $linha552 = mysql_num_rows($consulta552); 
 while ($linha552 = mysql_fetch_object($consulta552)) { 




$tempoparaup = HtoS($upedcentraltempo) ;




$timeagora = $linha552->time;


$tempodestino = $timeagora + $tempoparaup;
$updateedcentraldestino = mysql_query("update aldeias set edcentraltempodestino = $tempodestino where dono = '$login_usuario'");


$checkedcentraltempo = $linha5980->edcentraltempodestino;

If ($checkedcentraltempo == 0) {


If ($updateedcentraldestino) {
echo "<font color=green><b>Ação realizada com sucesso!</font></b>";



}

}








}}
}}

?>

</center>





