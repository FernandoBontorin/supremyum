<center>

<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";

include "../Config/formulas.php";



 $consulta3080 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha5980 = mysql_num_rows($consulta3080); 
 while ($linha5980 = mysql_fetch_object($consulta3080)) { 

If ($linha5980->ferrotrabalhadores != 0) {
echo "<font color=red><b>Este edifício já está sendo evoluído</font></b>";
} else {


$nivelferro = $linha5980->nivelferro;
$madeiraestoque = $linha5980->madeira;
$ouroestoque = $linha5980->ouro;
$ferroestoque = $linha5980->ferro;
$comidaestoque = $linha5980->comida;

$popdisponivel = $linha5980->popdisponivel;


$upferromadeira = $formulamadeiraf;
$upferroouro = $formulaourof;
$upferroferro = $formulaferrof;
$upferrocomida = $formulacomidaf;
$upferrotempo = $formulatempof;

date_default_timezone_set('America/Los_Angeles');

$error = 0;

If ($popdisponivel < $nivelferro + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
$error = 1;
}
If ($upferromadeira > $madeiraestoque) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
$error = 1;
}
If ($upferroouro > $ouroestoque) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
$error = 1;
}
If ($upferroferro > $ferroestoque) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
$error = 1;
}
If ($upferrocomida > $comidaestoque) {
echo "<font color=red><b>Comida Insuficiente!</font></b>";
$error = 1;
}


If ($error == 1) {
echo "<font color=red><b>Ação impossível de ser concluída</font></b>";
} else {

$updatetrabalhadores = mysql_query("update aldeias set popdisponivel = $popdisponivel - ($nivelferro + 1) where dono = '$login_usuario'");
$updatetrabalhadores2 = mysql_query("update aldeias set ferrotrabalhadores = $nivelferro + 1 where dono = '$login_usuario'");








$updatemadeiraferroup = mysql_query("update aldeias set madeira = $madeiraestoque - $upferromadeira where dono = '$login_usuario'");
$updateouroferroup = mysql_query("update aldeias set ouro = $ouroestoque - $upferroouro where dono = '$login_usuario'");
$updateferroferroup = mysql_query("update aldeias set ferro = $ferroestoque - $upferroferro where dono = '$login_usuario'");
$updatecomidaferroup = mysql_query("update aldeias set comida = $comidaestoque - $upferrocomida where dono = '$login_usuario'");

$consulta552 = mysql_query("select * from config where time ");
 $linha552 = mysql_num_rows($consulta552); 
 while ($linha552 = mysql_fetch_object($consulta552)) { 




$tempoparaup = HtoS($upferrotempo) ;




$timeagora = $linha552->time;


$tempodestino = $timeagora + $tempoparaup;
$updateferrodestino = mysql_query("update aldeias set ferrotempodestino = $tempodestino where dono = '$login_usuario'");


$checkferrotempo = $linha5980->ferrotempodestino;

If ($checkferrotempo == 0) {


If ($updateferrodestino) {
echo "<font color=green><b>Ação realizada com sucesso!</font></b>";



}

}








}}
}}

?>

</center>





