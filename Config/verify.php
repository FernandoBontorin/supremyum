<?php
include "../validar_session.php";
include "config_sistema.php";
include_once "formulas.php";
include "../engine/recursos.php";










//Madeira.
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
If ($checklinkvalid == 0) {
$madeiratrabalhadores = $linha25544->madeiratrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $madeiratrabalhadores   where dono = '$login_usuario'");
$updatemadeiratrabalhadores = mysql_query("update aldeias set madeiratrabalhadores = 0 where dono = '$login_usuario'");
}
$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 
$timedb = $linha554->time;
$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 
$tempodestinoup = $linha2554->madeiratempodestino;
If ($tempodestinoup == 0) {
} else {
If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
} else {
If ($timedb >= $tempodestinoup) {
$updatemadeiranivel = mysql_query("update aldeias set nivelmadeira = $nivelmadeira + 1 where dono = '$login_usuario'");
$updatemadeiradestino1 = mysql_query("update aldeias set madeiratempodestino = 0 where dono = '$login_usuario'");
} else {
}}}}}}}







 //Ouro.
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
If ($checklinkvalid == 0) {
$ourotrabalhadores = $linha25544->ourotrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $ourotrabalhadores   where dono = '$login_usuario'");
$updateourotrabalhadores = mysql_query("update aldeias set ourotrabalhadores = 0 where dono = '$login_usuario'");
}
$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 
$timedb = $linha554->time;
$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 
$tempodestinoup = $linha2554->ourotempodestino;
If ($tempodestinoup == 0) {
} else {
If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
} else {
If ($timedb >= $tempodestinoup) {
$updateouronivel = mysql_query("update aldeias set nivelouro = $nivelouro + 1 where dono = '$login_usuario'");
$updateourodestino1 = mysql_query("update aldeias set ourotempodestino = 0 where dono = '$login_usuario'");
} else {
}}}}}}}





 //Ferro.
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
If ($checklinkvalid == 0) {
$ferrotrabalhadores = $linha25544->ferrotrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $ferrotrabalhadores   where dono = '$login_usuario'");
$updateferrotrabalhadores = mysql_query("update aldeias set ferrotrabalhadores = 0 where dono = '$login_usuario'");
}
$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 
$timedb = $linha554->time;
$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 
$tempodestinoup = $linha2554->ferrotempodestino;
If ($tempodestinoup == 0) {
} else {
If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
} else {
If ($timedb >= $tempodestinoup) {
$updateferronivel = mysql_query("update aldeias set nivelferro = $nivelferro + 1 where dono = '$login_usuario'");
$updateferrodestino1 = mysql_query("update aldeias set ferrotempodestino = 0 where dono = '$login_usuario'");
} else {
}}}}}}}







//Comida.
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
If ($checklinkvalid == 0) {
$comidatrabalhadores = $linha25544->comidatrabalhadores;
$updatepopdisponivel = mysql_query("update aldeias set popdisponivel = $popdisponivel + $comidatrabalhadores   where dono = '$login_usuario'");
$updatecomidatrabalhadores = mysql_query("update aldeias set comidatrabalhadores = 0 where dono = '$login_usuario'");
}
$consulta554 = mysql_query("select * from config where time");
 $linha554 = mysql_num_rows($consulta554); 
 while ($linha554 = mysql_fetch_object($consulta554)) { 
$timedb = $linha554->time;
$consulta2554 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha2554 = mysql_num_rows($consulta2554); 
 while ($linha2554 = mysql_fetch_object($consulta2554)) { 
$tempodestinoup = $linha2554->comidatempodestino;
If ($tempodestinoup == 0) {
} else {
If ($timedb <= $tempodestinoup) {
$temporestante = $tempodestinoup - $timedb;
$tempoparamostrar = StoH($temporestante);
} else {
If ($timedb >= $tempodestinoup) {
$updatecomidanivel = mysql_query("update aldeias set nivelcomida = $nivelcomida + 1 where dono = '$login_usuario'");
$updatecomidadestino1 = mysql_query("update aldeias set comidatempodestino = 0 where dono = '$login_usuario'");
} else {
}}}}}}}







?>
















