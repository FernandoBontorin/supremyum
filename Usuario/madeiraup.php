<center>
<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";
include_once "../Config/formulas.php";




           $consulta30809 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha59809 = mysql_num_rows($consulta30809); 
 while ($linha59809 = mysql_fetch_object($consulta30809)) { 

$checklinkvalid = $linha59809->madeiratempodestino;

$consulta25544 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha25544 = mysql_num_rows($consulta25544); 
 while ($linha25544 = mysql_fetch_object($consulta25544)) { 

$nivelmadeiraa = $linha25544->nivelmadeira;

$popdisponivel = $linha25544->popdisponivel;


$madeiraup = $nivelmadeiraa + 1;



?>

<form>
<b>
<a href="madeiraupscript.php">
<?php
If ($checklinkvalid == 0) {
$madeiratrabalhadores = $linha25544->madeiratrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $madeiratrabalhadores   where dono = '$login_usuario'");
$updatemadeiratrabalhadores = mysql_query("update aldeias set madeiratrabalhadores = 0 where dono = '$login_usuario'");
echo "Aumentar para o nível " .$madeiraup;
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
$nivelmadeira = $linha5980->nivelmadeira;




$upmadeiramadeira = $formulamadeiram;
$upmadeiraouro = $formulaourom;
$upmadeiraferro = $formulaferrom;
$upmadeiracomida = $formulacomidam;
$upmadeiratempo = $formulatempom;










?>
<table border="1">
<td>

<?php
echo '<img src="../img/madeira.bmp">';  echo  ' '   .$upmadeiramadeira ;
?>
</td>
<td>
<?php
echo '<img src="../img/ouro.bmp">'; echo  ' '   .$upmadeiraouro ;
?>
</td>
<td>
<?php
echo '<img src="../img/ferro.bmp">'; echo  ' '   .$upmadeiraferro;
?>
</td>
<td>
<?php
echo '<img src="../img/comida.bmp">'; echo  ' '   .$upmadeiracomida;
?>
</td>
<td>
<?php
echo '<img src="../img/time.bmp">'; echo ' ';  echo $upmadeiratempo;
?>
</td>
</table>

<?php
$aaaabbbb = $nivelmadeira + 1;
$producaonext =  2 * pow($aaaabbbb,2);
$producaonext2 = (int)($producaonext) * $server_speed ;
echo "<font color=blue><b>Produção de madeira no nível ";  echo $nivelmadeira + 1;   echo ': ' .$producaonext2.  "</font></b>";
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



$tempodestinoup = $linha2554->madeiratempodestino;



If ($tempodestinoup == 0) {
If ($popdisponivel < $nivelmadeiraa + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
} else {
If ($upmadeiramadeira > $madeiradb) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
} else {
If ($upmadeiraouro > $ourodb) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
} else {
If ($upmadeiraferro > $ferrodb) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
} else {
If ($upmadeiracomida > $comidadb) {
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
$updatemadeiranivel = mysql_query("update aldeias set nivelmadeira = $nivelmadeira + 1 where dono = '$login_usuario'");
$updatemadeiradestino1 = mysql_query("update aldeias set madeiratempodestino = 0 where dono = '$login_usuario'");
} else {


}



}}}}}}}





?>
</b>
</center>