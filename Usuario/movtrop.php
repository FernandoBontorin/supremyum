<?php
include "../validar_session.php";
include "../Config/config_sistema.php";
include "../Config/tropasdados.php";
include "padrao.php";

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
$xb = $_GET['xb'];
$yb = $_GET['yb'];
$aa = pow(($xb-$xa),2) + pow(($yb-$ya),2);
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
echo $$tt1->$t1;


}
?>
<center>
<table name="trop1" id="trop1" border="1" style=" background-color: white;" cellpadding="0" cellspacing="0">
<td align="center" colspan="9"><b>Enviar Tropas</b></td><tr>
<td align="center"><?php detect(1); ?></td><td align="center"><?php detect(2); ?></td><td align="center"><?php detect(3); ?></td><td align="center"><?php detect(4); ?></td><td align="center"><?php detect(5); ?></td><td align="center"><?php detect(6); ?></td><td align="center"><?php detect(7); ?></td><td align="center"><?php detect(8); ?></td><td align="center"><?php detect(9); ?></td></tr><tr>
<td align="center"><?php getunit(1);?></td><td align="center"><?php getunit(2);?></td><td align="center"><?php getunit(3);?></td><td align="center"><?php getunit(4);?></td><td align="center"><?php getunit(5);?></td><td align="center"><?php getunit(6);?></td><td align="center"><?php getunit(7);?></td><td align="center"><?php getunit(8);?></td><td align="center"><?php getunit(9);?></td></tr><tr>
<td align="center"><form action="movtrops.php" target="_top" name="mt" id="mt"  method="post" enctype="multipart/form-data"><input type="number" max="<?php getunit(1);?>" id="t1" name="t1" min="0"></td><td align="center"><input type="number" max="<?php getunit(2);?>" id="t2" name="t2" min="0"></td><td align="center"><input type="number" max="<?php getunit(3);?>" id="t3" name="t3" min="0"></td><td align="center"><input type="number" max="<?php getunit(4);?>" id="t4" name="t4" min="0"></td><td align="center"><input type="number" max="<?php getunit(5);?>" id="t5" name="t5" min="0"></td><td align="center"><input type="number" max="<?php getunit(6);?>" id="t6" name="t6" min="0"></td><td align="center"><input type="number" max="<?php getunit(7);?>" id="t7" name="t7" min="0"></td><td align="center"><input type="number" max="<?php getunit(8);?>" id="t8" name="t8" min="0"></td><td align="center"><input type="number" max="<?php getunit(9);?>" id="t9" name="t9" min="0"></td></tr><tr>
<td align="center" colspan="9"><br><br><b>Coordenadas do destino</b></td></tr><tr>
<td align="center" colspan="9">X:<input type="number" value="<?php echo $xb; ?>" id="x" name="x">Y:<input type="number" value="<?php echo $yb; ?>" id="y" name="y"></td></tr><tr>
<td align="center" colspan="9"><input type="submit" value="Enviar Tropas!"></tr>
</table>

</table>
</center>






<?php
}}}

?>