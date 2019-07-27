<?php
include "padrao.php";
include "../Config/tropasdados.php";
$iddef = $_POST['iddef'];
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];
$t4 = $_POST['t4'];
$t5 = $_POST['t5'];
$t6 = $_POST['t6'];
$t7 = $_POST['t7'];
$t8 = $_POST['t8'];
$t9 = $_POST['t9'];

If ($t1 + $t2 + $t3 + $t4 + $t5 + $t6 + $t7 + $t8 + $t9 == 0) {
echo "<center><b>Error! You have selected no troops!</b></center><meta http-equiv='refresh' content='1;url=home.php'>";
} else {
$consultadef = mysql_query("select * from ataques where ID = '$iddef'");
$linhadef = mysql_num_rows($consultadef);
while($linhadef = mysql_fetch_object($consultadef)) {
$t1enemy = $linhadef->t1;
$t2enemy = $linhadef->t2;
$t3enemy = $linhadef->t3;
$t4enemy = $linhadef->t4;
$t5enemy = $linhadef->t5;
$t6enemy = $linhadef->t6;
$t7enemy = $linhadef->t7;
$t8enemy = $linhadef->t8;
$t9enemy = $linhadef->t9;
$povome = $linhadef->povodest;
$povodest = $linhadef->povorem;
@$tempofinal = $linhadef->tempofinal;
$meuid = $linhadef->destino;
//Anti-Cheat.
$consultati = mysql_query("select * from config where time");
$linhati = mysql_num_rows($consultati);
while($linhati = mysql_fetch_object($consultati)) {
$timenow = $linhati->time;
$checktime = $timenow - $tempofinal;
If ($checktime < 0) {
echo "The troops have not arrived yet!";
exit();
} else {};
//Fim do Anti-Cheat.

$fclt1 = "t".$povome."1atk";
$fclt2 = "t".$povome."2atk";
$fclt3 = "t".$povome."3atk";
$fclt4 = "t".$povome."4atk";
$fclt5 = "t".$povome."5atk";
$fclt6 = "t".$povome."6atk";
$fclt7 = "t".$povome."7atk";
$fclt8 = "t".$povome."8atk";
$fclt9 = "t".$povome."9atk";

$atktotali = $t1 * $$fclt1 + $t2 * $$fclt2 + $t3 * $$fclt3 + $t4 * $$fclt4;
$atktotalc = $t5 * $$fclt5 + $t6 * $$fclt6 + $t7 * $$fclt7;
$atktotalcerco =  $t8 * $$fclt8 + $t9 * $$fclt9;
$atktudo = $atktotali + $atktotalc + $atktotalcerco;

$porcentagematki = ($atktotali / $atktudo);
$porcentagematkc = ($atktotalc / $atktudo);
$porcentagematkcerco = ($atktotalcerco / $atktudo);


$fclt1di = "t".$povodest."1defi";
$fclt2di = "t".$povodest."2defi";
$fclt3di = "t".$povodest."3defi";
$fclt4di = "t".$povodest."4defi";
$fclt5di = "t".$povodest."5defi";
$fclt6di = "t".$povodest."6defi";
$fclt7di = "t".$povodest."7defi";
$fclt8di = "t".$povodest."8defi";
$fclt9di = "t".$povodest."9defi";
$fclt1dc = "t".$povodest."1defc";
$fclt2dc = "t".$povodest."2defc";
$fclt3dc = "t".$povodest."3defc";
$fclt4dc = "t".$povodest."4defc";
$fclt5dc = "t".$povodest."5defc";
$fclt6dc = "t".$povodest."6defc";
$fclt7dc = "t".$povodest."7defc";
$fclt8dc = "t".$povodest."8defc";
$fclt9dc = "t".$povodest."9defc";
$fclt1dcerco = "t".$povodest."1defcerco";
$fclt2dcerco = "t".$povodest."2defcerco";
$fclt3dcerco = "t".$povodest."3defcerco";
$fclt4dcerco = "t".$povodest."4defcerco";
$fclt5dcerco = "t".$povodest."5defcerco";
$fclt6dcerco = "t".$povodest."6defcerco";
$fclt7dcerco = "t".$povodest."7defcerco";
$fclt8dcerco = "t".$povodest."8defcerco";
$fclt9dcerco = "t".$povodest."9defcerco";


$deftotali = $t1enemy * $$fclt1di + $t2enemy * $$fclt2di + $t3enemy * $$fclt3di + $t4enemy * $$fclt4di + $t5enemy * $$fclt5di + $t6enemy * $$fclt6di + $t7enemy * $$fclt7di + $t8enemy * $$fclt8di + $t9enemy * $$fclt9di;
$deftotalc = $t1enemy * $$fclt1dc + $t2enemy * $$fclt2dc + $t3enemy * $$fclt3dc + $t4enemy * $$fclt4dc + $t5enemy * $$fclt5dc + $t6enemy * $$fclt6dc + $t7enemy * $$fclt7dc + $t8enemy * $$fclt8dc + $t9enemy * $$fclt9dc;
$deftotalcerco = $t1enemy * $$fclt1dcerco + $t2enemy * $$fclt2dcerco + $t3enemy * $$fclt3dcerco + $t4enemy * $$fclt4dcerco + $t5enemy * $$fclt5dcerco + $t6enemy * $$fclt6dcerco + $t7enemy * $$fclt7dcerco + $t8enemy * $$fclt8dcerco + $t9enemy * $$fclt9dcerco;
$deftudo = $deftotali + $deftotalc + $deftotalcerco;



$atkbtl = $atktudo;
$defbtl0 = $deftotali * $porcentagematki + $deftotalc * $porcentagematkc + $deftotalcerco * $porcentagematkcerco;
$defbtl = intval($defbtl0);


//Calcular perdas atk.
If ($atkbtl > $defbtl) {
$perdaatk = $defbtl/$atkbtl;
$perdadef = 1;
}

If ($atkbtl < $defbtl) {
$perdaatk = 1;
$perdadef = $atkbtl/$defbtl;
}

If ($atkbtl == $defbtl) {
$perdaatk = 1;
$perdadef = 1;
}

$perdaa1f = $t1 * $perdaatk;
$perdaa1 = intval($perdaa1f);
$perdaa2f = $t2 * $perdaatk;
$perdaa2 = intval($perdaa2f);
$perdaa3f = $t3 * $perdaatk;
$perdaa3 = intval($perdaa3f);
$perdaa4f = $t4 * $perdaatk;
$perdaa4 = intval($perdaa4f);
$perdaa5f = $t5 * $perdaatk;
$perdaa5 = intval($perdaa5f);
$perdaa6f = $t6 * $perdaatk;
$perdaa6 = intval($perdaa6f);
$perdaa7f = $t7 * $perdaatk;
$perdaa7 = intval($perdaa7f);
$perdaa8f = $t8 * $perdaatk;
$perdaa8 = intval($perdaa8f);
$perdaa9f = $t9 * $perdaatk;
$perdaa9 = intval($perdaa9f);


//Calcular perdas def.
$perdad1f = $t1enemy * $perdadef;
$perdad1 = intval($perdad1f);
$perdad2f = $t2enemy * $perdadef;
$perdad2 = intval($perdad2f);
$perdad3f = $t3enemy * $perdadef;
$perdad3 = intval($perdad3f);
$perdad4f = $t4enemy * $perdadef;
$perdad4 = intval($perdad4f);
$perdad5f = $t5enemy * $perdadef;
$perdad5 = intval($perdad5f);
$perdad6f = $t6enemy * $perdadef;
$perdad6 = intval($perdad6f);
$perdad7f = $t7enemy * $perdadef;
$perdad7 = intval($perdad7f);
$perdad8f = $t8enemy * $perdadef;
$perdad8 = intval($perdad8f);
$perdad9f = $t9enemy * $perdadef;
$perdad9 = intval($perdad9f);



//Sobras atk.
$sa1 = $t1 - $perdaa1;
$sa2 = $t2 - $perdaa2;
$sa3 = $t3 - $perdaa3;
$sa4 = $t4 - $perdaa4;
$sa5 = $t5 - $perdaa5;
$sa6 = $t6 - $perdaa6;
$sa7 = $t7 - $perdaa7;
$sa8 = $t8 - $perdaa8;
$sa9 = $t9 - $perdaa9;




//Sobras def.
$sd1 = $t1enemy - $perdad1;
$sd2 = $t2enemy - $perdad2;
$sd3 = $t3enemy - $perdad3;
$sd4 = $t4enemy - $perdad4;
$sd5 = $t5enemy - $perdad5;
$sd6 = $t6enemy - $perdad6;
$sd7 = $t7enemy - $perdad7;
$sd8 = $t8enemy - $perdad8;
$sd9 = $t9enemy - $perdad9;

function getname($unit){
global $povoname, $tropaname, $povome, $p1nome, $p2nome, $p3nome, $p4nome, $p5nome, $p6nome, $p7nome, $p8nome, $p9nome, $p10nome, $p11nome, $p12nome, $p13nome, $p14nome, $p15nome, $p999nome;
//Traz as variaveis para a funcao.
$p = "p".$povome."nome";
$t = "t".$povome."".$unit."nome";
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
}
?>

<center>
<br>
<table border='1' cellspacing='0' bgcolor='white' style="font-weight:bold;">
<td colspan='9' align="center" bgcolor="#98FB98"><font color='green'><b>Your Troops</b></font><br><b><?php echo $atktotali."&nbsp"; ?><img src="../img/infant.png"><?php echo"&nbsp&nbsp&nbsp&nbsp&nbsp".$atktotalc."&nbsp"; ?><img src="../img/cav.png"><?php echo"&nbsp&nbsp&nbsp&nbsp&nbsp".$atktotalcerco."&nbsp"; ?><img src="../img/cerco.png">
<br><?php echo $atktudo;?></b></td><tr>
<td align="center"><?php getname(1); echo $tropaname;?></td><td align="center"><?php getname(2); echo $tropaname;?></td><td align="center"><?php getname(3); echo $tropaname;?></td><td align="center"><?php getname(4); echo $tropaname;?></td><td align="center"><?php getname(5); echo $tropaname;?></td><td align="center"><?php getname(6); echo $tropaname;?></td><td align="center"><?php getname(7); echo $tropaname;?></td><td align="center"><?php getname(8); echo $tropaname;?></td><td align="center"><?php getname(9); echo $tropaname;?></td></tr><tr>
<td align="center"><font color="#696969"><?php echo $t1; ?></font></td><td align="center"><font color="#696969"><?php echo $t2; ?></font></td><td align="center"><font color="#696969"><?php echo $t3; ?></font></td><td align="center"><font color="#696969"><?php echo $t4; ?></font></td><td align="center"><font color="#696969"><?php echo $t5; ?></font></td><td align="center"><font color="#696969"><?php echo $t6; ?></font></td><td align="center"><font color="#696969"><?php echo $t7; ?></font></td><td align="center"><font color="#696969"><?php echo $t8; ?></font></td><td align="center"><font color="#696969"><?php echo $t9; ?></font></td></tr><tr>
<td align="center"><font color="#FF0000"><?php echo $perdaa1; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa2; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa3; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa4; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa5; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa6; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa7; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa8; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdaa9; ?></font></td></tr><tr>
<td align="center"><?php echo $sa1; ?></td><td align="center"><?php echo $sa2; ?></td><td align="center"><?php echo $sa3; ?></td><td align="center"><?php echo $sa4; ?></td><td align="center"><?php echo $sa5; ?></td><td align="center"><?php echo $sa6; ?></td><td align="center"><?php echo $sa7; ?></td><td align="center"><?php echo $sa8; ?></td><td align="center"><?php echo $sa9; ?></td></tr><tr>
</table>

<br><br>

<table border='1' cellspacing='0' bgcolor='white' style="font-weight:bold;">
<td colspan='9' align="center" bgcolor="#FA8072"><font color='#FF0000'><b>Enemy Troops</b></font><br><b><?php echo $deftotali."&nbsp"; ?><img src="../img/infant.png"><?php echo"&nbsp&nbsp&nbsp&nbsp&nbsp".$deftotalc."&nbsp"; ?><img src="../img/cav.png"><?php echo"&nbsp&nbsp&nbsp&nbsp&nbsp".$deftotalcerco."&nbsp"; ?><img src="../img/cerco.png">
<br><?php echo $defbtl;?></b></td><tr>
<td align="center"><?php getname2(1); echo $tropaname2;?></td><td align="center"><?php getname2(2); echo $tropaname2;?></td><td align="center"><?php getname2(3); echo $tropaname2;?></td><td align="center"><?php getname2(4); echo $tropaname2;?></td><td align="center"><?php getname2(5); echo $tropaname2;?></td><td align="center"><?php getname2(6); echo $tropaname2;?></td><td align="center"><?php getname2(7); echo $tropaname2;?></td><td align="center"><?php getname2(8); echo $tropaname2;?></td><td align="center"><?php getname2(9); echo $tropaname2;?></td></tr><tr>
<td align="center"><font color="#696969"><?php echo $t1enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t2enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t3enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t4enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t5enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t6enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t7enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t8enemy; ?></font></td><td align="center"><font color="#696969"><?php echo $t9enemy; ?></font></td></tr><tr>
<td align="center"><font color="#FF0000"><?php echo $perdad1; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad2; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad3; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad4; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad5; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad6; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad7; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad8; ?></font></td><td align="center"><font color="#FF0000"><?php echo $perdad9; ?></font></td></tr><tr>
<td align="center"><?php echo $sd1; ?></td><td align="center"><?php echo $sd2; ?></td><td align="center"><?php echo $sd3; ?></td><td align="center"><?php echo $sd4; ?></td><td align="center"><?php echo $sd5; ?></td><td align="center"><?php echo $sd6; ?></td><td align="center"><?php echo $sd7; ?></td><td align="center"><?php echo $sd8; ?></td><td align="center"><?php echo $sd9; ?></td></tr>
</table>


</center>
<?php

$consultadeft = mysql_query("select * from tropas where IDaldeia = '$meuid'");
$linhadeft = mysql_num_rows($consultadeft);
while($linhadeft = mysql_fetch_object($consultadeft)) {

$t1naaldeia = $linhadeft->t1;
$t2naaldeia = $linhadeft->t2;
$t3naaldeia = $linhadeft->t3;
$t4naaldeia = $linhadeft->t4;
$t5naaldeia = $linhadeft->t5;
$t6naaldeia = $linhadeft->t6;
$t7naaldeia = $linhadeft->t7;
$t8naaldeia = $linhadeft->t8;
$t9naaldeia = $linhadeft->t9;

$newt1 = $t1naaldeia + $sa1 - $t1;
$newt2 = $t2naaldeia + $sa2 - $t2;
$newt3 = $t3naaldeia + $sa3 - $t3;
$newt4 = $t4naaldeia + $sa4 - $t4;
$newt5 = $t5naaldeia + $sa5 - $t5;
$newt6 = $t6naaldeia + $sa6 - $t6;
$newt7 = $t7naaldeia + $sa7 - $t7;
$newt8 = $t8naaldeia + $sa8 - $t8;
$newt9 = $t9naaldeia + $sa9 - $t9;

$updatedef = mysql_query("update tropas set t1 = $newt1, t2 = $newt2, t3 = $newt3, t4 = $newt4, t5 = $newt5, t6 = $newt6, t7 = $newt7, t8 = $newt8, t9 = $newt9    where IDaldeia = '$meuid'");
If($updatedef) { } else { echo "Error 901: Troop Send* DB Error!";}


If ($sd1 + $sd2 + $sd3 + $sd4 + $sd5 + $sd6 + $sd7 + $sd8 + $sd9 < 1) {
echo '<text style="text-shadow: -1px 0 1px black, 0 1px 1px black, 1px 0 1px black, 0 -1px 1px black;"><center><b><font color="gold">All enemy troops were killed!</font></b></center></text>';
$delatk = "DELETE FROM ataques WHERE ID='$iddef'";
$resultdelatk = mysql_query($delatk);
If($resultdelrfc) { } else { echo "Error 918: ATK DB Error!";}



} else {



$updatedef2 = mysql_query("update ataques set t1 = $sd1, t2 = $sd2, t3 = $sd3, t4 = $sd4, t5 = $sd5, t6 = $sd6, t7 = $sd7, t8 = $sd8, t9 = $sd9    where ID = '$iddef'");
If($updatedef2) { } else { echo "Error 901: Troop Send* DB Error!";}}






}}}}
?>