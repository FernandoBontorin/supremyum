<?php include"padraoframe.php" ?>


<center>

<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";

include"../Config/tropasdados.php";


?>

<?php
$consultaA = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linhaA = mysql_num_rows($consultaA);
while($linhaA = mysql_fetch_object($consultaA)) {

$idvila = $linhaA->ID;

$consulta552 = mysql_query("select * from config where time ");
 $linha552 = mysql_num_rows($consulta552); 
 while ($linha552 = mysql_fetch_object($consulta552)) { 


$madeiraestoque = $linhaA->madeira;
$ouroestoque = $linhaA->ouro;
$ferroestoque = $linhaA->ferro;
$comidaestoque = $linhaA->comida;

$t2m = "t".$povolocal."2m";
$t2o = "t".$povolocal."2o";
$t2f = "t".$povolocal."2f";
$t2c = "t".$povolocal."2c"; 
$t2t = "t".$povolocal."2t"; 

$pedido = $_POST['text2'];

echo $pedido;

If ($t2filaatual != 0) {
echo "Este quartel j� possui<br>tropas deste tipo em produ��o!";
} else {

If ($pedido <= 0) {
echo "Pedido n�o suportado! Tente novamente!";
} else {

$gastomadeira = $$t2m * $pedido;
$gastoouro = $$t2o * $pedido;
$gastoferro = $$t2f * $pedido;
$gastocomida = $$t2c * $pedido;
$gastotempo = HtoS($$t2t) * $pedido / $server_speed;


$error = 0;
If ($gastomadeira > $madeiraestoque) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
$error = 1;}
If ($gastoouro > $ouroestoque) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
$error = 1;}
If ($gastoferro > $ferroestoque) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
$error = 1;}
If ($gastocomida > $comidaestoque) {
echo "<font color=red><b>Comida Insuficiente!</font></b>";
$error = 1;}
If ($error == 1) {
echo "<font color=red><b>A��o imposs�vel de ser conclu�da!</font></b>";
} else {


$timeagora = $linha552->time;
$tempoup = $timeagora + $gastotempo;




$tirarmadeira = mysql_query("update aldeias set madeira = $madeiraestoque - $gastomadeira where dono = '$login_usuario'");
$tirarouro = mysql_query("update aldeias set ouro = $ouroestoque - $gastoouro where dono = '$login_usuario'");
$tirarferro = mysql_query("update aldeias set ferro = $ferroestoque - $gastoferro where dono = '$login_usuario'");
$tirarcomida = mysql_query("update aldeias set comida = $comidaestoque - $gastocomida where dono = '$login_usuario'");

$addpedido = mysql_query("update fila set t2 = t2 + '$pedido' where dono = '$login_usuario'");
$addpedido2 = mysql_query("update fila set t2timecmc = $timeagora where dono = '$login_usuario'");
$addpedido3 = mysql_query("update fila set t2timefim = $tempoup where dono = '$login_usuario'");














}}}}}

?>
