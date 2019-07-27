<?php

include "../Config/config_sistema.php";

include "../validar_session.php";

include "../Config/tropasdados.php";

include "../engine/recursos.php";

include "adfly.php";



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







</head>




<?php
include "menu1.php";
?>






<center>
<div id="aldeiapop" name="aldeiapop">
<table border="1">
<tr>
<td>
<?php
while($linha = mysql_fetch_object($consulta)) {
$showvila = $linha->gview;
	
?>

<?php



$consulta3000 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha5 = mysql_num_rows($consulta3000);
	if($linha5 != 0) {

while($linha7 = mysql_fetch_object($consulta3000)) {


echo "<center><b>ID: ".$linha7->ID."</b></center>";
?>
</td>
<td>
<?php
echo "<center><b>Village: ".$linha7->nome."</b></center>";
?>
</td>
<td>
<?php
echo "<center><b>Population: $linha7->popdisponivel  / ".$linha7->pop."</b></center>";



}


	} else {
		echo "<br>You don't have a village!<br>";
	}








?>









</td>
</tr>
</table>
</div>




</center>

<?php
	if($linha5 != 0) {

echo '
<div id="linkr" name="linkr" style="height: 8%; width: 20%;">
<a href="recursos.php"><img src="../img/flamular.png" style="height: 100%; width: 100%;"></a>
</div>

<div id="linkespadas" name="linkespadas" style="height: 8%; width: 20%;">
<a href="quarteled.php"><img src="../img/flamulaespada.png" style="height: 100%; width: 100%;"></a>
</div>

<div id="linkmartelo" name="linkmartelo" style="height: 8%; width: 20%;">
<a href="construir.php"><img src="../img/flamulamartelo.png" style="height: 100%; width: 100%;"></a>
</div>


<div id="linkest" name="linkest" style="height: 8%; width: 20%;">
<a href="rank.php"><img src="../img/flamulaest.png" style="height: 100%; width: 100%;"></a>
</div>

<div id="linkmov" name="linkmov" style="height: 8%; width: 20%;">
<a href="tmov.php"><img src="../img/flamulamov.png" style="height: 100%; width: 100%;"></a>
</div>';?>




<br>
<center>
<div id="vila" name="vila" class="vila">

<?php
$consulta3001 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha51 = mysql_num_rows($consulta3001);
while($linha71 = mysql_fetch_object($consulta3001)) {


If ($showvila == 1) {
include "vila.php";
} else {
?>
<table border="0" cellspacing="0" cellpadding="2" style="border-color: #DCDCDC;background-image: URL(../img/table.png); background-size: 100% 100%; ">
<td align="center"><b>Building</b></td><td align="center"><b>Level</b></td><tr>
<td align="center"><b>Main Building</b></td><td align="center"><b><?php echo $linha71->edcentralnv;?></b></td><tr>
<td align="center"><b>Warehouse</b></td><td align="center"><b><?php echo $linha71->armazemnv;?></b></td></tr><tr>
<td align="center"><b>Food Warehouse</b></td><td align="center"><b><?php echo $linha71->galpaonv;?></b></td></tr><tr>
<td align="center"><b>Barracks</b></td><td align="center"><b><?php echo $linha71->quartelnv;?></b></td></tr><tr>
<td align="center"><b>Stable</b></td><td align="center"><font color="#FF4500"><b>0</b><font></td></tr><tr>
<td align="center"><b>Offensive Arsenal</b></td><td align="center"><font color="#FF4500"><b>0</b><font></td></tr><tr>
<td align="center"><b>Defensive Arsenal</b></td><td align="center"><font color="#FF4500"><b>0</b><font></td></tr><tr>
<td align="center"><b>Market</b></td><td align="center"><font color="#FF4500"><b>0</b><font></td></tr><tr>
<td align="center"><b>Wall</b></td><td align="center"><font color="#FF4500"><b>0</b><font></td></tr><tr>
<td align="center"><b>Embassy</b></td><td align="center"><font color="#FF4500"><b>0</b><font></td></tr><tr>
<td align="center"><b>Economic Research Center</b></td><td align="center"><font color="#FF4500"><b>0</b><font></td></tr><tr>
<td align="center"><b>Academy</b></td><td align="center"><font color="#FF4500"><b>0</b><font></td></tr><tr>
<td align="center"><b>Geographical Research Center</b></td><td align="center"><font color="#FF4500"><b>0</b><font></td></tr><tr>
</table>
<?php
}}?>


</div>

</center>




<?php

echo '</center> 

';
$consulta3000w = mysql_query("select * from tropas where dono = '$login_usuario'");	$linha5w = mysql_num_rows($consulta3000w); while($linha5w = mysql_fetch_object($consulta3000w)) { $povo = $linha->povo;



$nome1 = "t".$povolocal."1nome";
$nome2 = "t".$povolocal."2nome";
$nome3 = "t".$povolocal."3nome";
$nome4 = "t".$povolocal."4nome";
$nome5 = "t".$povolocal."5nome";
$nome6 = "t".$povolocal."6nome";
$nome7 = "t".$povolocal."7nome";
$nome8 = "t".$povolocal."8nome";
$nome9 = "t".$povolocal."9nome";
?>
<center>
<div>
<center>
<table border="1" style="background-image: URL(../img/bgt3.png); background-size: 100% 100%;">

<td align="center"><b>Troops</b></td><td align="center"><?php echo $$nome1; ?></td><td align="center"><?php echo $$nome2; ?></td><td align="center"><?php echo $$nome3; ?></td><td align="center"><?php echo $$nome4; ?></td><td align="center"><?php echo $$nome5; ?></td><td align="center"><?php echo $$nome6; ?></td><td align="center"><?php echo $$nome7; ?></td><td align="center"><?php echo $$nome8; ?></td><td align="center"><?php echo $$nome9; ?></td>
<tr>
<td align="center"><b>Amount</b></td><td align="center"><?php echo $linha5w->t1; ?></td><td align="center"><?php echo $linha5w->t2; ?></td><td align="center"><?php echo $linha5w->t3; ?></td><td align="center"><?php echo $linha5w->t4; ?></td><td align="center"><?php echo $linha5w->t5; ?></td><td align="center"><?php echo $linha5w->t6; ?></td><td align="center"><?php echo $linha5w->t7; ?></td><td align="center"><?php echo $linha5w->t8; ?></td><td align="center"><?php echo $linha5w->t9; ?></td>
</table>
</center>
</div>









</center>
<?php

}} else {

echo '
<center><div style="background-color: white; border-style: solid; border-width: 1; width: 30%;">
<b>Click <a href="dados_usuario.php">HERE</a> to create a village!</b></div>
</center>';

}}


?>




</body>
</html>