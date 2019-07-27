<?php include"padraoframe.php" ?>
<?php include"../Config/tropasdados.php" ?>
<center>

<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";

include "../Config/formulas.php";
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


$pedido = $_POST['text11'];

echo $pedido;

If ($t11filaatual != 0) {
echo "Este quartel já possui<br>tropas deste tipo em produção!";
} else {

If ($pedido <= 0) {
echo "Pedido não suportado! Tente novamente!";
} else {

$gastomadeira = $t11m * $pedido;
$gastoouro = $t11o * $pedido;
$gastoferro = $t11f * $pedido;
$gastocomida = $t11c * $pedido;
$gastotempo = HtoS($t11t) * $pedido;


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

$addpedido = mysql_query("update fila set t11 = t11 + '$pedido' where dono = '$login_usuario'");
$addpedido2 = mysql_query("update fila set t11timecmc = $timeagora where dono = '$login_usuario'");
$addpedido3 = mysql_query("update fila set t11timefim = $tempoup where dono = '$login_usuario'");














}}}}}

?>
