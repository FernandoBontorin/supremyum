<?php
include "config_sistema.php";
include "../engine/recursos.php";
include_once "../Config/formulas.php";


$consultaconfigCS = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linhaconfigCS = mysql_num_rows($consultaconfigCS);
while($linhaconfigCS = mysql_fetch_object($consultaconfigCS)) {


$p1nome = "Alemães";
$p2nome = "Apaches";
$p3nome = "Astecas";
$p4nome = "Bizantinos";
$p5nome = "Britânicos";
$p6nome = "Cherokees";
$p7nome = "Espanhóis";
$p8nome = "Franceses";
$p9nome = "Holandeses";
$p10nome = "Incas";
$p11nome = "Italianos";
$p12nome = "Portugueses";
$p13nome = "Russos";
$p14nome = "Suíços";
$p999nome = "ESPARTANO!";
$p15nome = "Turcos";




$t11atk = "30";
$t11defi = "12";
$t11defc = "8";
$t11defcerco = "50";
$t11m = "70";
$t11o = "35";
$t11f = "70";
$t11c = "20";
$t11TEMPO = "00:04:30";
$t11tD = HtoS($t11TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t11t = StoH(HtoS($t11TEMPO) - $t11tD) ;
$t11con = "0.5";
$t11v = 2*$troop_speed;
$t11p = "50";
$t11nome = "Kiles";

$t12atk = "15";
$t12defi = "40";
$t12defc = "45";
$t12defcerco = "90";
$t12m = "110";
$t12o = "40";
$t12f = "50";
$t12c = "30";
$t12TEMPO = "00:06:00";
$t12tD = HtoS ($t12TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t12t = StoH(HtoS($t12TEMPO) - $t12tD) ;
$t12con = "0.6";
$t12v = 1.6*$troop_speed;
$t12p = "20";
$t12nome = "Skihto";
$t12Rq = "3";
$t12Rcpm = "1";

$t13atk = "50";
$t13defi = "25";
$t13defc = "20";
$t13defcerco = "60";
$t13m = "110";
$t13o = "60";
$t13f = "120";
$t13c = "50";
$t13TEMPO = "00:08:30";
$t13tD = HtoS ($t13TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t13t = StoH(HtoS($t13TEMPO) - $t13tD) ;
$t13con = "0.9";
$t13v = 2.2*$troop_speed;
$t13p = "65";
$t13nome ="Tropidado";
$t13Rq = "5";
$t13Rcpm = "3";

$t14atk = "1";
$t14defi = "1";
$t14defc = "1";
$t14defcerco = "10";
$t14m = "120";
$t14o = "100";
$t14f = "30";
$t14c = "70";
$t14TEMPO = "00:12:30";
$t14tD = HtoS ($t14TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t14t = StoH(HtoS($t14TEMPO) - $t14tD) ;
$t14con = "1.8";
$t14v = 5*$troop_speed;
$t14p = "0";
$t14nome ="Spitzel";
$t14Rq = "5";
$t14Rcpm = "3";

$t15atk = "80";
$t15defi = "40";
$t15defc = "35";
$t15defcerco = "50";
$t15m = "160";
$t15o = "200";
$t15f = "120";
$t15c = "70";
$t15t = "00:22:30";
$t15con = "2.0";
$t15v = 4*$troop_speed;
$t15p = "70";
$t15nome ="Cavasack";

$t16atk = "95";
$t16defi = "30";
$t16defc = "45";
$t16defcerco = "40";
$t16m = "220";
$t16o = "180";
$t16f = "150";
$t16c = "140";
$t16t = "00:30:20";
$t16con = "2.3";
$t16v = 5*$troop_speed;
$t16p = "90";
$t16nome ="Cavaleiro relâmpago";

$t17atk = "140";
$t17defi = "80";
$t17defc = "95";
$t17defcerco = "100";
$t17m = "430";
$t17o = "350";
$t17f = "230";
$t17c = "160";
$t17t = "00:42:20";
$t17con = "2.8";
$t17v = 4.5*$troop_speed;
$t17p = "60";
$t17nome ="Cavaleiro mestre";

$t18atk = "60";
$t18defi = "20";
$t18defc = "30";
$t18defcerco = "50";
$t18m = "730";
$t18o = "690";
$t18f = "800";
$t18c = "130";
$t18t = "00:50:00";
$t18con = "0";
$t18v = 1.2*$troop_speed;
$t18p = "0";
$t18nome ="Aríete";

$t19atk = "70";
$t19defi = "25";
$t19defc = "30";
$t19defcerco = "50";
$t19m = "1050";
$t19o = "860";
$t19f = "760";
$t19c = "200";
$t19t = "01:12:00";
$t19con = "0";
$t19v = 0.8*$troop_speed;
$t19p = "0";
$t19nome ="Catapulta";





$t21atk = "35";
$t21defi = "20";
$t21defc = "15";
$t21defcerco = "45";
$t21m = "90";
$t21o = "45";
$t21f = "50";
$t21c = "30";
$t21t = "00:04:50";
$t21con = "0.7";
$t21v = 2.2*$troop_speed;
$t21p = "30";
$t21nome ="Lutador apache";

$t22atk = "15";
$t22defi = "45";
$t22defc = "35";
$t22defcerco = "70";
$t22m = "90";
$t22o = "60";
$t22f = "50";
$t22c = "40";
$t22t = "00:05:40";
$t22con = "0.7";
$t22v = 2*$troop_speed;
$t22p = "15";
$t22nome ="Defensor";

$t23atk = "45";
$t23defi = "25";
$t23defc = "35";
$t23defcerco = "65";
$t23m = "120";
$t23o = "75";
$t23f = "110";
$t23c = "60";
$t23t = "00:07:50";
$t23con = "0.9";
$t23v = 2.2*$troop_speed;
$t23p = "65";
$t23nome ="Guerreiro apache";

$t24atk = "1";
$t24defi = "1";
$t24defc = "1";
$t24defcerco = "10";
$t24m = "120";
$t24o = "100";
$t24f = "30";
$t24c = "70";
$t24t = "00:12:30";
$t24con = "1.8";
$t24v = 5*$troop_speed;
$t24p = "0";
$t24nome ="Explorador apache";

$t25atk = "80";
$t25defi = "40";
$t25defc = "35";
$t25defcerco = "50";
$t25m = "160";
$t25o = "200";
$t25f = "120";
$t25c = "70";
$t25t = "00:22:30";
$t25con = "2.0";
$t25v = 4*$troop_speed;
$t25p = "70";
$t25nome ="Cavaleiro Inde";

$t26atk = "95";
$t26defi = "30";
$t26defc = "45";
$t26defcerco = "40";
$t26m = "220";
$t26o = "180";
$t26f = "150";
$t26c = "140";
$t26t = "00:30:20";
$t26con = "2.3";
$t26v = 5*$troop_speed;
$t26p = "90";
$t26nome ="Cavaleiro trovão";

$t27atk = "140";
$t27defi = "80";
$t27defc = "95";
$t27defcerco = "100";
$t27m = "430";
$t27o = "350";
$t27f = "230";
$t27c = "160";
$t27t = "00:42:20";
$t27con = "2.8";
$t27v = 4.5*$troop_speed;
$t27p = "60";
$t27nome ="Cavaleiro apache";

$t28atk = "60";
$t28defi = "20";
$t28defc = "30";
$t28defcerco = "50";
$t28m = "730";
$t28o = "690";
$t28f = "800";
$t28c = "130";
$t28t = "00:50:00";
$t28con = "0";
$t28v = 3*$troop_speed;
$t28p = "0";
$t28nome ="Aríete apache";

$t29atk = "70";
$t29defi = "25";
$t29defc = "30";
$t29defcerco = "50";
$t29m = "1050";
$t29o = "860";
$t29f = "760";
$t29c = "200";
$t29t = "01:12:00";
$t29con = "0";
$t29v = 2.7*$troop_speed;
$t29p = "0";
$t29nome ="Catapulta portátil";





}
?>