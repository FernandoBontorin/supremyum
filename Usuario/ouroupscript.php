<center>

<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";

include_once "../Config/formulas.php";



 $consulta3080 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha5980 = mysql_num_rows($consulta3080); 
 while ($linha5980 = mysql_fetch_object($consulta3080)) { 

If ($linha5980->ourotrabalhadores != 0) {
echo "<font color=red><b>This building is already being built!</font></b>";
} else {


$nivelouro = $linha5980->nivelouro;
$madeiraestoque = $linha5980->madeira;
$ouroestoque = $linha5980->ouro;
$ferroestoque = $linha5980->ferro;
$comidaestoque = $linha5980->comida;

$popdisponivel = $linha5980->popdisponivel;


$upouromadeira = $formulamadeirao;
$upouroouro = $formulaouroo;
$upouroferro = $formulaferroo;
$upourocomida = $formulacomidao;
$upourotempo = $formulatempoo;

date_default_timezone_set('America/Los_Angeles');

$error = 0;

If ($popdisponivel < $nivelouro + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
$error = 1;
}
If ($upouromadeira > $madeiraestoque) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
$error = 1;
}
If ($upouroouro > $ouroestoque) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
$error = 1;
}
If ($upouroferro > $ferroestoque) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
$error = 1;
}
If ($upourocomida > $comidaestoque) {
echo "<font color=red><b>Comida Insuficiente!</font></b>";
$error = 1;
}


If ($error == 1) {
echo "<font color=red><b>Ação impossível de ser concluída</font></b>";
} else {

$updatetrabalhadores = mysql_query("update aldeias set popdisponivel = $popdisponivel - ($nivelouro + 1) where dono = '$login_usuario'");
$updatetrabalhadores2 = mysql_query("update aldeias set ourotrabalhadores = $nivelouro + 1 where dono = '$login_usuario'");








$updatemadeiraouroup = mysql_query("update aldeias set madeira = $madeiraestoque - $upouromadeira where dono = '$login_usuario'");
$updateouroouroup = mysql_query("update aldeias set ouro = $ouroestoque - $upouroouro where dono = '$login_usuario'");
$updateferroouroup = mysql_query("update aldeias set ferro = $ferroestoque - $upouroferro where dono = '$login_usuario'");
$updatecomidaouroup = mysql_query("update aldeias set comida = $comidaestoque - $upourocomida where dono = '$login_usuario'");

$consulta552 = mysql_query("select * from config where time ");
 $linha552 = mysql_num_rows($consulta552); 
 while ($linha552 = mysql_fetch_object($consulta552)) { 




$tempoparaup = HtoS($upourotempo) ;




$timeagora = $linha552->time;


$tempodestino = $timeagora + $tempoparaup;
$updateourodestino = mysql_query("update aldeias set ourotempodestino = $tempodestino where dono = '$login_usuario'");


$checkourotempo = $linha5980->ourotempodestino;

If ($checkourotempo == 0) {


If ($updateourodestino) {
echo "<font color=green><b>Ação realizada com sucesso!</font></b>";



}

}








}}
}}

?>

</center>





