<?php
require '../Config/config_sistema.php';

$limit = set_time_limit(0);

While(1==1){
include "../config/tropasdados.php";
include_once "../config/formulas.php";

$consulta1 = mysql_query("select * from dados_usuarios where ID");
$linhanum1 = mysql_num_rows($consulta1);
 while ($linha1 = mysql_fetch_object($consulta1)) { 
$login_usuario = $linha1->Login;
$ID = $linha1->ID;
echo$login_usuario;

If($login_usuario=="admin"){
} else {










$recursos = 1;
If($recursos == 1){






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





<?php
$consulta3000999 = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	$linha590 = mysql_num_rows($consulta3000999);

while($linha590 = mysql_fetch_object($consulta3000999)) {
if  ($linha590->vilas ==1) {

$consultaabcd = mysql_query("select * from config where tempo");
while($linhaabcd = mysql_fetch_object($consultaabcd)) {
	$tempoo = $linhaabcd->tempo;






}




$consulta300053 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha833 = mysql_num_rows($consulta300053);
while($linha833 = mysql_fetch_object($consulta300053)) {

$nivelmadeira = $linha833->nivelmadeira;
$nivelouro = $linha833->nivelouro;
$nivelferro = $linha833->nivelferro;
$nivelcomida = $linha833->nivelcomida;
$consumo = $linha833->consumo;



$aaa = 2 * pow($nivelmadeira,2);
$madeiraaposconta = $aaa * $server_speed;

$bbb = 2 * pow($nivelouro,2);
$ouroaposconta = $bbb * $server_speed;

$ccc = 2 * pow($nivelferro,2);
$ferroaposconta = $ccc * $server_speed;

$ddd = 2 * pow($nivelcomida,2);
$comidaaposconta2 = $ddd * $server_speed;
$comidaaposconta = $comidaaposconta2 - $consumo;





$attdbmadeira = mysql_query("update aldeias set madeirahora = $madeiraaposconta where dono = '$login_usuario'");
$attdbouro = mysql_query("update aldeias set ourohora = $ouroaposconta where dono = '$login_usuario'");
$attdbferro = mysql_query("update aldeias set ferrohora = $ferroaposconta where dono = '$login_usuario'");
$attdbcomida = mysql_query("update aldeias set comidahora = $comidaaposconta where dono = '$login_usuario'");



$population = $linha833->nivelmadeira + $linha833->nivelouro + $linha833->nivelferro + $linha833->nivelcomida + $linha833->edanv + $linha833->edbnv + $linha833->edcnv + $linha833->galpaonv + $linha833->edenv + $linha833->edfnv + $linha833->edgnv + $linha833->edcentralnv + $linha833->armazemnv + $linha833->edjnv + $linha833->edknv + $linha833->quartelnv + $linha833->edmnv + $linha833->ednnv + $linha833->cpmnv + $linha833->edpnv + $linha833->edqnv + $linha833->edrnv + $linha833->estabulonv + $linha833->edtnv;



}
while($linha833 = mysql_fetch_object($consulta300053)) {


$madeiraparaatt=($linha833->madeirahora);
$ouroparaatt=($linha833->ourohora);
$ferroparaatt=($linha833->ferrohora);
$comidaparaatt=($linha833->comidahora);

}



$uptempo = mysql_query("UPDATE config SET tempo = UTC_TIMESTAMP()");





		$timesecond = time();



$consultatime = mysql_query("select * from config where time");
while($linhatime = mysql_fetch_object($consultatime)) {
	$timee = $linhatime->time;



$tempoparaup = $timesecond - $timee;


$consulta3000530 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha8330 = mysql_num_rows($consulta3000530);
while($linha8330 = mysql_fetch_object($consulta3000530)) {

$antigapop = $linha8330->pop;
$capacidade = $linha8330->capacidade;
$capacidadecomida = $linha8330->capacidadecomida;


$uptime = mysql_query("UPDATE config SET time = $timesecond");





$attmadeira = mysql_query("UPDATE aldeias SET madeira = ($madeiraaposconta / 3600) * $tempoparaup + madeira WHERE dono = '$login_usuario'");
$attouro = mysql_query("UPDATE aldeias SET ouro = ($ouroaposconta / 3600) * $tempoparaup + ouro WHERE dono = '$login_usuario'");
$attferro = mysql_query("UPDATE aldeias SET ferro = ($ferroaposconta / 3600) * $tempoparaup + ferro WHERE dono = '$login_usuario'");
$attcomida = mysql_query("UPDATE aldeias SET comida = ($comidaaposconta / 3600) * $tempoparaup + comida WHERE dono = '$login_usuario'");
$attpop = mysql_query("UPDATE aldeias SET pop = $population WHERE dono = '$login_usuario'");
$attpop2 = mysql_query("UPDATE dados_usuarios SET pop = $population WHERE Login = '$login_usuario'");


$consulta3000533 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha8333 = mysql_num_rows($consulta3000533);
while($linha8333 = mysql_fetch_object($consulta3000533)) {

$novapop = $linha8333->pop;

$attdisponivel = $linha8333->popdisponivel + ($novapop - $antigapop);

$attpopdisponivel = mysql_query("UPDATE aldeias SET popdisponivel = $attdisponivel WHERE dono = '$login_usuario'");

$madeiraatual = $linha8333->madeira;
$ouroatual = $linha8333->ouro;
$ferroatual = $linha8333->ferro;
$comidaatual = $linha8333->comida;


$niveldooarmazem = $linha8333->armazemnv;
$ajustarcapacidade = pow($niveldooarmazem,2) * 50 +1000;
$attcapajuste = mysql_query("UPDATE aldeias SET capacidade = $ajustarcapacidade WHERE dono = '$login_usuario'");

$niveldoogalpao = $linha8333->galpaonv;
$ajustarcapacidadecomida = pow($niveldoogalpao,2) * 50 +1100;
$attcapajuste = mysql_query("UPDATE aldeias SET capacidadecomida = $ajustarcapacidadecomida WHERE dono = '$login_usuario'");




If ($madeiraatual >= $capacidade) {
$madeirareajuste = mysql_query("UPDATE aldeias SET madeira = $capacidade WHERE dono = '$login_usuario'");
} else { }

If ($ouroatual >= $capacidade) {
$ouroreajuste = mysql_query("UPDATE aldeias SET ouro = $capacidade WHERE dono = '$login_usuario'");
} else { }

If ($ferroatual >= $capacidade) {
$ferroreajuste = mysql_query("UPDATE aldeias SET ferro = $capacidade WHERE dono = '$login_usuario'");
} else { }

If ($comidaatual >= $capacidadecomida) {
$comidareajuste = mysql_query("UPDATE aldeias SET comida = $capacidadecomida WHERE dono = '$login_usuario'");
} else { }


}
}}}}




?>

</body>
</html>
<?php

}

$varq = 0;
If($varq == 1) {
echo"Verificando ataque";
//Verifica ataques indo

echo"antes da consulta1";
echo$ID;
$consultaatk = mysql_query("select * from ataques where remetente = '$ID'");
 while ($linhaatk = mysql_fetch_object($consultaatk)) { 
 $consultatime = mysql_query("select * from config where time");
 while ($linhatime = mysql_fetch_object($consultatime)) { 
 
 $action = $linhaatk->type;
 $IDatk = $linhaatk->ID;
 echo"Id do ataque:".$IDatk;
 $varsub = $linhaatk->tempofinal - $linhatime->time;
 echo"**".$varsub."**";
 If($linhaatk->tempofinal - $linhatime->time <= 0) {
 $consultay = mysql_query("select * from ataques where ID = '$IDatk'");
 while($linhay = mysql_fetch_object($consultay)) {
$IDremetente = $linhay->remetente;
$IDdestino = $linhay->destino;
@$tempofinal = $linhay->tempofinal;
$povorem = $linhay->povorem;
$povodest = $linhay->povodest;

echo"Ataque chegou!!";

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
$t1enemy = $linhae->t1;
$xdb2 = "t".$povodest."2";
$t2enemy = $linhae->t2;
$xdb3 = "t".$povodest."3";
$t3enemy = $linhae->t3;
$xdb4 = "t".$povodest."4";
$t4enemy = $linhae->t4;
$xdb5 = "t".$povodest."5";
$t5enemy = $linhae->t5;
$xdb6 = "t".$povodest."6";
$t6enemy = $linhae->t6;
$xdb7 = "t".$povodest."7";
$t7enemy = $linhae->t7;
$xdb8 = "t".$povodest."8";
$t8enemy = $linhae->t8;
$xdb9 = "t".$povodest."9";
$t9enemy = $linhae->t9;

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
$rouborealizado = 1;
} else {
$rouborealizado = 0;
}

If ($sa1 + $sa2 + $sa3 + $sa4 + $sa5 + $sa6 + $sa7 + $sa8 + $sa9 > 0) {
$r1f = "t".$povorem."1p";
$r2f = "t".$povorem."2p";
$r3f = "t".$povorem."3p";
$r4f = "t".$povorem."4p";
$r5f = "t".$povorem."5p";
$r6f = "t".$povorem."6p";
$r7f = "t".$povorem."7p";
$r8f = "t".$povorem."8p";
$r9f = "t".$povorem."9p";

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
$d1att = "t1";
$d2att = "t2";
$d3att = "t3";
$d4att = "t4";
$d5att = "t5";
$d6att = "t6";
$d7att = "t7";
$d8att = "t8";
$d9att = "t9";
$updatedef = mysql_query("update tropas set $d1att = $sd1, $d2att = $sd2, $d3att = $sd3, $d4att = $sd4, $d5att = $sd5, $d6att = $sd6, $d7att = $sd7, $d8att = $sd8, $d9att = $sd9   where IDaldeia = '$IDdestino'");
If($updatedef) { } else { echo "Error 901: Troop Send* DB Error!";}








If ($rouborealizado == 1) {
//Descontar resources.
$attm = $madeiradest - $madeirarob;
$atto = $ourodest - $ourorob;
$attf = $ferrodest - $ferrorob;
$attc = $comidadest - $comidarob;
$updateres = mysql_query("update aldeias set madeira = $attm, ouro = $atto, ferro = $attf, comida = $attc   where ID = '$IDdestino'");
If($updateres) { } else { echo "Error 901: Troop Send DB Error!";}
}


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


//Montar relatorio.

$consultaabc = mysql_query("select * from config where tempo");
while($linhaabc = mysql_fetch_object($consultaabc)) {
$server_time = $linhaabc->tempo;
$explodetime = explode(" ", $server_time);
$horario = $explodetime[1];
$data = $explodetime[0];
}

$createrel1 = "insert into relatorios (ID,visualisador,type,remetente,destino,horario,data,povorem,povodest,t1,t2,t3,t4,t5,t6,t7,t8,t9,t1p,t2p,t3p,t4p,t5p,t6p,t7p,t8p,t9p,t1r,t2r,t3r,t4r,t5r,t6r,t7r,t8r,t9r,t1e,t2e,t3e,t4e,t5e,t6e,t7e,t8e,t9e,t1ep,t2ep,t3ep,t4ep,t5ep,t6ep,t7ep,t8ep,t9ep,t1er,t2er,t3er,t4er,t5er,t6er,t7er,t8er,t9er,madeirarob,ourorob,ferrorob,comidarob,roubototal,roubomax) values (' ','$IDremetente','ataquefeito','$IDremetente','$IDdestino','$horario','$data','$povorem','$povodest','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$perdaa1','$perdaa2','$perdaa3','$perdaa4','$perdaa5','$perdaa6','$perdaa7','$perdaa8','$perdaa9','$sa1','$sa2','$sa3','$sa4','$sa5','$sa6','$sa7','$sa8','$sa9','$t1enemy','$t2enemy','$t3enemy','$t4enemy','$t5enemy','$t6enemy','$t7enemy','$t8enemy','$t9enemy','$perdad1','$perdad2','$perdad3','$perdad4','$perdad5','$perdad6','$perdad7','$perdad8','$perdad9','$sd1','$sd2','$sd3','$sd4','$sd5','$sd6','$sd7','$sd8','$sd9','$madeirarob','$ourorob','$ferrorob','$comidarob','$roubados','$roubo')";
$createrel2 = "insert into relatorios (ID,visualisador,type,remetente,destino,horario,data,povorem,povodest,t1,t2,t3,t4,t5,t6,t7,t8,t9,t1p,t2p,t3p,t4p,t5p,t6p,t7p,t8p,t9p,t1r,t2r,t3r,t4r,t5r,t6r,t7r,t8r,t9r,t1e,t2e,t3e,t4e,t5e,t6e,t7e,t8e,t9e,t1ep,t2ep,t3ep,t4ep,t5ep,t6ep,t7ep,t8ep,t9ep,t1er,t2er,t3er,t4er,t5er,t6er,t7er,t8er,t9er,madeirarob,ourorob,ferrorob,comidarob,roubototal,roubomax) values (' ','$IDdestino','ataquesofrido','$IDremetente','$IDdestino','$horario','$data','$povorem','$povodest','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$perdaa1','$perdaa2','$perdaa3','$perdaa4','$perdaa5','$perdaa6','$perdaa7','$perdaa8','$perdaa9','$sa1','$sa2','$sa3','$sa4','$sa5','$sa6','$sa7','$sa8','$sa9','$t1enemy','$t2enemy','$t3enemy','$t4enemy','$t5enemy','$t6enemy','$t7enemy','$t8enemy','$t9enemy','$perdad1','$perdad2','$perdad3','$perdad4','$perdad5','$perdad6','$perdad7','$perdad8','$perdad9','$sd1','$sd2','$sd3','$sd4','$sd5','$sd6','$sd7','$sd8','$sd9','$madeirarob','$ourorob','$ferrorob','$comidarob','$roubados','$roubo')";
$consultarelat1 = mysql_query($createrel1);
If($consultarelat1) { } else { echo "Error 900: Troop Send DB Error!";}
$consultarelat2 = mysql_query($createrel2);
If($consultarelat2) { } else { echo "Error 900: Troop Send DB Error!";}
//Fim do relatorio

//Fim do Sistema de ATK.
}
 }}
 
 }}}}}}
 
 
 
 
