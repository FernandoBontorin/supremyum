
<?php 
include "padrao.php";
?>
<center><b>
<?php
$idret = $_POST['idret'];

$consultat2 = mysql_query("select * from retornos where ID = '$idret'");
$linhat2 = mysql_num_rows($consultat2);
If ($linhat2 == 0) {echo "<meta http-equiv='refresh' content='0; url=home.php'> ";} else {
while($linhat2 = mysql_fetch_object($consultat2)) {



$idvila = $linhat2->idchegada;
$povo = $linhat2->povo;

$consultat = mysql_query("select * from tropas where IDaldeia = '$idvila'");
$linhat = mysql_num_rows($consultat);
while($linhat = mysql_fetch_object($consultat)) {

//Soma as tropas.


$newt1 = $linhat2->t1 + $linhat->t1;
$newt2 = $linhat2->t2 + $linhat->t2;
$newt3 = $linhat2->t3 + $linhat->t3;
$newt4 = $linhat2->t4 + $linhat->t4;
$newt5 = $linhat2->t5 + $linhat->t5;
$newt6 = $linhat2->t6 + $linhat->t6;
$newt7 = $linhat2->t7 + $linhat->t7;
$newt8 = $linhat2->t8 + $linhat->t8;
$newt9 = $linhat2->t9 + $linhat->t9;

$updatet = mysql_query("update tropas set t1 = $newt1, t2 = $newt2, t3 = $newt3, t4 = $newt4, t5 = $newt5, t6 = $newt6, t7 = $newt7, t8 = $newt8, t9 = $newt9   where IDaldeia = '$idvila'");
If($updatet) { echo"Processing...<br>";} else { echo "Error 901: Troop Send* DB Error!"; exit();}





//Soma recursos.
$consultaa = mysql_query("select * from aldeias where ID = '$idvila'");
$linhaa = mysql_num_rows($consultaa);
while($linhaa = mysql_fetch_object($consultaa)) {

$madeiravila = $linhaa->madeira;
$ourovila = $linhaa->ouro;
$ferrovila = $linhaa->ferro;
$comidavila = $linhaa->comida;

$newmadeira = $madeiravila + $linhat2->madeira;
$newouro = $ourovila + $linhat2->ouro;
$newferro = $ferrovila + $linhat2->ferro;
$newcomida = $comidavila + $linhat2->comida;

$updater = mysql_query("update aldeias set madeira = $newmadeira, ouro = $newouro, ferro = $newferro, comida = $newcomida where ID = '$idvila'");
If($updater) {echo"Processing...<br>"; } else { echo "Error 904: Resources Update DB Error!";}







//Deleta o retorno.
$delret = "DELETE FROM retornos WHERE ID='$idret'";
$resultdelret = mysql_query($delret);
If($resultdelret) { echo"Done!<br>"; echo "<meta http-equiv='refresh' content='2; url=home.php'> ";} else { echo "Error 903: ret DB Error!";}






}}}}
?>
</b></center>