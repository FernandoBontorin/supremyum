<center>
<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";
include_once "../Config/formulas.php";




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



?>

<form>
<b>
<a href="ouroupscript.php">
<?php
If ($checklinkvalid == 0) {
$ourotrabalhadores = $linha25544->ourotrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $ourotrabalhadores   where dono = '$login_usuario'");
$updateourotrabalhadores = mysql_query("update aldeias set ourotrabalhadores = 0 where dono = '$login_usuario'");
echo "Aumentar para o nível " .$ouroup;
} else {
echo '';
}
?>
</a>
<br>
<br>
<?php



           $consulta3080 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha5980 = mysql_num_rows($consulta3080); 
 while ($linha5980 = mysql_fetch_object($consulta3080)) { 
$nivelouro = $linha5980->nivelouro;




$upouromadeira = $formulamadeirao;
$upouroouro = $formulaouroo;
$upouroferro = $formulaferroo;
$upourocomida = $formulacomidao;
$upourotempo = $formulatempoo;










?>
<table border="1">
<td>

<?php
echo '<img src="../img/madeira.bmp">';  echo  ' '   .$upouromadeira ;
?>
</td>
<td>
<?php
echo '<img src="../img/ouro.bmp">'; echo  ' '   .$upouroouro ;
?>
</td>
<td>
<?php
echo '<img src="../img/ferro.bmp">'; echo  ' '   .$upouroferro;
?>
</td>
<td>
<?php
echo '<img src="../img/comida.bmp">'; echo  ' '   .$upourocomida;
?>
</td>
<td>
<?php
echo '<img src="../img/time.bmp">'; echo ' ';  echo $upourotempo;
?>
</td>
</table>

<?php
$aaaabbbb = $nivelouro + 1;
$producaonext =  2 * pow($aaaabbbb,2);
$producaonext2 = (int)($producaonext) * $server_speed ;
echo "<font color=blue><b>Produção de ouro no nível ";  echo $nivelouro + 1;   echo ': ' .$producaonext2.  "</font></b>";
$madeiradb = $linha5980->madeira;
$ourodb = $linha5980->ouro;
$ferrodb = $linha5980->ferro;
$comidadb = $linha5980->comida;

$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 

$timedb = $linha554->time;

$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 



$tempodestinoup = $linha2554->ourotempodestino;



If ($tempodestinoup == 0) {
If ($popdisponivel < $nivelouroo + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
} else {
If ($upouromadeira > $madeiradb) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
} else {
If ($upouroouro > $ourodb) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
} else {
If ($upouroferro > $ferrodb) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
} else {
If ($upourocomida > $comidadb) {
echo "<font color=red><b>Comida Insuficiente!</font></b>";
} else {

}}}}}
} else {

?>
<br>
<?php

If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
echo "$tempoparamostrar";

} else {

If ($timedb >= $tempodestinoup) {
$updateouronivel = mysql_query("update aldeias set nivelouro = $nivelouro + 1 where dono = '$login_usuario'");
$updateourodestino1 = mysql_query("update aldeias set ourotempodestino = 0 where dono = '$login_usuario'");
} else {


}



}}}}}}}





?>
</b>
</center>