//Fim de ataques indo


//Verifica ataques chegando

//Fim de ataques chegando


//Verifica reforcos

//Fim de reforcos



//Verifica retornos
 $consultatime = mysql_query("select * from config where time");
 while ($linhatime = mysql_fetch_object($consultatime)) { 
 $time = $linhatime->time;
 }
$consultaret = mysql_query("select * from retornos where idchegada = '$ID'");
$linharetcheck = mysql_num_rows($consultaret); 
IF($linharetcheck > 0) {
while($linhat2 = mysql_fetch_object($consultaret)) {
If($linhat2->tempofinal - $time < 0) {
$idret = $linhat2->ID;
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






}
}
}}}
//Fim de retornos


//Consumo.
 $consulta30809 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha59809 = mysql_num_rows($consulta30809); 
 while ($linha59809 = mysql_fetch_object($consulta30809)) { 
		$id1 = $linha59809->ID;
		$povo = $linha59809->povo;
  $consulta308092 = mysql_query("select * from tropas where IDaldeia = '$id1'");
 $linha598092 = mysql_num_rows($consulta308092); 
 while ($linha598092 = mysql_fetch_object($consulta308092)) { 
		$t1 = $linha598092 -> t1;
		$t2 = $linha598092 -> t2;
		$t3 = $linha598092 -> t3;
		$t4 = $linha598092 -> t4;
		$t5 = $linha598092 -> t5;
		$t6 = $linha598092 -> t6;
		$t7 = $linha598092 -> t7;
		$t8 = $linha598092 -> t8;
		$t9 = $linha598092 -> t9;
		
		$cons1x = "t".$povo."1con";
		$cons2x = "t".$povo."2con";
		$cons3x = "t".$povo."3con";
		$cons4x = "t".$povo."4con";
		$cons5x = "t".$povo."5con";
		$cons6x = "t".$povo."6con";
		$cons7x = "t".$povo."7con";
		$cons8x = "t".$povo."8con";
		$cons9x = "t".$povo."9con";
		
		@$cons1 = $$cons1x * $t1;
		@$cons2 = $$cons2x * $t2;
		@$cons3 = $$cons3x * $t3;
		@$cons4 = $$cons4x * $t4;
		@$cons5 = $$cons5x * $t5;
		@$cons6 = $$cons6x * $t6;
		@$cons7 = $$cons7x * $t7;
		@$cons8 = $$cons8x * $t8;
		@$cons9 = $$cons9x * $t9;
		
		$constotal2 = $cons1 + $cons2 + $cons3 + $cons4 + $cons5 + $cons6 + $cons7 + $cons8 + $cons9;
		$constotal = $constotal2;
		$updateconsumo = mysql_query("update aldeias set consumo = $constotal where dono = '$login_usuario'");
 }}





