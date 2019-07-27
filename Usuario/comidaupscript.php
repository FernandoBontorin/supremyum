<center>

<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";

include_once "../Config/formulas.php";



 $consulta3080 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha5980 = mysql_num_rows($consulta3080); 
 while ($linha5980 = mysql_fetch_object($consulta3080)) { 

If ($linha5980->comidatrabalhadores != 0) {
echo "<font color=red><b>This building is already being built!</font></b>";
} else {


$nivelcomida = $linha5980->nivelcomida;
$madeiraestoque = $linha5980->madeira;
$ouroestoque = $linha5980->ouro;
$ferroestoque = $linha5980->ferro;
$comidaestoque = $linha5980->comida;

$popdisponivel = $linha5980->popdisponivel;


$upcomidamadeira = $formulamadeirac;
$upcomidaouro = $formulaouroc;
$upcomidaferro = $formulaferroc;
$upcomidacomida = $formulacomidac;
$upcomidatempo = $formulatempoc;

date_default_timezone_set('America/Los_Angeles');

$error = 0;

If ($popdisponivel < $nivelcomida + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
$error = 1;
}
If ($upcomidamadeira > $madeiraestoque) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
$error = 1;
}
If ($upcomidaouro > $ouroestoque) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
$error = 1;
}
If ($upcomidaferro > $ferroestoque) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
$error = 1;
}
If ($upcomidacomida > $comidaestoque) {
echo "<font color=red><b>Comida Insuficiente!</font></b>";
$error = 1;
}


If ($error == 1) {
echo "<font color=red><b>Ação impossível de ser concluída</font></b>";
} else {

$updatetrabalhadores = mysql_query("update aldeias set popdisponivel = $popdisponivel - ($nivelcomida + 1) where dono = '$login_usuario'");
$updatetrabalhadores2 = mysql_query("update aldeias set comidatrabalhadores = $nivelcomida + 1 where dono = '$login_usuario'");








$updatemadeiracomidaup = mysql_query("update aldeias set madeira = $madeiraestoque - $upcomidamadeira where dono = '$login_usuario'");
$updateourocomidaup = mysql_query("update aldeias set ouro = $ouroestoque - $upcomidaouro where dono = '$login_usuario'");
$updateferrocomidaup = mysql_query("update aldeias set ferro = $ferroestoque - $upcomidaferro where dono = '$login_usuario'");
$updatecomidacomidaup = mysql_query("update aldeias set comida = $comidaestoque - $upcomidacomida where dono = '$login_usuario'");

$consulta552 = mysql_query("select * from config where time ");
 $linha552 = mysql_num_rows($consulta552); 
 while ($linha552 = mysql_fetch_object($consulta552)) { 




$tempoparaup = HtoS($upcomidatempo) ;




$timeagora = $linha552->time;


$tempodestino = $timeagora + $tempoparaup;
$updatecomidadestino = mysql_query("update aldeias set comidatempodestino = $tempodestino where dono = '$login_usuario'");


$checkcomidatempo = $linha5980->comidatempodestino;

If ($checkcomidatempo == 0) {


If ($updatecomidadestino) {
echo "<font color=green><b>Ação realizada com sucesso!</font></b>";



}

}








}}
}}

?>

</center>





