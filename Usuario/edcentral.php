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


           $consulta30809 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha59809 = mysql_num_rows($consulta30809); 
 while ($linha59809 = mysql_fetch_object($consulta30809)) { 

$checklinkvalid = $linha59809->edcentraltempodestino;

$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 

$niveledcentrall = $linha25544->edcentralnv;

$popdisponivel = $linha25544->popdisponivel;


$edcentralup = $niveledcentrall + 1;


If ($niveledcentrall >= 20) {

} else {
?>

<form>
<b>
<a href="edcentralup.php">
<?php
}
If ($checklinkvalid == 0) {
$edcentraltrabalhadores = $linha25544->edcentraltrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $edcentraltrabalhadores   where dono = '$login_usuario'");
$updateedcentraltrabalhadores = mysql_query("update aldeias set edcentraltrabalhadores = 0 where dono = '$login_usuario'");
echo "Aumentar para o nível " .$edcentralup;
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
$niveledcentral = $linha5980->edcentralnv;

If ($niveledcentral >= 20) {

echo"Nível máximo já atingido!";

} else {


$upedcentralmadeira = $formulamadeiraedcentral;
$upedcentralouro = $formulaouroedcentral;
$upedcentralferro = $formulaferroedcentral;
$upedcentralcomida = $formulacomidaedcentral;
$upedcentraltempo = $formulatempoedcentral;










?>
<table border="1">
<td>

<?php
echo '<img src="../img/madeira.bmp">';  echo  ' '   .$upedcentralmadeira ;
?>
</td>
<td>
<?php
echo '<img src="../img/ouro.bmp">'; echo  ' '   .$upedcentralouro ;
?>
</td>
<td>
<?php
echo '<img src="../img/ferro.bmp">'; echo  ' '   .$upedcentralferro;
?>
</td>
<td>
<?php
echo '<img src="../img/comida.bmp">'; echo  ' '   .$upedcentralcomida;
?>
</td>
<td>
<?php
echo '<img src="../img/time.bmp">'; echo ' ';  echo $upedcentraltempo;
?>
</td>
</table>

<?php
$aaaabbbb = $niveledcentral + 1;
$producaonext =  2 * $aaaabbbb;
$producaonext2 = (int)($producaonext);
echo "<font color=blue><b>Bônus no tempo de construção no nível ";  echo $niveledcentral + 1;   echo ': ' .$producaonext2.   '%';  
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



$tempodestinoup = $linha2554->edcentraltempodestino;



If ($tempodestinoup == 0) {
If ($popdisponivel < $niveledcentrall + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
} else {
If ($upedcentralmadeira > $madeiradb) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
} else {
If ($upedcentralouro > $ourodb) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
} else {
If ($upedcentralferro > $ferrodb) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
} else {
If ($upedcentralcomida > $comidadb) {
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
$updateedcentralnivel = mysql_query("update aldeias set edcentralnv = $niveledcentral + 1 where dono = '$login_usuario'");
$updateedcentraldestino1 = mysql_query("update aldeias set edcentraltempodestino = 0 where dono = '$login_usuario'");
} else {


}



}}}}}}}}





?>
</b>
</center>