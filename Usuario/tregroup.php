
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
$b1 = "t".$povo."1";
$b2 = "t".$povo."2";
$b3 = "t".$povo."3";
$b4 = "t".$povo."4";
$b5 = "t".$povo."5";
$b6 = "t".$povo."6";
$b7 = "t".$povo."7";
$b8 = "t".$povo."8";
$b9 = "t".$povo."9";

$newt1 = $linhat2->t1 + $linhat->$b1;
$newt2 = $linhat2->t2 + $linhat->$b2;
$newt3 = $linhat2->t3 + $linhat->$b3;
$newt4 = $linhat2->t4 + $linhat->$b4;
$newt5 = $linhat2->t5 + $linhat->$b5;
$newt6 = $linhat2->t6 + $linhat->$b6;
$newt7 = $linhat2->t7 + $linhat->$b7;
$newt8 = $linhat2->t8 + $linhat->$b8;
$newt9 = $linhat2->t9 + $linhat->$b9;

$updatet = mysql_query("update tropas set $b1 = $newt1, $b2 = $newt2, $b3 = $newt3, $b4 = $newt4, $b5 = $newt5, $b6 = $newt6, $b7 = $newt7, $b8 = $newt8, $b9 = $newt9   where IDaldeia = '$idvila'");
If($updatet) { echo"Processing...<br>";} else { echo "Error 901: Troop Send* DB Error!";}





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