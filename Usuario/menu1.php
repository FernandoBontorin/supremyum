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
#top a:link {
	color: white;
	display: ;
	text-decoration: none;
	font-weight:bold;
	font-size:100%;
}

#top a:visited {
	color: white;
	display: ;
	text-decoration: none;
	font-weight:bold;
}

#top a:hover {
	color: gray;
	text-decoration: none;
	font-weight:bold;
}



#top a:active {
	color: blue
}
-->
</style>
</head>
<body>



<div id="top" name="top">
<div id="options" name="options">
<center>
<div id="textodaoptions" name="textodaoptions">
 <td colspan="2" valign="top" class="style3"><a href="msg.php"> Mensagens </a>  | <a href="dados_usuario.php" class="style3"> Dados do usu&aacute;rio </a> | <a href="../logout.php" class="style3">Logout</a> | <a href="home.php">Home</a> | <a href="mapa.php">Mapa</a></td>
</div>
<div id="time" name="time">
<?php
include "../engine/time.php";
?>
</div>
</div>
</center>
<center>
<div id="recursostop" name="recursostop">
<table border="1">
<td>
<font color="brown">
<?php


$consulta30006 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha86 = mysql_num_rows($consulta30006);


while($linha86 = mysql_fetch_object($consulta30006)) {


$madeiranoestoque = $linha86->madeira;
$madeiranoestoque = (int)$madeiranoestoque;
$ouronoestoque = (int)$linha86->ouro;
$ferronoestoque = (int)$linha86->ferro;
$comidanoestoque = (int)$linha86->comida;
$capacidadedosrecursos = $linha86->capacidade;
$capacidadedacomida = $linha86->capacidadecomida;
echo "<center><b>Madeira   ".$madeiranoestoque."/".$capacidadedosrecursos."</b></center>";
?>
</font>
</td>
<td>
<font color="gold">
<?php
echo "<center><b>Ouro   ".$ouronoestoque."/".$capacidadedosrecursos."</b></center>";
?>
</font>
</td>
<td>
<font color="lightgray">
<?php
echo "<center><b>Ferro   ".$ferronoestoque."/".$capacidadedosrecursos."</b></center>";
?>
</font>
</td>
<td>
<?php
echo "<center><b>Comida   ".$comidanoestoque."/".$capacidadedacomida."</b></center>";


}



?>
</td>
</table>
</div>
</center>
<div id="barramenu" name="barramenu">
_
</div>




</div>





</body>
</html>