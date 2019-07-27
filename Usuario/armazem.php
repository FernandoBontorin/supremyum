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

$checklinkvalid = $linha59809->armazemtempodestino;

$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 

$nivelarmazemm = $linha25544->armazemnv;

$popdisponivel = $linha25544->popdisponivel;


$armazemup = $nivelarmazemm + 1;


If ($nivelarmazemm >= 999) {

} else {
?>

<form>
<b>
<a href="armazemup.php">
<?php
}
If ($checklinkvalid == 0) {
$armazemtrabalhadores = $linha25544->armazemtrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $armazemtrabalhadores   where dono = '$login_usuario'");
$updatearmazemtrabalhadores = mysql_query("update aldeias set armazemtrabalhadores = 0 where dono = '$login_usuario'");
echo "Aumentar para o nível " .$armazemup;
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
$nivelarmazem = $linha5980->armazemnv;

If ($nivelarmazem >= 999) {

echo"Nível máximo já atingido!";

} else {


$uparmazemmadeira = $formulamadeiraarmazem;
$uparmazemouro = $formulaouroarmazem;
$uparmazemferro = $formulaferroarmazem;
$uparmazemcomida = $formulacomidaarmazem;
$uparmazemtempo = $formulatempoarmazem;










?>
<table border="1">
<td>

<?php
echo '<img src="../img/madeira.bmp">';  echo  ' '   .$uparmazemmadeira ;
?>
</td>
<td>
<?php
echo '<img src="../img/ouro.bmp">'; echo  ' '   .$uparmazemouro ;
?>
</td>
<td>
<?php
echo '<img src="../img/ferro.bmp">'; echo  ' '   .$uparmazemferro;
?>
</td>
<td>
<?php
echo '<img src="../img/comida.bmp">'; echo  ' '   .$uparmazemcomida;
?>
</td>
<td>
<?php
echo '<img src="../img/time.bmp">'; echo ' ';  echo $uparmazemtempo;
?>
</td>
</table>

<?php
$aaaabbbb = $nivelarmazem + 1;
$producaonext2 = pow($aaaabbbb,2) * 50 +1000;
echo "<font color=blue><b>Capacidade de armazenamento no nível ";  echo $nivelarmazem + 1;   echo ': ' .$producaonext2.   ' Recursos';  
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



$tempodestinoup = $linha2554->armazemtempodestino;



If ($tempodestinoup == 0) {
If ($popdisponivel < $nivelarmazemm + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
} else {
If ($uparmazemmadeira > $madeiradb) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
} else {
If ($uparmazemouro > $ourodb) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
} else {
If ($uparmazemferro > $ferrodb) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
} else {
If ($uparmazemcomida > $comidadb) {
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
$updatearmazemnivel = mysql_query("update aldeias set armazemnv = $nivelarmazem + 1 where dono = '$login_usuario'");
$updatearmazemdestino1 = mysql_query("update aldeias set armazemtempodestino = 0 where dono = '$login_usuario'");

$consulta55411 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha55411 = mysql_num_rows($consulta55411); 
 while ($linha55411 = mysql_fetch_object($consulta55411)) { 

$lalalala = $linha55411->armazemnv;
$newcap = pow($lalalala,2) * 50 +1000;
$updatecap = mysql_query("update aldeias set capacidade = $newcap where dono = '$login_usuario'");
}
} else {


}



}}}}}}}}





?>
</b>
</center>