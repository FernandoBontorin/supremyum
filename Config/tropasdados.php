<?php
include "config_sistema.php";
include "../engine/recursos.php";
include_once "../Config/formulas.php";


$consultaconfigCS = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linhaconfigCS = mysql_num_rows($consultaconfigCS);
while($linhaconfigCS = mysql_fetch_object($consultaconfigCS)) {

// NAO ESQUECER DE MUDAR O CALCULO DO TEMPO DE TODAS CAVALARIAS E CERCOS!!!

$p1nome = "Germans";
$p2nome = "Apaches";
$p3nome = "Aztecs";
$p4nome = "Byzantine";
$p5nome = "British";
$p6nome = "Cherokees";
$p7nome = "Spanish";
$p8nome = "French";
$p9nome = "Dutch";
$p10nome = "Incas";
$p11nome = "Italians";
$p12nome = "Portuguese";
$p13nome = "Russians";
$p14nome = "Swiss";
$p999nome = "SPARTAN!";
$p15nome = "Turks";




$t11atk = "30";
$t11defi = "18";
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
$t13defi = "35";
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
$t15defi = "45";
$t15defc = "35";
$t15defcerco = "50";
$t15m = "160";
$t15o = "200";
$t15f = "120";
$t15c = "70";
$t15TEMPO = "00:22:30";
//T15TD NÃO ESTÁ PRONTO! TODOS DE CAVALARIA ESTAO ERRADOS!----------------------------------------------------------------------------------------------.
$t15tD = HtoS($t15TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t15t = StoH(HtoS($t15TEMPO) - $t15tD) ;
$t15con = "2.0";
$t15v = 4*$troop_speed;
$t15p = "70";
$t15nome ="Cavasack";

$t16atk = "95";
$t16defi = "40";
$t16defc = "45";
$t16defcerco = "40";
$t16m = "220";
$t16o = "180";
$t16f = "150";
$t16c = "140";
$t16TEMPO = "00:30:20";
$t16tD = HtoS($t16TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t16t = StoH(HtoS($t16TEMPO) - $t16tD) ;
$t16con = "2.3";
$t16v = 5*$troop_speed;
$t16p = "90";
$t16nome ="Lightning Knight";

$t17atk = "140";
$t17defi = "80";
$t17defc = "95";
$t17defcerco = "100";
$t17m = "430";
$t17o = "350";
$t17f = "230";
$t17c = "160";
$t17TEMPO = "00:42:20";
$t17tD = HtoS($t17TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t17t = StoH(HtoS($t17TEMPO) - $t17tD) ;
$t17con = "2.8";
$t17v = 4.5*$troop_speed;
$t17p = "60";
$t17nome ="German Knight";

$t18atk = "60";
$t18defi = "50";
$t18defc = "30";
$t18defcerco = "50";
$t18m = "730";
$t18o = "690";
$t18f = "800";
$t18c = "130";
$t18TEMPO = "00:50:00";
$t18tD = HtoS($t18TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t18t = StoH(HtoS($t18TEMPO) - $t18tD) ;
$t18con = "0";
$t18v = 1.2*$troop_speed;
$t18p = "0";
$t18nome ="Widder";

$t19atk = "70";
$t19defi = "45";
$t19defc = "30";
$t19defcerco = "50";
$t19m = "1050";
$t19o = "860";
$t19f = "760";
$t19c = "200";
$t19TEMPO = "01:12:00";
$t19tD = HtoS($t19TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t19t = StoH(HtoS($t19TEMPO) - $t19tD) ;
$t19con = "0";
$t19v = 0.8*$troop_speed;
$t19p = "0";
$t19nome ="Katapult";





$t21atk = "35";
$t21defi = "50";
$t21defc = "15";
$t21defcerco = "45";
$t21m = "90";
$t21o = "45";
$t21f = "50";
$t21c = "30";
$t21TEMPO = "00:04:50";
$t21tD = HtoS($t21TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t21t = StoH(HtoS($t21TEMPO) - $t21tD) ;
$t21con = "0.7";
$t21v = 2.2*$troop_speed;
$t21p = "30";
$t21nome ="Apache Fighter";

$t22atk = "15";
$t22defi = "55";
$t22defc = "35";
$t22defcerco = "70";
$t22m = "90";
$t22o = "60";
$t22f = "50";
$t22c = "40";
$t22TEMPO = "00:05:40";
$t22tD = HtoS($t22TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t22t = StoH(HtoS($t22TEMPO) - $t22tD) ;
$t22con = "0.7";
$t22v = 2*$troop_speed;
$t22p = "15";
$t22nome ="Apache Defender";
$t22Rq = "3";
$t22Rcpm = "1";

$t23atk = "45";
$t23defi = "45";
$t23defc = "35";
$t23defcerco = "65";
$t23m = "120";
$t23o = "75";
$t23f = "110";
$t23c = "60";
$t23TEMPO = "00:07:50";
$t23tD = HtoS($t23TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t23t = StoH(HtoS($t23TEMPO) - $t23tD) ;
$t23con = "0.9";
$t23v = 2.2*$troop_speed;
$t23p = "65";
$t23nome ="Apache Warrior";
$t23Rq = "5";
$t23Rcpm = "3";

$t24atk = "5";
$t24defi = "1";
$t24defc = "1";
$t24defcerco = "15";
$t24m = "140";
$t24o = "80";
$t24f = "40";
$t24c = "60";
$t24TEMPO = "00:14:30";
$t24tD = HtoS($t24TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t24t = StoH(HtoS($t24TEMPO) - $t24tD) ;
$t24con = "1.5";
$t24v = 5.4*$troop_speed;
$t24p = "0";
$t24nome ="Apache Spy";
$t24Rq = "5";
$t24Rcpm = "3";

$t25atk = "65";
$t25defi = "65";
$t25defc = "35";
$t25defcerco = "50";
$t25m = "190";
$t25o = "140";
$t25f = "130";
$t25c = "60";
$t25TEMPO = "00:24:30";
$t25tD = HtoS($t25TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t25t = StoH(HtoS($t25TEMPO) - $t25tD) ;
$t25con = "1.6";
$t25v = 4.2*$troop_speed;
$t25p = "50";
$t25nome ="Inde Knight";

$t26atk = "85";
$t26defi = "75";
$t26defc = "45";
$t26defcerco = "50";
$t26m = "250";
$t26o = "140";
$t26f = "160";
$t26c = "120";
$t26TEMPO = "00:25:10";
$t26tD = HtoS($t26TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t26t = StoH(HtoS($t26TEMPO) - $t26tD) ;
$t26con = "2";
$t26v = 6*$troop_speed;
$t26p = "100";
$t26nome ="Thunder Knight";

$t27atk = "115";
$t27defi = "90";
$t27defc = "45";
$t27defcerco = "100";
$t27m = "470";
$t27o = "300";
$t27f = "250";
$t27c = "90";
$t27TEMPO = "00:43:45";
$t27tD = HtoS($t27TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t27t = StoH(HtoS($t27TEMPO) - $t27tD) ;
$t27con = "2.2";
$t27v = 4.3*$troop_speed;
$t27p = "50";
$t27nome ="Apache Knight";

$t28atk = "40";
$t28defi = "50";
$t28defc = "30";
$t28defcerco = "50";
$t28m = "630";
$t28o = "450";
$t28f = "700";
$t28c = "80";
$t28TEMPO = "00:35:00";
$t28tD = HtoS($t28TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t28t = StoH(HtoS($t28TEMPO) - $t28tD) ;
$t28con = "0";
$t28v = 2.4*$troop_speed;
$t28p = "0";
$t28nome ="Apache Ram";

$t29atk = "55";
$t29defi = "50";
$t29defc = "30";
$t29defcerco = "50";
$t29m = "760";
$t29o = "500";
$t29f = "680";
$t29c = "140";
$t29TEMPO = "01:00:00";
$t29tD = HtoS($t29TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t29t = StoH(HtoS($t29TEMPO) - $t29tD) ;
$t29con = "0";
$t29v = 2.1*$troop_speed;
$t29p = "0";
$t29nome ="Apache Catapult";








$t31atk = "40";
$t31defi = "5";
$t31defc = "4";
$t31defcerco = "30";
$t31m = "65";
$t31o = "30";
$t31f = "40";
$t31c = "25";
$t31TEMPO = "00:04:20";
$t31tD = HtoS($t11TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t31t = StoH(HtoS($t11TEMPO) - $t11tD) ;
$t31con = "1";
$t31v = 2.5*$troop_speed;
$t31p = "30";
$t31nome = "Pahlawan";

$t32atk = "25";
$t32defi = "35";
$t32defc = "40";
$t32defcerco = "50";
$t32m = "85";
$t32o = "35";
$t32f = "40";
$t32c = "40";
$t32TEMPO = "00:07:00";
$t32tD = HtoS ($t12TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t32t = StoH(HtoS($t12TEMPO) - $t12tD) ;
$t32con = "1";
$t32v = 1.9*$troop_speed;
$t32p = "15";
$t32nome = "Pertahanan";
$t32Rq = "3";
$t32Rcpm = "1";

$t33atk = "75";
$t33defi = "15";
$t33defc = "20";
$t33defcerco = "50";
$t33m = "85";
$t33o = "45";
$t33f = "70";
$t33c = "60";
$t33TEMPO = "00:07:30";
$t33tD = HtoS ($t13TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t33t = StoH(HtoS($t13TEMPO) - $t13tD) ;
$t33con = "1.5";
$t33v = 2.7*$troop_speed;
$t33p = "50";
$t33nome ="Tentera";
$t33Rq = "5";
$t33Rcpm = "3";

$t34atk = "8";
$t34defi = "1";
$t34defc = "1";
$t34defcerco = "10";
$t34m = "110";
$t34o = "65";
$t34f = "20";
$t34c = "50";
$t34TEMPO = "00:12:00";
$t34tD = HtoS ($t14TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t34t = StoH(HtoS($t14TEMPO) - $t14tD) ;
$t34con = "2.3";
$t34v = 5.6*$troop_speed;
$t34p = "0";
$t34nome ="Perisik";
$t34Rq = "5";
$t34Rcpm = "3";

$t35atk = "80";
$t35defi = "30";
$t35defc = "25";
$t35defcerco = "30";
$t35m = "150";
$t35o = "155";
$t35f = "80";
$t35c = "90";
$t35TEMPO = "00:20:30";
$t35tD = HtoS($t35TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t35t = StoH(HtoS($t35TEMPO) - $t35tD) ;
$t35con = "2.8";
$t35v = 4.3*$troop_speed;
$t35p = "70";
$t35nome ="Kuda";

$t36atk = "105";
$t36defi = "40";
$t36defc = "25";
$t36defcerco = "40";
$t36m = "200";
$t36o = "140";
$t36f = "120";
$t36c = "140";
$t36TEMPO = "00:26:20";
$t36tD = HtoS($t36TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t36t = StoH(HtoS($t36TEMPO) - $t36tD) ;
$t36con = "2.9";
$t36v = 5.8*$troop_speed;
$t36p = "70";
$t36nome ="Knight Kilat";

$t37atk = "165";
$t37defi = "60";
$t37defc = "65";
$t37defcerco = "80";
$t37m = "390";
$t37o = "300";
$t37f = "200";
$t37c = "130";
$t37TEMPO = "00:40:20";
$t37tD = HtoS($t37TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t37t = StoH(HtoS($t37TEMPO) - $t37tD) ;
$t37con = "3.6";
$t37v = 5*$troop_speed;
$t37p = "60";
$t37nome ="Knight Maju";

$t38atk = "80";
$t38defi = "40";
$t38defc = "60";
$t38defcerco = "30";
$t38m = "650";
$t38o = "550";
$t38f = "400";
$t38c = "180";
$t38TEMPO = "00:42:00";
$t38tD = HtoS($t38TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t38t = StoH(HtoS($t38TEMPO) - $t38tD) ;
$t38con = "0";
$t38v = 1.8*$troop_speed;
$t38p = "0";
$t38nome ="Aztec Ram";

$t39atk = "70";
$t39defi = "25";
$t39defc = "30";
$t39defcerco = "50";
$t39m = "700";
$t39o = "700";
$t39f = "760";
$t39c = "200";
$t39TEMPO = "01:12:00";
$t39tD = HtoS($t39TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t39t = StoH(HtoS($t39TEMPO) - $t39tD) ;
$t39con = "0";
$t39v = 0.8*$troop_speed;
$t39p = "0";
$t39nome ="Aztec Catapult";












$t41atk = "40";
$t41defi = "20";
$t41defc = "30";
$t41defcerco = "40";
$t41m = "120";
$t41o = "95";
$t41f = "130";
$t41c = "60";
$t41TEMPO = "00:07:30";
$t41tD = HtoS($t41TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t41t = StoH(HtoS($t41TEMPO) - $t41tD) ;
$t41con = "1.1";
$t41v = 1.9*$troop_speed;
$t41p = "50";
$t41nome = "Soldat";

$t42atk = "25";
$t42defi = "60";
$t42defc = "55";
$t42defcerco = "100";
$t42m = "160";
$t42o = "120";
$t42f = "100";
$t42c = "50";
$t42TEMPO = "00:10:00";
$t42tD = HtoS ($t42TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t42t = StoH(HtoS($t42TEMPO) - $t42tD) ;
$t42con = "1.4";
$t42v = 1.6*$troop_speed;
$t42p = "25";
$t42nome = "Aparantor";
$t42Rq = "3";
$t42Rcpm = "1";

$t43atk = "85";
$t43defi = "35";
$t43defc = "40";
$t43defcerco = "70";
$t43m = "230";
$t43o = "150";
$t43f = "160";
$t43c = "100";
$t43TEMPO = "00:12:30";
$t43tD = HtoS ($t43TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t43t = StoH(HtoS($t43TEMPO) - $t43tD) ;
$t43con = "1.8";
$t43v = 2.2*$troop_speed;
$t43p = "40";
$t43nome ="Ucigas";
$t43Rq = "5";
$t43Rcpm = "3";

$t44atk = "10";
$t44defi = "10";
$t44defc = "10";
$t44defcerco = "10";
$t44m = "155";
$t44o = "140";
$t44f = "70";
$t44c = "60";
$t44TEMPO = "00:12:00";
$t44tD = HtoS ($t44TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t44t = StoH(HtoS($t44TEMPO) - $t44tD) ;
$t44con = "2";
$t44v = 5.5*$troop_speed;
$t44p = "0";
$t44nome ="Spion";
$t44Rq = "5";
$t44Rcpm = "3";

$t45atk = "120";
$t45defi = "65";
$t45defc = "50";
$t45defcerco = "50";
$t45m = "280";
$t45o = "280";
$t45f = "190";
$t45c = "80";
$t45TEMPO = "00:25:10";
$t45tD = HtoS($t45TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t45t = StoH(HtoS($t45TEMPO) - $t45tD) ;
$t45con = "2.8";
$t45v = 4.5*$troop_speed;
$t45p = "60";
$t45nome ="Cavaler";

$t46atk = "115";
$t46defi = "40";
$t46defc = "45";
$t46defcerco = "40";
$t46m = "300";
$t46o = "290";
$t46f = "200";
$t46c = "230";
$t46TEMPO = "00:33:00";
$t46tD = HtoS($t46TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t46t = StoH(HtoS($t46TEMPO) - $t46tD) ;
$t46con = "3.8";
$t46v = 7.5*$troop_speed;
$t46p = "70";
$t46nome ="Fulger Knight";

$t47atk = "180";
$t47defi = "60";
$t47defc = "65";
$t47defcerco = "80";
$t47m = "530";
$t47o = "380";
$t47f = "270";
$t47c = "200";
$t47TEMPO = "00:45:00";
$t47tD = HtoS($t47TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t47t = StoH(HtoS($t47TEMPO) - $t47tD) ;
$t47con = "2.8";
$t47v = 5*$troop_speed;
$t47p = "60";
$t47nome ="Maestru Knight";

$t48atk = "90";
$t48defi = "50";
$t48defc = "20";
$t48defcerco = "50";
$t48m = "630";
$t48o = "600";
$t48f = "700";
$t48c = "110";
$t48TEMPO = "00:35:00";
$t48tD = HtoS($t48TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t48t = StoH(HtoS($t48TEMPO) - $t48tD) ;
$t48con = "0";
$t48v = 1.5*$troop_speed;
$t48p = "0";
$t48nome ="Berbec";

$t49atk = "80";
$t49defi = "45";
$t49defc = "40";
$t49defcerco = "50";
$t49m = "850";
$t49o = "800";
$t49f = "630";
$t49c = "250";
$t49TEMPO = "01:00:00";
$t49tD = HtoS($t49TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t49t = StoH(HtoS($t49TEMPO) - $t49tD) ;
$t49con = "0";
$t49v = 0.9*$troop_speed;
$t49p = "0";
$t49nome ="Trabuco";








$t51atk = "40";
$t51defi = "20";
$t51defc = "12";
$t51defcerco = "60";
$t51m = "80";
$t51o = "45";
$t51f = "80";
$t51c = "30";
$t51TEMPO = "00:04:50";
$t51tD = HtoS($t11TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t51t = StoH(HtoS($t11TEMPO) - $t11tD) ;
$t51con = "0.5";
$t51v = 2.1*$troop_speed;
$t51p = "45";
$t51nome = "Musketeer";

$t52atk = "20";
$t52defi = "50";
$t52defc = "55";
$t52defcerco = "60";
$t52m = "130";
$t52o = "60";
$t52f = "60";
$t52c = "40";
$t52TEMPO = "00:06:30";
$t52tD = HtoS ($t12TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t52t = StoH(HtoS($t12TEMPO) - $t12tD) ;
$t52con = "0.8";
$t52v = 1.8*$troop_speed;
$t52p = "15";
$t52nome = "Imperial Guard";
$t52Rq = "3";
$t52Rcpm = "1";

$t53atk = "65";
$t53defi = "45";
$t53defc = "30";
$t53defcerco = "60";
$t53m = "140";
$t53o = "70";
$t53f = "100";
$t53c = "90";
$t53TEMPO = "00:08:50";
$t53tD = HtoS ($t13TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t53t = StoH(HtoS($t13TEMPO) - $t13tD) ;
$t53con = "1.1";
$t53v = 2*$troop_speed;
$t53p = "50";
$t53nome ="Imperial Warrior";
$t53Rq = "5";
$t53Rcpm = "3";

$t54atk = "1";
$t54defi = "1";
$t54defc = "1";
$t54defcerco = "10";
$t54m = "130";
$t54o = "90";
$t54f = "40";
$t54c = "60";
$t54TEMPO = "00:12:00";
$t54tD = HtoS ($t14TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t54t = StoH(HtoS($t14TEMPO) - $t14tD) ;
$t54con = "1.6";
$t54v = 4.6*$troop_speed;
$t54p = "0";
$t54nome ="Emissary";
$t54Rq = "5";
$t54Rcpm = "3";

$t55atk = "85";
$t55defi = "50";
$t55defc = "40";
$t55defcerco = "60";
$t55m = "190";
$t55o = "220";
$t55f = "130";
$t55c = "80";
$t55TEMPO = "00:24:30";
$t55tD = HtoS($t15TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t55t = StoH(HtoS($t15TEMPO) - $t15tD) ;
$t55con = "2.4";
$t55v = 4.2*$troop_speed;
$t55p = "65";
$t55nome ="Light Hussar";

$t56atk = "100";
$t56defi = "45";
$t56defc = "45";
$t56defcerco = "30";
$t56m = "240";
$t56o = "190";
$t56f = "130";
$t56c = "190";
$t56TEMPO = "00:30:50";
$t56tD = HtoS($t16TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t56t = StoH(HtoS($t16TEMPO) - $t16tD) ;
$t56con = "2.6";
$t56v = 5.2*$troop_speed;
$t56p = "75";
$t56nome ="Lightning Hussar";

$t57atk = "155";
$t57defi = "85";
$t57defc = "65";
$t57defcerco = "75";
$t57m = "460";
$t57o = "380";
$t57f = "220";
$t57c = "120";
$t57TEMPO = "00:40:00";
$t57tD = HtoS($t17TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t57t = StoH(HtoS($t17TEMPO) - $t17tD) ;
$t57con = "2.8";
$t57v = 4.3*$troop_speed;
$t57p = "65";
$t57nome ="Heavy Hussar";

$t58atk = "70";
$t58defi = "40";
$t58defc = "30";
$t58defcerco = "30";
$t58m = "700";
$t58o = "600";
$t58f = "730";
$t58c = "330";
$t58TEMPO = "00:51:00";
$t58tD = HtoS($t18TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t58t = StoH(HtoS($t18TEMPO) - $t18tD) ;
$t58con = "0";
$t58v = 1.3*$troop_speed;
$t58p = "0";
$t58nome ="Widder";

$t59atk = "75";
$t59defi = "50";
$t59defc = "35";
$t59defcerco = "55";
$t59m = "1150";
$t59o = "900";
$t59f = "800";
$t59c = "230";
$t59TEMPO = "01:12:30";
$t59tD = HtoS($t19TEMPO) / 100 * ($linhaconfigCS->quartelnv) * 2;
$t59t = StoH(HtoS($t19TEMPO) - $t19tD) ;
$t59con = "0";
$t59v = 0.9*$troop_speed;
$t59p = "0";
$t59nome ="Katapult";






$mediaatk1 = (
$t11atk + 
$t12atk + 
$t13atk + 
$t14atk + 
$t15atk + 
$t16atk + 
$t17atk + 
$t18atk + 
$t19atk) / 9;

$mediaatk2 = (
$t21atk + 
$t22atk + 
$t23atk + 
$t24atk + 
$t25atk + 
$t26atk + 
$t27atk + 
$t28atk + 
$t29atk) / 9;

$mediaatk3 = (
$t31atk + 
$t32atk + 
$t33atk + 
$t34atk + 
$t35atk + 
$t36atk + 
$t37atk + 
$t38atk + 
$t39atk) / 9;

$mediaatk4 = (
$t41atk + 
$t42atk + 
$t43atk + 
$t44atk + 
$t45atk + 
$t46atk + 
$t47atk + 
$t48atk + 
$t49atk) / 9;

$mediaatk5 = (
$t51atk + 
$t52atk + 
$t53atk + 
$t54atk + 
$t55atk + 
$t56atk + 
$t57atk + 
$t58atk + 
$t59atk) / 9;





$mediadefi1 = (
$t11defi +
$t12defi +
$t13defi +
$t14defi +
$t15defi +
$t16defi +
$t17defi +
$t18defi +
$t19defi) / 9;

$mediadefi2 = (
$t21defi +
$t22defi +
$t23defi +
$t24defi +
$t25defi +
$t26defi +
$t27defi +
$t28defi +
$t29defi) / 9;

$mediadefi3 = (
$t31defi +
$t32defi +
$t33defi +
$t34defi +
$t35defi +
$t36defi +
$t37defi +
$t38defi +
$t39defi) / 9;

$mediadefi4 = (
$t41defi +
$t42defi +
$t43defi +
$t44defi +
$t45defi +
$t46defi +
$t47defi +
$t48defi +
$t49defi) / 9;

$mediadefi5 = (
$t51defi +
$t52defi +
$t53defi +
$t54defi +
$t55defi +
$t56defi +
$t57defi +
$t58defi +
$t59defi) / 9;





$mediadefc1 = (
$t11defc +
$t12defc +
$t13defc +
$t14defc +
$t15defc +
$t16defc +
$t17defc +
$t18defc +
$t19defc) / 9;

$mediadefc2 = (
$t21defc +
$t22defc +
$t23defc +
$t24defc +
$t25defc +
$t26defc +
$t27defc +
$t28defc +
$t29defc) / 9;

$mediadefc3 = (
$t31defc +
$t32defc +
$t33defc +
$t34defc +
$t35defc +
$t36defc +
$t37defc +
$t38defc +
$t39defc) / 9;


$mediadefc4 = (
$t41defc +
$t42defc +
$t43defc +
$t44defc +
$t45defc +
$t46defc +
$t47defc +
$t48defc +
$t49defc) / 9;

$mediadefc5 = (
$t51defc +
$t52defc +
$t53defc +
$t54defc +
$t55defc +
$t56defc +
$t57defc +
$t58defc +
$t59defc) / 9;




$mediadefcerco1 = (
$t11defcerco +
$t12defcerco +
$t13defcerco +
$t14defcerco +
$t15defcerco +
$t16defcerco +
$t17defcerco +
$t18defcerco +
$t19defcerco) / 9;

$mediadefcerco2 = (
$t21defcerco +
$t22defcerco +
$t23defcerco +
$t24defcerco +
$t25defcerco +
$t26defcerco +
$t27defcerco +
$t28defcerco +
$t29defcerco) / 9;

$mediadefcerco3 = (
$t31defcerco +
$t32defcerco +
$t33defcerco +
$t34defcerco +
$t35defcerco +
$t36defcerco +
$t37defcerco +
$t38defcerco +
$t39defcerco) / 9;

$mediadefcerco4 = (
$t41defcerco +
$t42defcerco +
$t43defcerco +
$t44defcerco +
$t45defcerco +
$t46defcerco +
$t47defcerco +
$t48defcerco +
$t49defcerco) / 9;

$mediadefcerco5 = (
$t51defcerco +
$t52defcerco +
$t53defcerco +
$t54defcerco +
$t55defcerco +
$t56defcerco +
$t57defcerco +
$t58defcerco +
$t59defcerco) / 9;





$avrg1 =($mediaatk1 + $mediadefi1 + $mediadefc1 + $mediadefcerco1) / 4;
$avrg2 =($mediaatk2 + $mediadefi2 + $mediadefc2 + $mediadefcerco2) / 4;
$avrg3 =($mediaatk3 + $mediadefi3 + $mediadefc3 + $mediadefcerco3) / 4;
$avrg4 =($mediaatk4 + $mediadefi4 + $mediadefc4 + $mediadefcerco4) / 4;
$avrg5 =($mediaatk5 + $mediadefi5 + $mediadefc5 + $mediadefcerco5) / 4;


$mediam1 = (
$t11m +
$t12m +
$t13m +
$t14m +
$t15m +
$t16m +
$t17m +
$t18m +
$t19m) / 9;

$mediam2 = (
$t21m +
$t22m +
$t23m +
$t24m +
$t25m +
$t26m +
$t27m +
$t28m +
$t29m) / 9;

$mediam3 = (
$t31m +
$t32m +
$t33m +
$t34m +
$t35m +
$t36m +
$t37m +
$t38m +
$t39m) / 9;

$mediam4 = (
$t41m +
$t42m +
$t43m +
$t44m +
$t45m +
$t46m +
$t47m +
$t48m +
$t49m) / 9;

$mediam5 = (
$t51m +
$t52m +
$t53m +
$t54m +
$t55m +
$t56m +
$t57m +
$t58m +
$t59m) / 9;





$mediao1 = (
$t11o +
$t12o +
$t13o +
$t14o +
$t15o +
$t16o +
$t17o +
$t18o +
$t19o) / 9;

$mediao2 = (
$t21o +
$t22o +
$t23o +
$t24o +
$t25o +
$t26o +
$t27o +
$t28o +
$t29o) / 9;

$mediao3 = (
$t31o +
$t32o +
$t33o +
$t34o +
$t35o +
$t36o +
$t37o +
$t38o +
$t39o) / 9;

$mediao4 = (
$t41o +
$t42o +
$t43o +
$t44o +
$t45o +
$t46o +
$t47o +
$t48o +
$t49o) / 9;

$mediao5 = (
$t51o +
$t52o +
$t53o +
$t54o +
$t55o +
$t56o +
$t57o +
$t58o +
$t59o) / 9;




$mediaf1 = (
$t11f +
$t12f +
$t13f +
$t14f +
$t15f +
$t16f +
$t17f +
$t18f +
$t19f) / 9;

$mediaf2 = (
$t21f +
$t22f +
$t23f +
$t24f +
$t25f +
$t26f +
$t27f +
$t28f +
$t29f) / 9;

$mediaf3 = (
$t31f +
$t32f +
$t33f +
$t34f +
$t35f +
$t36f +
$t37f +
$t38f +
$t39f) / 9;

$mediaf4 = (
$t41f +
$t42f +
$t43f +
$t44f +
$t45f +
$t46f +
$t47f +
$t48f +
$t49f) / 9;

$mediaf5 = (
$t51f +
$t52f +
$t53f +
$t54f +
$t55f +
$t56f +
$t57f +
$t58f +
$t59f) / 9;




$mediac1 = (
$t11c +
$t12c +
$t13c +
$t14c +
$t15c +
$t16c +
$t17c +
$t18c +
$t19c) / 9;

$mediac2 = (
$t21c +
$t22c +
$t23c +
$t24c +
$t25c +
$t26c +
$t27c +
$t28c +
$t29c) / 9;

$mediac3 = (
$t31c +
$t32c +
$t33c +
$t34c +
$t35c +
$t36c +
$t37c +
$t38c +
$t39c) / 9;

$mediac4 = (
$t41c +
$t42c +
$t43c +
$t44c +
$t45c +
$t46c +
$t47c +
$t48c +
$t49c) / 9;

$mediac5 = (
$t51c +
$t52c +
$t53c +
$t54c +
$t55c +
$t56c +
$t57c +
$t58c +
$t59c) / 9;




$avrgcost1 = ($mediam1 + $mediao1 + $mediaf1 + $mediac1) / 4;
$avrgcost2 = ($mediam2 + $mediao2 + $mediaf2 + $mediac3) / 4;
$avrgcost3 = ($mediam3 + $mediao3 + $mediaf3 + $mediac3) / 4;
$avrgcost4 = ($mediam4 + $mediao4 + $mediaf4 + $mediac4) / 4;
$avrgcost5 = ($mediam5 + $mediao5 + $mediaf5 + $mediac5) / 4;





$medtime1 = 
((HtoS($t11TEMPO) / 60) +
(HtoS($t12TEMPO) / 60) +
(HtoS($t13TEMPO) / 60) +
(HtoS($t14TEMPO) / 60) +
(HtoS($t15TEMPO) / 60) +
(HtoS($t16TEMPO) / 60) +
(HtoS($t17TEMPO) / 60) +
(HtoS($t18TEMPO) / 60) +
(HtoS($t19TEMPO) / 60)) / 9; 

$medtime2 = 
((HtoS($t21TEMPO) / 60) +
(HtoS($t22TEMPO) / 60) +
(HtoS($t23TEMPO) / 60) +
(HtoS($t24TEMPO) / 60) +
(HtoS($t25TEMPO) / 60) +
(HtoS($t26TEMPO) / 60) +
(HtoS($t27TEMPO) / 60) +
(HtoS($t28TEMPO) / 60) +
(HtoS($t29TEMPO) / 60)) / 9; 

$medtime3 = 
((HtoS($t31TEMPO) / 60) +
(HtoS($t32TEMPO) / 60) +
(HtoS($t33TEMPO) / 60) +
(HtoS($t34TEMPO) / 60) +
(HtoS($t35TEMPO) / 60) +
(HtoS($t36TEMPO) / 60) +
(HtoS($t37TEMPO) / 60) +
(HtoS($t38TEMPO) / 60) +
(HtoS($t39TEMPO) / 60)) / 9; 

$medtime4 = 
((HtoS($t41TEMPO) / 60) +
(HtoS($t42TEMPO) / 60) +
(HtoS($t43TEMPO) / 60) +
(HtoS($t44TEMPO) / 60) +
(HtoS($t45TEMPO) / 60) +
(HtoS($t46TEMPO) / 60) +
(HtoS($t47TEMPO) / 60) +
(HtoS($t48TEMPO) / 60) +
(HtoS($t49TEMPO) / 60)) / 9; 

$medtime5 = 
((HtoS($t51TEMPO) / 60) +
(HtoS($t52TEMPO) / 60) +
(HtoS($t53TEMPO) / 60) +
(HtoS($t54TEMPO) / 60) +
(HtoS($t55TEMPO) / 60) +
(HtoS($t56TEMPO) / 60) +
(HtoS($t57TEMPO) / 60) +
(HtoS($t58TEMPO) / 60) +
(HtoS($t59TEMPO) / 60)) / 9; 






$medcon1 = (
$t11con +
$t12con +
$t13con +
$t14con +
$t15con +
$t16con +
$t17con +
$t18con +
$t19con) / 9;

$medcon2 = (
$t21con +
$t22con +
$t23con +
$t24con +
$t25con +
$t26con +
$t27con +
$t28con +
$t29con) / 9;

$medcon3 = (
$t31con +
$t32con +
$t33con +
$t34con +
$t35con +
$t36con +
$t37con +
$t38con +
$t39con) / 9;

$medcon4 = (
$t41con +
$t42con +
$t43con +
$t44con +
$t45con +
$t46con +
$t47con +
$t48con +
$t49con) / 9;

$medcon5 = (
$t51con +
$t52con +
$t53con +
$t54con +
$t55con +
$t56con +
$t57con +
$t58con +
$t59con) / 9;





$avrgv1 = (
$t11v +
$t12v +
$t13v +
$t14v +
$t15v +
$t16v +
$t17v +
$t18v +
$t19v) / 9;

$avrgv2 = (
$t21v +
$t22v +
$t23v +
$t24v +
$t25v +
$t26v +
$t27v +
$t28v +
$t29v) / 9;

$avrgv3 = (
$t31v +
$t32v +
$t33v +
$t34v +
$t35v +
$t36v +
$t37v +
$t38v +
$t39v) / 9;

$avrgv4 = (
$t41v +
$t42v +
$t43v +
$t44v +
$t45v +
$t46v +
$t47v +
$t48v +
$t49v) / 9;

$avrgv5 = (
$t51v +
$t52v +
$t53v +
$t54v +
$t55v +
$t56v +
$t57v +
$t58v +
$t59v) / 9;








$avrgl1 = (
$t11p +
$t12p +
$t13p +
$t14p +
$t15p +
$t16p +
$t17p +
$t18p +
$t19p) / 9;

$avrgl2 = (
$t21p +
$t22p +
$t23p +
$t24p +
$t25p +
$t26p +
$t27p +
$t28p +
$t29p) / 9;

$avrgl3 = (
$t31p +
$t32p +
$t33p +
$t34p +
$t35p +
$t36p +
$t37p +
$t38p +
$t39p) / 9;

$avrgl4 = (
$t41p +
$t42p +
$t43p +
$t44p +
$t45p +
$t46p +
$t47p +
$t48p +
$t49p) / 9;

$avrgl5 = (
$t51p +
$t52p +
$t53p +
$t54p +
$t55p +
$t56p +
$t57p +
$t58p +
$t59p) / 9;





$avrgrpoints1 = (
$avrgl1 + $avrgv1 - $medcon1 - $medtime1);

$avrgrpoints2 = (
$avrgl2 + $avrgv2 - $medcon2 - $medtime2);

$avrgrpoints3 = (
$avrgl3 + $avrgv3 - $medcon3 - $medtime3);

$avrgrpoints4 = (
$avrgl4 + $avrgv4 - $medcon4 - $medtime4);

$avrgrpoints5 = (
$avrgl5 + $avrgv5 - $medcon5 - $medtime5);






}

?>