//Madeira.
 $consulta30809 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha59809 = mysql_num_rows($consulta30809); 
 while ($linha59809 = mysql_fetch_object($consulta30809)) { 
$checklinkvalid = $linha59809->madeiratempodestino;
$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 
$nivelmadeiraa = $linha25544->nivelmadeira;
$popdisponivel = $linha25544->popdisponivel;
$madeiraup = $nivelmadeiraa + 1;
If ($checklinkvalid == 0) {
$madeiratrabalhadores = $linha25544->madeiratrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $madeiratrabalhadores   where dono = '$login_usuario'");
$updatemadeiratrabalhadores = mysql_query("update aldeias set madeiratrabalhadores = 0 where dono = '$login_usuario'");
}
$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 
$timedb = $linha554->time;
$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 
$tempodestinoup = $linha2554->madeiratempodestino;
If ($tempodestinoup == 0) {
} else {
If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
} else {
If ($timedb >= $tempodestinoup) {
$updatemadeiranivel = mysql_query("update aldeias set nivelmadeira = $nivelmadeira + 1 where dono = '$login_usuario'");
$updatemadeiradestino1 = mysql_query("update aldeias set madeiratempodestino = 0 where dono = '$login_usuario'");
} else {
}}}}}}}







 //Ouro.
           $consulta30809 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha59809 = mysql_num_rows($consulta30809); 
 while ($linha59809 = mysql_fetch_object($consulta30809)) { 
$checklinkvalid = $linha59809->ourotempodestino;
$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 
$nivelouroo = $linha25544->nivelouro;
$popdisponivel = $linha25544->popdisponivel;
$ouroup = $nivelouroo + 1;
If ($checklinkvalid == 0) {
$ourotrabalhadores = $linha25544->ourotrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $ourotrabalhadores   where dono = '$login_usuario'");
$updateourotrabalhadores = mysql_query("update aldeias set ourotrabalhadores = 0 where dono = '$login_usuario'");
}
$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 
$timedb = $linha554->time;
$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 
$tempodestinoup = $linha2554->ourotempodestino;
If ($tempodestinoup == 0) {
} else {
If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
} else {
If ($timedb >= $tempodestinoup) {
$updateouronivel = mysql_query("update aldeias set nivelouro = $nivelouro + 1 where dono = '$login_usuario'");
$updateourodestino1 = mysql_query("update aldeias set ourotempodestino = 0 where dono = '$login_usuario'");
} else {
}}}}}}}





 //Ferro.
           $consulta30809 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha59809 = mysql_num_rows($consulta30809); 
 while ($linha59809 = mysql_fetch_object($consulta30809)) { 
$checklinkvalid = $linha59809->ferrotempodestino;
$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 
$nivelferroo = $linha25544->nivelferro;
$popdisponivel = $linha25544->popdisponivel;
$ferroup = $nivelferroo + 1;
If ($checklinkvalid == 0) {
$ferrotrabalhadores = $linha25544->ferrotrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $ferrotrabalhadores   where dono = '$login_usuario'");
$updateferrotrabalhadores = mysql_query("update aldeias set ferrotrabalhadores = 0 where dono = '$login_usuario'");
}
$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 
$timedb = $linha554->time;
$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 
$tempodestinoup = $linha2554->ferrotempodestino;
If ($tempodestinoup == 0) {
} else {
If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
} else {
If ($timedb >= $tempodestinoup) {
$updateferronivel = mysql_query("update aldeias set nivelferro = $nivelferro + 1 where dono = '$login_usuario'");
$updateferrodestino1 = mysql_query("update aldeias set ferrotempodestino = 0 where dono = '$login_usuario'");
} else {
}}}}}}}







