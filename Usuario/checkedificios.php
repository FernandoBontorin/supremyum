<?php
include "../validar_session.php";
include "../Config/config_sistema.php";

$consultaid = mysql_query("select * from aldeias where dono = '$login_usuario'");

while($linhaid = mysql_fetch_object($consultaid)) {



$slot1 = $linhaid->eda;
$slot2 = $linhaid->edb;
$slot3 = $linhaid->edc;
$slot4 = $linhaid->edd;
$slot5 = $linhaid->ede;
$slot6 = $linhaid->edf;
$slot7 = $linhaid->edg;
$slot8 = $linhaid->edh;
$slot9 = $linhaid->edi;
$slot10 = $linhaid->edj;
$slot11 = $linhaid->edk;
$slot12 = $linhaid->edl;
$slot13 = $linhaid->edm;
$slot14 = $linhaid->edn;
$slot15 = $linhaid->edo;
$slot16 = $linhaid->edp;
$slot17 = $linhaid->edq;
$slot18 = $linhaid->edr;
$slot19 = $linhaid->eds;
$slot20 = $linhaid->edt;



$zero = 0;

If ($linhaid->edcentralnv == 0) 
{
$updateed1 = mysql_query("update aldeias set edh = $zero where dono = '$login_usuario'");
} else {
$updateed1b = mysql_query("update aldeias set edh = 'ed1' where dono = '$login_usuario'");

}







If ($linhaid->armazemnv == 0) 
{
$updatearm = mysql_query("update aldeias set edi = $zero where dono = '$login_usuario'");
} else {
$updatearmb = mysql_query("update aldeias set edi = 'arm' where dono = '$login_usuario'");

}





If ($linhaid->galpaonv == 0) 
{
$updategal = mysql_query("update aldeias set edd = $zero where dono = '$login_usuario'");
} else {
$updategalb = mysql_query("update aldeias set edd = 'gal' where dono = '$login_usuario'");

}



If ($linhaid->quartelnv == 0) 
{
$updategal = mysql_query("update aldeias set edl = $zero where dono = '$login_usuario'");
} else {
$updategalb = mysql_query("update aldeias set edl = 'quartel' where dono = '$login_usuario'");

}



If ($linhaid->estabulonv == 0) 
{
$updateest = mysql_query("update aldeias set eds = $zero where dono = '$login_usuario'");
} else {
$updateestb = mysql_query("update aldeias set eds = 'est' where dono = '$login_usuario'");

}




If ($linhaid->cpmnv == 0) 
{
$updatecpm = mysql_query("update aldeias set edo = $zero where dono = '$login_usuario'");
} else {
$updatecpm = mysql_query("update aldeias set edo = 'cpm' where dono = '$login_usuario'");

}

}
?>