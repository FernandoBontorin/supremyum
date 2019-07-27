<?php 
include "padrao.php";
include "../Config/tropasdados.php";

$IDatk = $_POST['id'];
$action = $_POST['action'];
$consultay = mysql_query("select * from ataques where ID = '$IDatk'");
$linhay = mysql_num_rows($consultay);
If ($linhay == 0) {echo "<meta http-equiv='refresh' content='0; url=home.php'> ";} else {
while($linhay = mysql_fetch_object($consultay)) {
$IDremetente = $linhay->remetente;
$IDdestino = $linhay->destino;
$tempofinal = $linhay->tempofinal;
$povorem = $linhay->povorem;
$povodest = $linhay->povodest;
$t1 = $linhay->t1;
$t2 = $linhay->t2;
$t3 = $linhay->t3;
$t4 = $linhay->t4;
$t5 = $linhay->t5;
$t6 = $linhay->t6;
$t7 = $linhay->t7;
$t8 = $linhay->t8;
$t9 = $linhay->t9;

$consultar = mysql_query("select * from aldeias where ID = '$IDdestino'");
$linhar = mysql_num_rows($consultar);
while($linhar = mysql_fetch_object($consultar)) {

$consultar2 = mysql_query("select * from aldeias where ID = '$IDremetente'");
$linhar2 = mysql_num_rows($consultar2);
while($linhar2 = mysql_fetch_object($consultar2)) {

$consultae = mysql_query("select * from tropas where IDaldeia = '$IDdestino'");
$linhae = mysql_num_rows($consultae);
while($linhae = mysql_fetch_object($consultae)) {
$xdb1 = "t".$povodest."1";
$t1enemy = $linhae->$xdb1;
$xdb2 = "t".$povodest."2";
$t2enemy = $linhae->$xdb2;
$xdb3 = "t".$povodest."3";
$t3enemy = $linhae->$xdb3;
$xdb4 = "t".$povodest."4";
$t4enemy = $linhae->$xdb4;
$xdb5 = "t".$povodest."5";
$t5enemy = $linhae->$xdb5;
$xdb6 = "t".$povodest."6";
$t6enemy = $linhae->$xdb6;
$xdb7 = "t".$povodest."7";
$t7enemy = $linhae->$xdb7;
$xdb8 = "t".$povodest."8";
$t8enemy = $linhae->$xdb8;
$xdb9 = "t".$povodest."9";
$t9enemy = $linhae->$xdb9;

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





//Check Clan.

//End-> Check Clan.






//Sistema de ATK.
If($action == "atk") {
$fclt1 = "t".$povorem."1atk";
$fclt2 = "t".$povorem."2atk";
$fclt3 = "t".$povorem."3atk";
$fclt4 = "t".$povorem."4atk";
$fclt5 = "t".$povorem."5atk";
$fclt6 = "t".$povorem."6atk";
$fclt7 = "t".$povorem."7atk";
$fclt8 = "t".$povorem."8atk";
$fclt9 = "t".$povorem."9atk";

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



//Roubo.

If ($sa1 + $sa2 + $sa3 + $sa4 + $sa5 + $sa6 + $sa7 + $sa8 + $sa9 > 0) {
$r1f = "t".$povorem."1c";
$r2f = "t".$povorem."2c";
$r3f = "t".$povorem."3c";
$r4f = "t".$povorem."4c";
$r5f = "t".$povorem."5c";
$r6f = "t".$povorem."6c";
$r7f = "t".$povorem."7c";
$r8f = "t".$povorem."8c";
$r9f = "t".$povorem."9c";

$r1 = $sa1 * $$r1f;
$r2 = $sa2 * $$r2f;
$r3 = $sa3 * $$r3f;
$r4 = $sa4 * $$r4f;
$r5 = $sa5 * $$r5f;
$r6 = $sa6 * $$r6f;
$r7 = $sa7 * $$r7f;
$r8 = $sa8 * $$r8f;
$r9 = $sa9 * $$r9f;

$roubo = $r1 + $r2 + $r3 + $r4 + $r5 + $r6 + $r7 + $r8 + $r9;

$madeiradest = intval($linhar->madeira);
$ourodest = intval($linhar->ouro);
$ferrodest = intval($linhar->ferro);
$comidadest = intval($linhar->comida);
$allr = $madeiradest + $ourodest + $ferrodest + $comidadest;



If ($roubo > $allr) {
$madeirarob = $madeiradest;
$ourorob = $ourodest;
$ferrorob = $ferrodest;
$comidarob = $comidadest;
}

If ($roubo == $allr) {
$madeirarob = $madeiradest;
$ourorob = $ourodest;
$ferrorob = $ferrodest;
$comidarob = $comidadest;
}

$mtem = 0;
$otem = 0;
$ftem = 0;
$ctem = 0;

If ($roubo < $allr) {
If ($madeiradest < 0.25 * $roubo) { $madeirarob = $madeiradest; } else { $madeirarob = $roubo/4;}
If ($ourodest < 0.25 * $roubo) { $ourorob = $ourodest; } else { $ourorob = $roubo/4;}
If ($ferrodest < 0.25 * $roubo) { $ferrorob = $ferrodest; } else { $ferrorob = $roubo/4;}
If ($comidadest < 0.25 * $roubo) { $comidarob = $comidadest; } else { $comidarob = $roubo/4;}
If ($madeirarob > $madeiradest) { $madeirarob = $madeiradest;}
If ($ourorob > $ourodest) { $ourorob = $ourodest;}
If ($ferrorob > $ferrodest) { $ferrorob = $ferrodest;}
If ($comidarob > $comidadest) { $comidarob = $comidadest;}
$roubados = $madeirarob + $ourorob + $ferrorob + $comidarob;
If ($roubados < $roubo) {
If ($madeiradest < 0.25 * $roubo) {
If ($ourodest < 0.25 * $roubo) {
If ($ferrodest < 0.25 * $roubo) {
If ($comidadest < 0.25 * $roubo) {
} else {$ctem = 1;} } else {$ftem = 2;}}else{$otem = 4;}} else { $mtem = 8;}
$alltem = $ctem + $ftem + $otem + $mtem;
If ($alltem == 1) {$comidarob = $roubo - $ourorob - $ferrorob - $madeirarob;}
If ($alltem == 2) {$ferrorob = $roubo - $ourorob - $comidarob - $madeirarob;}
If ($alltem == 4) {$ourorob = $roubo - $ferrorob - $comidarob - $madeirarob;}
If ($alltem == 8) {$madeirarob = $roubo - $ourorob - $comidarob - $ferrorob;}
If ($alltem == 3) {$aa = $roubo - $ourorob - $madeirarob; $comidarob = $aa/2; $ferrorob = $aa/2;}
If ($alltem == 5) {$aa = $roubo - $ferrorob - $madeirarob; $comidarob = $aa/2; $ourorob = $aa/2;}
If ($alltem == 9) {$aa = $roubo - $ourorob - $ferrorob; $comidarob = $aa/2; $madeirarob = $aa/2;}
If ($alltem == 6) {$aa = $roubo - $comidarob - $madeirarob; $ourorob = $aa/2; $ferrorob = $aa/2;}
If ($alltem == 10) {$aa = $roubo - $ourorob - $comidarob; $madeirarob = $aa/2; $ferrorob = $aa/2;}
If ($alltem == 12) {$aa = $roubo - $ferrorob - $comidarob; $madeirarob = $aa/2; $ourorob = $aa/2;}
If ($alltem == 7) {$aa = $roubo - $madeirarob; $comidarob = $aa/3; $ferrorob = $aa/3; $ourorob = $aa/3;}
If ($alltem == 11) {$aa = $roubo - $ourorob; $comidarob = $aa/3; $ferrorob = $aa/3; $madeirarob = $aa/3;}
If ($alltem == 14) {$aa = $roubo - $comidarob; $madeirarob = $aa/3; $ferrorob = $aa/3; $ourorob = $aa/3;}}
If ($madeirarob > $madeiradest) { If ($mtem == 8){ $madeirarob = $roubo * 0.25;}}
If ($ourorob > $ourodest) { If ($otem == 8){ $ourorob = $roubo * 0.25;}}
If ($ferrorob > $ferrodest) { If ($ftem == 8){ $ferrorob = $roubo * 0.25;}}
If ($comidarob > $comidadest) { If ($ctem == 8){ $comidarob = $roubo * 0.25;}}

}
$roubados = $madeirarob + $ourorob + $ferrorob + $comidarob;
} else {
$roubo = 0;
$roubados = 0;
$madeirarob = 0;
$ourorob = 0;
$ferrorob = 0;
$comidarob = 0;
}


//Descontar tropas da def.
$d1att = "t".$povodest."1";
$d2att = "t".$povodest."2";
$d3att = "t".$povodest."3";
$d4att = "t".$povodest."4";
$d5att = "t".$povodest."5";
$d6att = "t".$povodest."6";
$d7att = "t".$povodest."7";
$d8att = "t".$povodest."8";
$d9att = "t".$povodest."9";
$updatedef = mysql_query("update tropas set $d1att = $sd1, $d2att = $sd2, $d3att = $sd3, $d4att = $sd4, $d5att = $sd5, $d6att = $sd6, $d7att = $sd7, $d8att = $sd8, $d9att = $sd9   where IDaldeia = '$IDdestino'");
If($updatedef) { } else { echo "Error 901: Troop Send* DB Error!";}









//Descontar resources.
$attm = $madeiradest - $madeirarob;
$atto = $ourodest - $ourorob;
$attf = $ferrodest - $ferrorob;
$attc = $comidadest - $comidarob;
$updateres = mysql_query("update aldeias set madeira = $attm, ouro = $atto, ferro = $attf, comida = $attc   where ID = '$IDdestino'");
If($updateres) { } else { echo "Error 901: Troop Send DB Error!";}


//Criar retorno.


$xa = $linhar2->x;
$ya = $linhar2->y;
$xb = $linhar->x;
$yb = $linhar->y;
$aa = pow(($xb-$xa),2) + pow(($yb-$ya),2);
$dist = sqrt($aa);

If ($t1 >= 1) {$ta1 = "t".$povorem."1v";} else { $ta1 = "lol";}
If ($t2 >= 1) {$ta2 = "t".$povorem."2v";} else { $ta2 = "lol";}
If ($t3 >= 1) {$ta3 = "t".$povorem."3v";} else { $ta3 = "lol";}
If ($t4 >= 1) {$ta4 = "t".$povorem."4v";} else { $ta4 = "lol";}
If ($t5 >= 1) {$ta5 = "t".$povorem."5v";} else { $ta5 = "lol";}
If ($t6 >= 1) {$ta6 = "t".$povorem."6v";} else { $ta6 = "lol";}
If ($t7 >= 1) {$ta7 = "t".$povorem."7v";} else { $ta7 = "lol";}
If ($t8 >= 1) {$ta8 = "t".$povorem."8v";} else { $ta8 = "lol";}
If ($t9 >= 1) {$ta9 = "t".$povorem."9v";} else { $ta9 = "lol";}
$lol = "99999";
$tropas = array($$ta1,$$ta2,$$ta3,$$ta4,$$ta5,$$ta6,$$ta7,$$ta8,$$ta9);
sort($tropas);
$vfin = $tropas[0];
$var1a = $dist/$vfin;
$var1b = $var1a*3600;
$tempomovs = intval($var1b);
$tempomov = StoH($var1b);
$tempofinal = $timenow + $tempomovs;

$tcr = $timenow;
$insretornos = "insert into retornos (ID,idsaida,idchegada,tempofinal,povo,t1,t2,t3,t4,t5,t6,t7,t8,t9,madeira,ouro,ferro,comida) values ('','$IDdestino','$IDremetente','$tempofinal','$povorem','$sa1','$sa2','$sa3','$sa4','$sa5','$sa6','$sa7','$sa8','$sa9','$madeirarob','$ourorob','$ferrorob','$comidarob')";
$consultaret = mysql_query($insretornos);
If($consultaret) { } else { echo "Error 900: Troop Send DB Error!";}







//Deletar atk da db.
$delatk = "DELETE FROM ataques WHERE ID='$IDatk'";
$resultdelatk = mysql_query($delatk);
If($resultdelatk) { } else { echo "Error 902: Atk DB Error!";}


//Fim do Sistema de ATK.
}


function getname($unit){
global $povoname, $tropaname, $povorem, $p1nome, $p2nome, $p3nome, $p4nome, $p5nome, $p6nome, $p7nome, $p8nome, $p9nome, $p10nome, $p11nome, $p12nome, $p13nome, $p14nome, $p15nome, $p999nome, $t11nome, $t12nome, $t13nome, $t14nome, $t15nome, $t16nome, $t17nome, $t18nome, $t19nome, $t21nome, $t22nome, $t23nome, $t24nome, $t25nome, $t26nome, $t27nome, $t28nome, $t29nome;
$p = "p".$povorem."nome";
$t = "t".$povorem."".$unit."nome";
$povoname = $$p;
$tropaname = $$t;
}

function getname2($unit){
global $povoname2, $tropaname2, $povodest, $p1nome, $p2nome, $p3nome, $p4nome, $p5nome, $p6nome, $p7nome, $p8nome, $p9nome, $p10nome, $p11nome, $p12nome, $p13nome, $p14nome, $p15nome, $p999nome, $t11nome, $t12nome, $t13nome, $t14nome, $t15nome, $t16nome, $t17nome, $t18nome, $t19nome, $t21nome, $t22nome, $t23nome, $t24nome, $t25nome, $t26nome, $t27nome, $t28nome, $t29nome;
$p = "p".$povodest."nome";
$t = "t".$povodest."".$unit."nome";
$povoname2 = $$p;
$tropaname2 = $$t;
}

If($action == "atk") {
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
<td align="center" colspan="9" bgcolor="#BEBEBE" style=" text-shadow: -1px 0 1px black, 0 1px 1px black, 1px 0 1px black, 0 -1px 1px black;"><font color="white">Resources:</font>&nbsp&nbsp&nbsp<font color="#F5DEB3"><?php echo $madeirarob."&nbsp";?><img src="../img/madeira.bmp"></font>&nbsp&nbsp&nbsp<font color="#FFD700"><?php echo $ourorob."&nbsp";?><img src="../img/ouro.bmp"></font>&nbsp&nbsp&nbsp<font color="#D3D3D3"><?php echo $ferrorob."&nbsp";?><img src="../img/ferro.bmp"></font>&nbsp&nbsp&nbsp<font color="#B22222"><?php echo $comidarob."&nbsp";?><img src="../img/comida.bmp"></font><font color="white"> <?php echo $roubados."/".$roubo;?></font></td></tr>
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
} else {}











}}}}}}
?>