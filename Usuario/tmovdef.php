<?php
include "../validar_session.php";
include "../Config/config_sistema.php";
include "../Config/tropasdados.php";
include "padrao.php";
$iddef = $_POST['iddef'];

$consultatropme = mysql_query("select * from tropas where IDaldeia = '$id'");
	$linhatropme = mysql_num_rows($consultatropme);
while($linhatropme = mysql_fetch_object($consultatropme)) {
$consultatrop = mysql_query("select * from ataques where ID = '$iddef'");
	$linhatrop = mysql_num_rows($consultatrop);
while($linhatrop = mysql_fetch_object($consultatrop)) {

$povorem = $linhatrop->povorem;
$povome = $linhatrop->povodest;

$t1enemy = $linhatrop->t1;
$t2enemy = $linhatrop->t2;
$t3enemy = $linhatrop->t3;
$t4enemy = $linhatrop->t4;
$t5enemy = $linhatrop->t5;
$t6enemy = $linhatrop->t6;
$t7enemy = $linhatrop->t7;
$t8enemy = $linhatrop->t8;
$t9enemy = $linhatrop->t9;

$t1me = $linhatropme->t1;
$t2me = $linhatropme->t2;
$t3me = $linhatropme->t3;
$t4me = $linhatropme->t4;
$t5me = $linhatropme->t5;
$t6me = $linhatropme->t6;
$t7me = $linhatropme->t7;
$t8me = $linhatropme->t8;
$t9me = $linhatropme->t9;

function detect($unit){
global $povome, $linhatrop2, $linhatrop, $p1nome, $p2nome, $p3nome, $p4nome, $p5nome, $p6nome, $p7nome, $p8nome, $p9nome, $p10nome, $p11nome, $p12nome, $p13nome, $p14nome, $p15nome, $p999nome;
$povok = 1;
$unitk = 0;
//Traz as variaveis para a funcao.
while ($povok < 16) {
If ($unitk < 10) {
$ptrop = "p".$povok."nome";
$t = "t".$povok."".$unit."nome";
global $$t;
$unitk = $unitk + 1;
If ($unitk > 9) { $unitk = 1; }
}
$povok = $povok + 1;
}
//Da o echo.
$ptrop2 = "p".$povome."nome";
$t2 = "t".$povome."".$unit."nome";
echo $$t2;
}

function getunit($num){
global $login_usuario,$povome,$linhatropme;

$tt1 = "linhatropme";
$t1 = "t$num";
echo $$tt1->$t1;
}

?>
<center>
<table name="trop1" id="trop1" border="1" style=" background-color: white;" cellpadding="0" cellspacing="0">
<td align="center" colspan="9"><b>Attack the invaders!</b></td><tr>
<td align="center"><?php detect(1); ?></td><td align="center"><?php detect(2); ?></td><td align="center"><?php detect(3); ?></td><td align="center"><?php detect(4); ?></td><td align="center"><?php detect(5); ?></td><td align="center"><?php detect(6); ?></td><td align="center"><?php detect(7); ?></td><td align="center"><?php detect(8); ?></td><td align="center"><?php detect(9); ?></td></tr><tr>
<td align="center"><?php getunit(1);?></td><td align="center"><?php getunit(2);?></td><td align="center"><?php getunit(3);?></td><td align="center"><?php getunit(4);?></td><td align="center"><?php getunit(5);?></td><td align="center"><?php getunit(6);?></td><td align="center"><?php getunit(7);?></td><td align="center"><?php getunit(8);?></td><td align="center"><?php getunit(9);?></td></tr><tr>
<td align="center"><form action="tactiondef.php" target="_top" name="mt" id="mt"  method="post" enctype="multipart/form-data"><input type="hidden" name="iddef" id="iddef" value="<?php echo $iddef;?>"><input type="number" max="<?php getunit(1);?>" id="t1" name="t1" min="0"></td><td align="center"><input type="number" max="<?php getunit(2);?>" id="t2" name="t2" min="0"></td><td align="center"><input type="number" max="<?php getunit(3);?>" id="t3" name="t3" min="0"></td><td align="center"><input type="number" max="<?php getunit(4);?>" id="t4" name="t4" min="0"></td><td align="center"><input type="number" max="<?php getunit(5);?>" id="t5" name="t5" min="0"></td><td align="center"><input type="number" max="<?php getunit(6);?>" id="t6" name="t6" min="0"></td><td align="center"><input type="number" max="<?php getunit(7);?>" id="t7" name="t7" min="0"></td><td align="center"><input type="number" max="<?php getunit(8);?>" id="t8" name="t8" min="0"></td><td align="center"><input type="number" max="<?php getunit(9);?>" id="t9" name="t9" min="0"></td></tr><tr>
<td align="center" colspan="9"><input type="submit" value="Enviar Tropas!"></tr>
</table>
</center>
<?php

}}
?>