<center>
<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";
include "../Config/formulas.php";




           $consulta30809 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha59809 = mysql_num_rows($consulta30809); 
 while ($linha59809 = mysql_fetch_object($consulta30809)) { 

$checklinkvalid = $linha59809->comidatempodestino;

$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 

$nivelcomidaa = $linha25544->nivelcomida;

$popdisponivel = $linha25544->popdisponivel;


$comidaup = $nivelcomidaa + 1;



?>

<form>
<b>
<a href="comidaupscript.php">
<?php
If ($checklinkvalid == 0) {
$comidatrabalhadores = $linha25544->comidatrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $comidatrabalhadores   where dono = '$login_usuario'");
$updatecomidatrabalhadores = mysql_query("update aldeias set comidatrabalhadores = 0 where dono = '$login_usuario'");
echo "Aumentar para o nível " .$comidaup;
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
$nivelcomida = $linha5980->nivelcomida;




$upcomidamadeira = $formulamadeirac;
$upcomidaouro = $formulaouroc;
$upcomidaferro = $formulaferroc;
$upcomidacomida = $formulacomidac;
$upcomidatempo = $formulatempoc;










?>
<table border="1">
<td>

<?php
echo '<img src="../img/madeira.bmp">';  echo  ' '   .$upcomidamadeira ;
?>
</td>
<td>
<?php
echo '<img src="../img/ouro.bmp">'; echo  ' '   .$upcomidaouro ;
?>
</td>
<td>
<?php
echo '<img src="../img/ferro.bmp">'; echo  ' '   .$upcomidaferro;
?>
</td>
<td>
<?php
echo '<img src="../img/comida.bmp">'; echo  ' '   .$upcomidacomida;
?>
</td>
<td>
<?php
echo '<img src="../img/time.bmp">'; echo ' ';  echo $upcomidatempo;
?>
</td>
</table>

<?php
$aaaabbbb = $nivelcomida + 1;
$producaonext =  2 * pow($aaaabbbb,2);
$producaonext2 = (int)($producaonext) * $server_speed ;
echo "<font color=blue><b>Produção de comida no nível ";  echo $nivelcomida + 1;   echo ': ' .$producaonext2.  "</font></b>";
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



$tempodestinoup = $linha2554->comidatempodestino;



If ($tempodestinoup == 0) {
If ($popdisponivel < $nivelcomidaa + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
} else {
If ($upcomidamadeira > $madeiradb) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
} else {
If ($upcomidaouro > $ourodb) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
} else {
If ($upcomidaferro > $ferrodb) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
} else {
If ($upcomidacomida > $comidadb) {
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
$updatecomidanivel = mysql_query("update aldeias set nivelcomida = $nivelcomida + 1 where dono = '$login_usuario'");
$updatecomidadestino1 = mysql_query("update aldeias set comidatempodestino = 0 where dono = '$login_usuario'");
} else {


}



}}}}}}}





?>
</b>
</center>