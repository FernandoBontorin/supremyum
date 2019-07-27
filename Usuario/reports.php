<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="StyleSheet" href="style.css">
<style type="text/css">
<!--

-->
</style>
</head>
<body>

<?php
include "menu1.php";
?>

<center>
<div id="msglinks" name="msglinks">
<center>
<a href="reports.php">Inbox</a>
</center>
</div>
</center>

<center>
<div id="caixadeentrada" name="caixadeentrada">
<div id="caracteristicas" name="caracteristicas">
<div id="remetente" name="remetente">
<center>
<table width="100%" border="1">
<td align="center" colspan="1" width="25%"><b>Date</b></td>
<td align="center" colspan="1" width="50%"><b>Report</b></td>
</table>
</center>
</div>
<center>

<hr width="100%">

<br>
</div>




<table width="100%" border="1">
<?php
$consulta3000 = mysql_query("select * from aldeias where dono = '$login_usuario'");
while($linha7 = mysql_fetch_object($consulta3000)) {
$ID = $linha7->ID;
}
$consultarelat = mysql_query("select * from relatorios where visualisador='$ID' ORDER by ID Desc");
while($linharelat = mysql_fetch_object($consultarelat)) {


$vilapesq1 = $linharelat->remetente;
$vilapesq2 = $linharelat->destino;


$consultavillageatk = mysql_query("select * from aldeias where ID='$vilapesq1'");
while($linhavillageatk = mysql_fetch_object($consultavillageatk)) {
$atkvillage = $linhavillageatk->nome;

$consultavillagedef = mysql_query("select * from aldeias where ID='$vilapesq2'");
while($linhavillagedef = mysql_fetch_object($consultavillagedef)) {
$defvillage = $linhavillagedef->nome;



echo "<td align='center' style='background: #FFFF66;' width='25%'>".$linharelat->data."  ".$linharelat->horario."</td><td width='50%' align='center' style='background:";If($linharelat->type=="ataquefeito"){echo"#99FF66";}else{echo"#F08080";}echo";'>";If($linharelat->visto=="nao"){echo"<img src='../img/new.png'>";}echo"<a href='lerreport.php?id=".$linharelat->ID."'>".$atkvillage." attacks ".$defvillage."</a></td><tr>";

}}}
?>
</table>





</div>



</div>





</center>

</body>
</html>