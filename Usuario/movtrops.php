<?php
include"padrao.php";
include "../Config/tropasdados.php";
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];
$t4 = $_POST['t4'];
$t5 = $_POST['t5'];
$t6 = $_POST['t6'];
$t7 = $_POST['t7'];
$t8 = $_POST['t8'];
$t9 = $_POST['t9'];
$x = $_POST['x'];
$y = $_POST['y'];





$consultatrop = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linhatrop = mysql_num_rows($consultatrop);
while($linhatrop = mysql_fetch_object($consultatrop)) {
$consultatrop2 = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	$linhatrop2 = mysql_num_rows($consultatrop2);
while($linhatrop2 = mysql_fetch_object($consultatrop2)) {
$consultatropE = mysql_query("select * from tropas where dono = '$login_usuario'");
	$linhatropE = mysql_num_rows($consultatropE);
while($linhatropC = mysql_fetch_object($consultatropE)) {
$povo = $linhatrop2->povo;
$xa = $linhatrop->x;
$ya = $linhatrop->y;
$aa = pow(($x-$xa),2) + pow(($y-$ya),2);
$dist = sqrt($aa);

function detect($unit){
global $linhatrop2, $linhatrop, $p1nome, $p2nome, $p3nome, $p4nome, $p5nome, $p6nome, $p7nome, $p8nome, $p9nome, $p10nome, $p11nome, $p12nome, $p13nome, $p14nome, $p15nome, $p999nome, $t11nome, $t12nome, $t13nome, $t14nome, $t15nome, $t16nome, $t17nome, $t18nome, $t19nome, $t21nome, $t22nome, $t23nome, $t24nome, $t25nome, $t26nome, $t27nome, $t28nome, $t29nome;
$povo = $linhatrop2->povo;
$ptrop = "p".$povo."nome";
$t = "t".$povo."".$unit."nome";
echo $$t;
}

function getunit($num){
global $login_usuario,$povo,$linhatropC;

$tt1 = "linhatropC";
$t1 = "t$povo$num";
echo $$tt1->$t1;}

function mostrar($issu) {
$lol = $issu;
If ($issu>0) {
} else { $lol = "0";}
echo $lol;

}
?>
<center>
<table name="trop1" id="trop1" border="1" style=" background-color: white;" cellpadding="0" cellspacing="0">
<td align="center" colspan="9"><b>Confirmação</b></td><tr>
<td align="center"><?php detect(1); ?></td><td align="center"><?php detect(2); ?></td><td align="center"><?php detect(3); ?></td><td align="center"><?php detect(4); ?></td><td align="center"><?php detect(5); ?></td><td align="center"><?php detect(6); ?></td><td align="center"><?php detect(7); ?></td><td align="center"><?php detect(8); ?></td><td align="center"><?php detect(9); ?></td></tr><tr>
<td align="center"><?php mostrar($t1);?></td><td align="center"><?php mostrar($t2);?></td><td align="center"><?php mostrar($t3);?></td><td align="center"><?php mostrar($t4);?></td><td align="center"><?php mostrar($t5);?></td><td align="center"><?php mostrar($t6);?></td><td align="center"><?php mostrar($t7);?></td><td align="center"><?php mostrar($t8);?></td><td align="center"><?php mostrar($t9);?></td></tr><tr>
<td align="center" colspan="9"><form action="movtropscript.php" target="_top" name="mt" id="mt"  method="post" enctype="multipart/form-data"><input type="hidden" name="t1" value="<?php echo $t1;?>"><input type="hidden" name="t2" value="<?php echo $t2;?>"><input type="hidden" name="t3" value="<?php echo $t3;?>"><input type="hidden" name="t4" value="<?php echo $t4;?>"><input type="hidden" name="t5" value="<?php echo $t5;?>"><input type="hidden" name="t6" value="<?php echo $t6;?>"><input type="hidden" name="t7" value="<?php echo $t7;?>"><input type="hidden" name="t8" value="<?php echo $t8;?>"><input type="hidden" name="t9" value="<?php echo $t9;?>"><input type="hidden" name="x" value="<?php echo $x;?>"><input type="hidden" name="y" value="<?php echo $y;?>"></td></tr><tr>
<td align="center" colspan="9"><br><br><b>Coordenadas do destino</b></td></tr><tr>
<td align="center" colspan="9">X:<input type="number" value="<?php echo $x; ?>" id="x" name="x" disabled>Y:<input type="number" value="<?php echo $y; ?>" id="y" name="y" disabled></td></tr><tr>
<td align="center" colspan="9"><input type="submit" value="Enviar Tropas!"></tr>
</table>

</table>
</center>






<?php
}}}

?>













