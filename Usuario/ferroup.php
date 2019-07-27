<center>
<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";
include_once "../Config/formulas.php";




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



?>

<form>
<b>
<a href="ferroupscript.php">
<?php
If ($checklinkvalid == 0) {
$ferrotrabalhadores = $linha25544->ferrotrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $ferrotrabalhadores   where dono = '$login_usuario'");
$updateferrotrabalhadores = mysql_query("update aldeias set ferrotrabalhadores = 0 where dono = '$login_usuario'");
echo "Increase to level " .$ferroup;
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
$nivelferro = $linha5980->nivelferro;




$upferromadeira = $formulamadeiraf;
$upferroouro = $formulaourof;
$upferroferro = $formulaferrof;
$upferrocomida = $formulacomidaf;
$upferrotempo = $formulatempof;










?>
<table border="1">
<td>

<?php
echo '<img src="../img/madeira.bmp">';  echo  ' '   .$upferromadeira ;
?>
</td>
<td>
<?php
echo '<img src="../img/ouro.bmp">'; echo  ' '   .$upferroouro ;
?>
</td>
<td>
<?php
echo '<img src="../img/ferro.bmp">'; echo  ' '   .$upferroferro;
?>
</td>
<td>
<?php
echo '<img src="../img/comida.bmp">'; echo  ' '   .$upferrocomida;
?>
</td>
<td>
<?php
echo '<img src="../img/time.bmp">'; echo ' ';  echo $upferrotempo;
?>
</td>
</table>

<?php
$aaaabbbb = $nivelferro + 1;
$producaonext =  2 * pow($aaaabbbb,2);
$producaonext2 = (int)($producaonext) * $server_speed ;
echo "<font color=blue><b>Iron production in level ";  echo $nivelferro + 1;   echo ': ' .$producaonext2.  "</font></b>";
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



$tempodestinoup = $linha2554->ferrotempodestino;



If ($tempodestinoup == 0) {
If ($popdisponivel < $nivelferroo + 1) {
echo "<font color=red><b>Insufficient workers!</font></b>";
} else {
If ($upferromadeira > $madeiradb) {
echo "<font color=red><b>Insufficient wood!</font></b>";
} else {
If ($upferroouro > $ourodb) {
echo "<font color=red><b>Insufficient gold!</font></b>";
} else {
If ($upferroferro > $ferrodb) {
echo "<font color=red><b>Insufficient iron!</font></b>";
} else {
If ($upferrocomida > $comidadb) {
echo "<font color=red><b>Insufficient food!</font></b>";
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
$updateferronivel = mysql_query("update aldeias set nivelferro = $nivelferro + 1 where dono = '$login_usuario'");
$updateferrodestino1 = mysql_query("update aldeias set ferrotempodestino = 0 where dono = '$login_usuario'");
} else {


}



}}}}}}}





?>
</b>
</center>