//Comida.
           $consulta30809 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha59809 = mysql_num_rows($consulta30809); 
 while ($linha59809 = mysql_fetch_object($consulta30809)) { 
$checklinkvalid = $linha59809->comidatempodestino;
$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 
$nivelcomidaa = $linha25544->nivelcomida;
$popdisponivel = $linha25544->popdisponivel;
$comidaup = $nivelcomidaa + 1;
If ($checklinkvalid == 0) {
$comidatrabalhadores = $linha25544->comidatrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $comidatrabalhadores   where dono = '$login_usuario'");
$updatecomidatrabalhadores = mysql_query("update aldeias set comidatrabalhadores = 0 where dono = '$login_usuario'");
}
$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 
$timedb = $linha554->time;
$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 
$tempodestinoup = $linha2554->comidatempodestino;
If ($tempodestinoup == 0) {
} else {
If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
} else {
If ($timedb >= $tempodestinoup) {
$updatecomidanivel = mysql_query("update aldeias set nivelcomida = $nivelcomida + 1 where dono = '$login_usuario'");
$updatecomidadestino1 = mysql_query("update aldeias set comidatempodestino = 0 where dono = '$login_usuario'");
} else {
}}}}}}}







//Galpao
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
If ($checklinkvalid == 0) {
$galpaotrabalhadores = $linha25544->galpaotrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $galpaotrabalhadores   where dono = '$login_usuario'");
$updategalpaotrabalhadores = mysql_query("update aldeias set galpaotrabalhadores = 0 where dono = '$login_usuario'");
}
$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 
$timedb = $linha554->time;
$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 
$tempodestinoup = $linha2554->galpaotempodestino;
If ($tempodestinoup == 0) {
} else {
If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
} else {
If ($timedb >= $tempodestinoup) {
$updategalpaonivel = mysql_query("update aldeias set galpaonv = $galpaoup where dono = '$login_usuario'");
$updategalpaodestino1 = mysql_query("update aldeias set galpaotempodestino = 0 where dono = '$login_usuario'");
} else {
}}}}}}}




