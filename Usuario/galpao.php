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

$checklinkvalid = $linha59809->galpaotempodestino;

$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 

$nivelgalpaoo = $linha25544->galpaonv;

$popdisponivel = $linha25544->popdisponivel;


$galpaoup = $nivelgalpaoo + 1;


If ($nivelgalpaoo >= 999) {

} else {
?>

<form>
<b>
<a href="galpaoup.php">
<?php
}
If ($checklinkvalid == 0) {
$galpaotrabalhadores = $linha25544->galpaotrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $galpaotrabalhadores   where dono = '$login_usuario'");
$updategalpaotrabalhadores = mysql_query("update aldeias set galpaotrabalhadores = 0 where dono = '$login_usuario'");
echo "Aumentar para o n�vel " .$galpaoup;
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
$nivelgalpao = $linha5980->galpaonv;

If ($nivelgalpao >= 999) {

echo"N�vel m�ximo j� atingido!";

} else {


$upgalpaomadeira = $formulamadeiragalpao;
$upgalpaoouro = $formulaourogalpao;
$upgalpaoferro = $formulaferrogalpao;
$upgalpaocomida = $formulacomidagalpao;
$upgalpaotempo = $formulatempogalpao;










?>
<table border="1">
<td>

<?php
echo '<img src="../img/madeira.bmp">';  echo  ' '   .$upgalpaomadeira ;
?>
</td>
<td>
<?php
echo '<img src="../img/ouro.bmp">'; echo  ' '   .$upgalpaoouro ;
?>
</td>
<td>
<?php
echo '<img src="../img/ferro.bmp">'; echo  ' '   .$upgalpaoferro;
?>
</td>
<td>
<?php
echo '<img src="../img/comida.bmp">'; echo  ' '   .$upgalpaocomida;
?>
</td>
<td>
<?php
echo '<img src="../img/time.bmp">'; echo ' ';  echo $upgalpaotempo;
?>
</td>
</table>

<?php
$aaaabbbb = $nivelgalpao + 1;
$producaonext2 = pow($aaaabbbb,2) * 50 +1100;
echo "<font color=blue><b>Capacidade de armazenamento no n�vel ";  echo $nivelgalpao + 1;   echo ': ' .$producaonext2.   ' Recursos';  
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



$tempodestinoup = $linha2554->galpaotempodestino;



If ($tempodestinoup == 0) {
If ($popdisponivel < $nivelgalpaoo + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
} else {
If ($upgalpaomadeira > $madeiradb) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
} else {
If ($upgalpaoouro > $ourodb) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
} else {
If ($upgalpaoferro > $ferrodb) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
} else {
If ($upgalpaocomida > $comidadb) {
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
$updategalpaonivel = mysql_query("update aldeias set galpaonv = $nivelgalpao + 1 where dono = '$login_usuario'");
$updategalpaodestino1 = mysql_query("update aldeias set galpaotempodestino = 0 where dono = '$login_usuario'");

$consulta55411 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha55411 = mysql_num_rows($consulta55411); 
 while ($linha55411 = mysql_fetch_object($consulta55411)) { 

$lalalala = $linha55411->galpaonv;
$newcap = pow($lalalala,2) * 50 +1100;
$updatecap = mysql_query("update aldeias set capacidadecomida = $newcap where dono = '$login_usuario'");
}
} else {


}



}}}}}}}}





?>
</b>
</center>