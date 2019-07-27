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


           $consulta30809 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha59809 = mysql_num_rows($consulta30809); 
 while ($linha59809 = mysql_fetch_object($consulta30809)) { 

$checklinkvalid = $linha59809->quarteltempodestino;

$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 

$nivelquartell = $linha25544->quartelnv;
$niveledcentral = $linha25544->edcentralnv;

$popdisponivel = $linha25544->popdisponivel;


$quartelup = $nivelquartell + 1;


If ($nivelquartell >= 20) {

} else {
?>

<form>
<b>
<a href="quartelup.php">
<?php
}
If ($checklinkvalid == 0) {
$quarteltrabalhadores = $linha25544->quarteltrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $quarteltrabalhadores   where dono = '$login_usuario'");
$updatequarteltrabalhadores = mysql_query("update aldeias set quarteltrabalhadores = 0 where dono = '$login_usuario'");
echo "Aumentar para o nível " .$quartelup;
} else {
echo '';
}
?>
</a>
<br>
<br>
<?php



           $consulta3080 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha5980 = mysql_num_rows($consulta3080); 
 while ($linha5980 = mysql_fetch_object($consulta3080)) { 
$nivelquartel = $linha5980->quartelnv;

If ($nivelquartel >= 20) {

echo"Nível máximo já atingido!";

} else {


$upquartelmadeira = $formulamadeiraquartel;
$upquartelouro = $formulaouroquartel;
$upquartelferro = $formulaferroquartel;
$upquartelcomida = $formulacomidaquartel;
$upquarteltempo = $formulatempoquartel;










?>
<table border="1">
<td>

<?php
echo '<img src="../img/madeira.bmp">';  echo  ' '   .$upquartelmadeira ;
?>
</td>
<td>
<?php
echo '<img src="../img/ouro.bmp">'; echo  ' '   .$upquartelouro ;
?>
</td>
<td>
<?php
echo '<img src="../img/ferro.bmp">'; echo  ' '   .$upquartelferro;
?>
</td>
<td>
<?php
echo '<img src="../img/comida.bmp">'; echo  ' '   .$upquartelcomida;
?>
</td>
<td>
<?php
echo '<img src="../img/time.bmp">'; echo ' ';  echo $upquarteltempo;
?>
</td>
</table>

<?php
$aaaabbbb = $nivelquartel + 1;
$producaonext =  2 * $aaaabbbb;
$producaonext2 = (int)($producaonext);
echo "<font color=blue><b>Bônus no tempo de treinamento da infantaria no nível ";  echo $aaaabbbb;   echo ': ' .$producaonext2.   '%';  
?>
</font></b>
<?php
$madeiradb = $linha5980->madeira;
$ourodb = $linha5980->ouro;
$ferrodb = $linha5980->ferro;
$comidadb = $linha5980->comida;

$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 

$timedb = $linha554->time;

$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 



$tempodestinoup = $linha2554->quarteltempodestino;



If ($tempodestinoup == 0) {
If ($popdisponivel < $nivelquartell + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
} else {
If ($upquartelmadeira > $madeiradb) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
} else {
If ($upquartelouro > $ourodb) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
} else {
If ($upquartelferro > $ferrodb) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
} else {
If ($upquartelcomida > $comidadb) {
echo "<font color=red><b>Comida Insuficiente!</font></b>";
} else {

}}}}}
} else {

?>
<br>
<?php

If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
echo "$tempoparamostrar";

} else {

If ($timedb >= $tempodestinoup) {
$updatequartelnivel = mysql_query("update aldeias set quartelnv = $nivelquartel + 1 where dono = '$login_usuario'");
$updatequarteldestino1 = mysql_query("update aldeias set quarteltempodestino = 0 where dono = '$login_usuario'");



} else {


}



}}}}}}}}





?>
</b>
</center>