//Armazem.
           $consulta30809 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha59809 = mysql_num_rows($consulta30809); 
 while ($linha59809 = mysql_fetch_object($consulta30809)) { 
$checklinkvalid = $linha59809->armazemtempodestino;
$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 
$nivelarmazemm = $linha25544->armazemnv;
$popdisponivel = $linha25544->popdisponivel;
$armazemup = $nivelarmazemm + 1;
If ($checklinkvalid == 0) {
$armazemtrabalhadores = $linha25544->armazemtrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $armazemtrabalhadores   where dono = '$login_usuario'");
$updatearmazemtrabalhadores = mysql_query("update aldeias set armazemtrabalhadores = 0 where dono = '$login_usuario'");
}
$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 
$timedb = $linha554->time;
$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 
$tempodestinoup = $linha2554->armazemtempodestino;
If ($tempodestinoup == 0) {
} else {
If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
} else {
If ($timedb >= $tempodestinoup) {
$updatearmazemnivel = mysql_query("update aldeias set armazemnv = $armazemup where dono = '$login_usuario'");
$updatearmazemdestino1 = mysql_query("update aldeias set armazemtempodestino = 0 where dono = '$login_usuario'");
} else {
}}}}}}}





//Ed Central.
           $consulta30809 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha59809 = mysql_num_rows($consulta30809); 
 while ($linha59809 = mysql_fetch_object($consulta30809)) { 
$checklinkvalid = $linha59809->edcentraltempodestino;
$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 
$niveledcentrall = $linha25544->edcentralnv;
$popdisponivel = $linha25544->popdisponivel;
$edcentralup = $niveledcentrall + 1;
If ($checklinkvalid == 0) {
$edcentraltrabalhadores = $linha25544->edcentraltrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $edcentraltrabalhadores   where dono = '$login_usuario'");
$updateedcentraltrabalhadores = mysql_query("update aldeias set edcentraltrabalhadores = 0 where dono = '$login_usuario'");
}
$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 
$timedb = $linha554->time;
$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 
$tempodestinoup = $linha2554->edcentraltempodestino;
If ($tempodestinoup == 0) {
} else {
If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
} else {
If ($timedb >= $tempodestinoup) {
$updateedcentralnivel = mysql_query("update aldeias set edcentralnv = $edcentralup where dono = '$login_usuario'");
$updateedcentraldestino1 = mysql_query("update aldeias set edcentraltempodestino = 0 where dono = '$login_usuario'");
} else {
}}}}}}}}



include"../config/verify.php";


echo"Loop/";}}}

?>