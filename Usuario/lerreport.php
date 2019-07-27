<?php
include "../validar_session.php";
include "../Config/tropasdados.php";
include "../Config/config_sistema.php";

// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");


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
<body>

<?php
include "menu1.php";
?>

<center>
<div id="msglinks" name="msglinks">
<center>
<a href="reports.php">Inbox</a>
</center>
</div>
</center>

<center>
<div id="caixadeentrada" name="caixadeentrada">
<div id="caracteristicas" name="caracteristicas">
<div id="remetente" name="remetente">
</div>
<center>

<hr width="100%">

<br>
</div>

<?php
$consulta3000 = mysql_query("select * from aldeias where dono = '$login_usuario'");
while($linha7 = mysql_fetch_object($consulta3000)) {
$ID = $linha7->ID;
}



$idreport = $_GET['id'];
$consulta = mysql_query("select * from relatorios where ID = '$idreport'");
while($linha = mysql_fetch_object($consulta)) {
$rem = $linha -> remetente;
$dest = $linha -> destino;
$povorem = $linha->povorem;
$povodest = $linha->povodest;
$t1 = $linha->t1;
$t2 = $linha->t2;
$t3 = $linha->t3;
$t4 = $linha->t4;
$t5 = $linha->t5;
$t6 = $linha->t6;
$t7 = $linha->t7;
$t8 = $linha->t8;
$t9 = $linha->t9;
$perdaa1 = $linha->t1p;
$perdaa2 = $linha->t2p;
$perdaa3 = $linha->t3p;
$perdaa4 = $linha->t4p;
$perdaa5 = $linha->t5p;
$perdaa6 = $linha->t6p;
$perdaa7 = $linha->t7p;
$perdaa8 = $linha->t8p;
$perdaa9 = $linha->t9p;
$sa1 = $linha->t1r;
$sa2 = $linha->t2r;
$sa3 = $linha->t3r;
$sa4 = $linha->t4r;
$sa5 = $linha->t5r;
$sa6 = $linha->t6r;
$sa7 = $linha->t7r;
$sa8 = $linha->t8r;
$sa9 = $linha->t9r;
$madeirarob = $linha->madeirarob;
$ourorob = $linha->ourorob;
$ferrorob = $linha->ferrorob;
$comidarob = $linha->comidarob;
$roubados = $linha->roubototal;
$roubo = $linha->roubomax;
$t1enemy = $linha->t1e;
$t2enemy = $linha->t2e;
$t3enemy = $linha->t3e;
$t4enemy = $linha->t4e;
$t5enemy = $linha->t5e;
$t6enemy = $linha->t6e;
$t7enemy = $linha->t7e;
$t8enemy = $linha->t8e;
$t9enemy = $linha->t9e;
$perdad1 = $linha->t1ep;
$perdad2 = $linha->t2ep;
$perdad3 = $linha->t3ep;
$perdad4 = $linha->t4ep;
$perdad5 = $linha->t5ep;
$perdad6 = $linha->t6ep;
$perdad7 = $linha->t7ep;
$perdad8 = $linha->t8ep;
$perdad9 = $linha->t9ep;
$sd1 = $linha->t1er;
$sd2 = $linha->t2er;
$sd3 = $linha->t3er;
$sd4 = $linha->t4er;
$sd5 = $linha->t5er;
$sd6 = $linha->t6er;
$sd7 = $linha->t7er;
$sd8 = $linha->t8er;
$sd9 = $linha->t9er;
$viewer = $linha->visualisador;

If($linha->visto=="nao"){
$updatevisto = mysql_query("update relatorios set visto = 'sim' where ID = '$idreport'");
}

If ($viewer == $ID) {
function getname($unit){
global $povoname, $tropaname, $povorem, $p1nome, $p2nome, $p3nome, $p4nome, $p5nome, $p6nome, $p7nome, $p8nome, $p9nome, $p10nome, $p11nome, $p12nome, $p13nome, $p14nome, $p15nome, $p999nome;
//Traz as variaveis para a funcao.
$p = "p".$povorem."nome";
$t = "t".$povorem."".$unit."nome";
global $$t;
$povoname = $$p;
$tropaname = $$t;
}
function getname2($unit){
global $povoname2, $tropaname2, $povodest, $p1nome, $p2nome, $p3nome, $p4nome, $p5nome, $p6nome, $p7nome, $p8nome, $p9nome, $p10nome, $p11nome, $p12nome, $p13nome, $p14nome, $p15nome, $p999nome;
$p2 = "p".$povodest."nome";
$t2 = "t".$povodest."".$unit."nome";
global $$t2;
$povoname2 = $$p2;
$tropaname2 = $$t2;
}?>

<?php If($linha->type == "ataquefeito"){ ?>
<table border='1' cellspacing='0' bgcolor='white' style="font-weight:bold;">
<td colspan='9' align="center" bgcolor="#98FB98"><font color='green'><b>Your Troops</b></font><br></td><tr>
<td align="center"><?php getname(1); echo $tropaname;?></td><td align="center"><?php getname(2); echo $tropaname;?></td><td align="center"><?php getname(3); echo $tropaname;?></td><td align="center"><?php getname(4); echo $tropaname;?></td><td align="center"><?php getname(5); echo $tropaname;?></td><td align="center"><?php getname(6); echo $tropaname;?></td><td align="center"><?php getname(7); echo $tropaname;?></td><td align="center"><?php getname(8); echo $tropaname;?></td><td align="center"><?php getname(9); echo $tropaname;?></td></tr><tr>
<td align="center"><font color="#696969"><?php echo $t1; ?></font></td><td align="center"><font color="#696969"><?php echo $t2; ?></font></td><td align="center"><font color="#696969"><?php echo $t3; ?></font></td><td align="center"><font color="#696969"><?php echo $t4; ?></font></td><td align="center"><font color="#696969"><?php echo $t5; ?></font></td><td align="center"><font color="#696969"><?php echo $t6; ?></font></td><td align="center"><font color="#696969"><?php echo $t7; ?></font></td><td align="center"><font color="#696969"><?php echo $t8; ?></font></td><td align="center"><font color="#696969"><?php echo $t9; ?></font></td></tr><tr>
<td align="center"><font color="#FF0000"><?php echo $perdaa1; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa2; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa3; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa4; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa5; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa6; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa7; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa8; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa9; ?></font></td></tr><tr>
<td align="center"><?php echo $sa1; ?></td><td align="center"><?php echo $sa2; ?></td><td align="center"><?php echo $sa3; ?></td><td align="center"><?php echo $sa4; ?></td><td align="center"><?php echo $sa5; ?></td><td align="center"><?php echo $sa6; ?></td><td align="center"><?php echo $sa7; ?></td><td align="center"><?php echo $sa8; ?></td><td align="center"><?php echo $sa9; ?></td></tr><tr>
<td align="center" colspan="9" bgcolor="#BEBEBE" style=" text-shadow: -1px 0 1px black, 0 1px 1px black, 1px 0 1px black, 0 -1px 1px black;"><font color="white">Resources:</font>&nbsp&nbsp&nbsp<font color="#F5DEB3"><?php echo $madeirarob."&nbsp";?><img src="../img/madeira.bmp"></font>&nbsp&nbsp&nbsp<font color="#FFD700"><?php echo $ourorob."&nbsp";?><img src="../img/ouro.bmp"></font>&nbsp&nbsp&nbsp<font color="#D3D3D3"><?php echo $ferrorob."&nbsp";?><img src="../img/ferro.bmp"></font>&nbsp&nbsp&nbsp<font color="#B22222"><?php echo $comidarob."&nbsp";?><img src="../img/comida.bmp"></font><font color="white"> <?php echo $roubados."/".$roubo;?></font></td></tr>
</table>
<br><br>

<table border='1' cellspacing='0' bgcolor='white' style="font-weight:bold;">
<td colspan='9' align="center" bgcolor="#FA8072"><font color='#FF0000'><b>Enemy Troops</b></font><br></td><tr>
<td align="center"><?php getname2(1); echo $tropaname2;?></td><td align="center"><?php getname2(2); echo $tropaname2;?></td><td align="center"><?php getname2(3); echo $tropaname2;?></td><td align="center"><?php getname2(4); echo $tropaname2;?></td><td align="center"><?php getname2(5); echo $tropaname2;?></td><td align="center"><?php getname2(6); echo $tropaname2;?></td><td align="center"><?php getname2(7); echo $tropaname2;?></td><td align="center"><?php getname2(8); echo $tropaname2;?></td><td align="center"><?php getname2(9); echo $tropaname2;?></td></tr><tr>
<td align="center"><font color="#696969"><?php echo $t1enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t2enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t3enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t4enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t5enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t6enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t7enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t8enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t9enemy; ?></font></td></tr><tr>
<td align="center"><font color="#FF0000"><?php echo $perdad1; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad2; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad3; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad4; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad5; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad6; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad7; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad8; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad9; ?></font></td></tr><tr>
<td align="center"><?php echo $sd1; ?></td><td align="center"><?php echo $sd2; ?></td><td align="center"><?php echo $sd3; ?></td><td align="center"><?php echo $sd4; ?></td><td align="center"><?php echo $sd5; ?></td><td align="center"><?php echo $sd6; ?></td><td align="center"><?php echo $sd7; ?></td><td align="center"><?php echo $sd8; ?></td><td align="center"><?php echo $sd9; ?></td></tr>
</table>
<?php } else { ?>
<table border='1' cellspacing='0' bgcolor='white' style="font-weight:bold;">
<td colspan='9' align="center" bgcolor="#FA8072"><font color='#FF0000'><b>Enemy Troops</b></font><br></td><tr>
<td align="center"><?php getname(1); echo $tropaname;?></td><td align="center"><?php getname(2); echo $tropaname;?></td><td align="center"><?php getname(3); echo $tropaname;?></td><td align="center"><?php getname(4); echo $tropaname;?></td><td align="center"><?php getname(5); echo $tropaname;?></td><td align="center"><?php getname(6); echo $tropaname;?></td><td align="center"><?php getname(7); echo $tropaname;?></td><td align="center"><?php getname(8); echo $tropaname;?></td><td align="center"><?php getname(9); echo $tropaname;?></td></tr><tr>
<td align="center"><font color="#696969"><?php echo $t1; ?></font></td><td align="center"><font color="#696969"><?php echo $t2; ?></font></td><td align="center"><font color="#696969"><?php echo $t3; ?></font></td><td align="center"><font color="#696969"><?php echo $t4; ?></font></td><td align="center"><font color="#696969"><?php echo $t5; ?></font></td><td align="center"><font color="#696969"><?php echo $t6; ?></font></td><td align="center"><font color="#696969"><?php echo $t7; ?></font></td><td align="center"><font color="#696969"><?php echo $t8; ?></font></td><td align="center"><font color="#696969"><?php echo $t9; ?></font></td></tr><tr>
<td align="center"><font color="#FF0000"><?php echo $perdaa1; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa2; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa3; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa4; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa5; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa6; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa7; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa8; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa9; ?></font></td></tr><tr>
<td align="center"><?php echo $sa1; ?></td><td align="center"><?php echo $sa2; ?></td><td align="center"><?php echo $sa3; ?></td><td align="center"><?php echo $sa4; ?></td><td align="center"><?php echo $sa5; ?></td><td align="center"><?php echo $sa6; ?></td><td align="center"><?php echo $sa7; ?></td><td align="center"><?php echo $sa8; ?></td><td align="center"><?php echo $sa9; ?></td></tr><tr>
<td align="center" colspan="9" bgcolor="#BEBEBE" style=" text-shadow: -1px 0 1px black, 0 1px 1px black, 1px 0 1px black, 0 -1px 1px black;"><font color="white">Resources:</font>&nbsp&nbsp&nbsp<font color="#F5DEB3"><?php echo $madeirarob."&nbsp";?><img src="../img/madeira.bmp"></font>&nbsp&nbsp&nbsp<font color="#FFD700"><?php echo $ourorob."&nbsp";?><img src="../img/ouro.bmp"></font>&nbsp&nbsp&nbsp<font color="#D3D3D3"><?php echo $ferrorob."&nbsp";?><img src="../img/ferro.bmp"></font>&nbsp&nbsp&nbsp<font color="#B22222"><?php echo $comidarob."&nbsp";?><img src="../img/comida.bmp"></font><font color="white"> <?php echo $roubados."/".$roubo;?></font></td></tr>
</table>
<br><br>

<table border='1' cellspacing='0' bgcolor='white' style="font-weight:bold;">
<td colspan='9' align="center" bgcolor="#98FB98"><font color='green'><b>Your Troops</b></font><br></td><tr>
<td align="center"><?php getname2(1); echo $tropaname2;?></td><td align="center"><?php getname2(2); echo $tropaname2;?></td><td align="center"><?php getname2(3); echo $tropaname2;?></td><td align="center"><?php getname2(4); echo $tropaname2;?></td><td align="center"><?php getname2(5); echo $tropaname2;?></td><td align="center"><?php getname2(6); echo $tropaname2;?></td><td align="center"><?php getname2(7); echo $tropaname2;?></td><td align="center"><?php getname2(8); echo $tropaname2;?></td><td align="center"><?php getname2(9); echo $tropaname2;?></td></tr><tr>
<td align="center"><font color="#696969"><?php echo $t1enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t2enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t3enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t4enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t5enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t6enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t7enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t8enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t9enemy; ?></font></td></tr><tr>
<td align="center"><font color="#FF0000"><?php echo $perdad1; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad2; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad3; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad4; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad5; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad6; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad7; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad8; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad9; ?></font></td></tr><tr>
<td align="center"><?php echo $sd1; ?></td><td align="center"><?php echo $sd2; ?></td><td align="center"><?php echo $sd3; ?></td><td align="center"><?php echo $sd4; ?></td><td align="center"><?php echo $sd5; ?></td><td align="center"><?php echo $sd6; ?></td><td align="center"><?php echo $sd7; ?></td><td align="center"><?php echo $sd8; ?></td><td align="center"><?php echo $sd9; ?></td></tr>
</table>
<?php } ?>


<?php
} else {
echo"<center><b>You cannot see this report!</b></center>";


}}
?>








</div>



</div>





</center>

</body>
</html>