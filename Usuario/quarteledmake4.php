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

$t4m = "t".$povolocal."4m";
$t4o = "t".$povolocal."4o";
$t4f = "t".$povolocal."4f";
$t4c = "t".$povolocal."4c"; 
$t4t = "t".$povolocal."4t"; 

$pedido = $_POST['text4'];

echo $pedido;

If ($t4filaatual != 0) {
echo "Este quartel já possui<br>tropas deste tipo em produção!";
} else {

If ($pedido <= 0) {
echo "Pedido não suportado! Tente novamente!";
} else {

$gastomadeira = $$t4m * $pedido;
$gastoouro = $$t4o * $pedido;
$gastoferro = $$t4f * $pedido;
$gastocomida = $$t4c * $pedido;
$gastotempo = HtoS($$t4t) * $pedido / $server_speed;


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
echo "<font color=red><b>Ação impossível de ser concluída!</font></b>";
} else {


$timeagora = $linha552->time;
$tempoup = $timeagora + $gastotempo;




$tirarmadeira = mysql_query("update aldeias set madeira = $madeiraestoque - $gastomadeira where dono = '$login_usuario'");
$tirarouro = mysql_query("update aldeias set ouro = $ouroestoque - $gastoouro where dono = '$login_usuario'");
$tirarferro = mysql_query("update aldeias set ferro = $ferroestoque - $gastoferro where dono = '$login_usuario'");
$tirarcomida = mysql_query("update aldeias set comida = $comidaestoque - $gastocomida where dono = '$login_usuario'");

$addpedido = mysql_query("update fila set t4 = t4 + '$pedido' where dono = '$login_usuario'");
$addpedido2 = mysql_query("update fila set t4timecmc = $timeagora where dono = '$login_usuario'");
$addpedido3 = mysql_query("update fila set t4timefim = $tempoup where dono = '$login_usuario'");














}}}}}

?>
