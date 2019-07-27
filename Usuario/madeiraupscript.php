<center>

<?php
include "../validar_session.php";

include "../engine/recursos.php";

include "../Config/config_sistema.php";

include_once "../Config/formulas.php";



 $consulta3080 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha5980 = mysql_num_rows($consulta3080); 
 while ($linha5980 = mysql_fetch_object($consulta3080)) { 

If ($linha5980->madeiratrabalhadores != 0) {
echo "<font color=red><b>Este edifício já está sendo evoluído</font></b>";
} else {


$nivelmadeira = $linha5980->nivelmadeira;
$madeiraestoque = $linha5980->madeira;
$ouroestoque = $linha5980->ouro;
$ferroestoque = $linha5980->ferro;
$comidaestoque = $linha5980->comida;

$popdisponivel = $linha5980->popdisponivel;


$upmadeiramadeira = $formulamadeiram;
$upmadeiraouro = $formulaourom;
$upmadeiraferro = $formulaferrom;
$upmadeiracomida = $formulacomidam;
$upmadeiratempo = $formulatempom;

date_default_timezone_set('America/Los_Angeles');

$error = 0;

If ($popdisponivel < $nivelmadeira + 1) {
echo "<font color=red><b>Trabalhadores Insuficientes!</font></b>";
$error = 1;
}
If ($upmadeiramadeira > $madeiraestoque) {
echo "<font color=red><b>Madeira Insuficiente!</font></b>";
$error = 1;
}
If ($upmadeiraouro > $ouroestoque) {
echo "<font color=red><b>Ouro Insuficiente!</font></b>";
$error = 1;
}
If ($upmadeiraferro > $ferroestoque) {
echo "<font color=red><b>Ferro Insuficiente!</font></b>";
$error = 1;
}
If ($upmadeiracomida > $comidaestoque) {
echo "<font color=red><b>Comida Insuficiente!</font></b>";
$error = 1;
}


If ($error == 1) {
echo "<font color=red><b>Ação impossível de ser concluída</font></b>";
} else {

$updatetrabalhadores = mysql_query("update aldeias set popdisponivel = $popdisponivel - ($nivelmadeira + 1) where dono = '$login_usuario'");
$updatetrabalhadores2 = mysql_query("update aldeias set madeiratrabalhadores = $nivelmadeira + 1 where dono = '$login_usuario'");








$updatemadeiramadeiraup = mysql_query("update aldeias set madeira = $madeiraestoque - $upmadeiramadeira where dono = '$login_usuario'");
$updateouromadeiraup = mysql_query("update aldeias set ouro = $ouroestoque - $upmadeiraouro where dono = '$login_usuario'");
$updateferromadeiraup = mysql_query("update aldeias set ferro = $ferroestoque - $upmadeiraferro where dono = '$login_usuario'");
$updatecomidamadeiraup = mysql_query("update aldeias set comida = $comidaestoque - $upmadeiracomida where dono = '$login_usuario'");

$consulta552 = mysql_query("select * from config where time ");
 $linha552 = mysql_num_rows($consulta552); 
 while ($linha552 = mysql_fetch_object($consulta552)) { 




$tempoparaup = HtoS($upmadeiratempo) ;




$timeagora = $linha552->time;


$tempodestino = $timeagora + $tempoparaup;
$updatemadeiradestino = mysql_query("update aldeias set madeiratempodestino = $tempodestino where dono = '$login_usuario'");


$checkmadeiratempo = $linha5980->madeiratempodestino;

If ($checkmadeiratempo == 0) {


If ($updatemadeiradestino) {
echo "<font color=green><b>Ação realizada com sucesso!</font></b>";



}

}






}

}
}}

?>

</center>





