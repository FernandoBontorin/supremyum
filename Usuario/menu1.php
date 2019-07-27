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



<div id="top" name="top" style="background-image: URL(../img/menubg.png); background-height: 100%; background-repeat: x-repeat">
<div id="options" name="options">
<center>
<div id="time" name="time">
<?php
include "../engine/time.php";
?>
</div>


</div>
</center>
<center>
<div id="recursostop" name="recursostop">
<table border="1" cellspacing="0" style="background-image: url('../img/empty.png');background-repeat: no-repeat; background-size: 100% 100%; border-color: #FFFFFF;">
<td>
<font color="#F5DEB3">
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
echo "<text style='text-shadow: -1px 0 1px black, 0 1px 1px black, 1px 0 1px black, 0 -1px 1px black;'><center><b>Wood   ".$madeiranoestoque."/".$capacidadedosrecursos."</b></center></text>";
?>
</font>
</td>
<td>
<font color="gold">
<?php
echo "<text style='text-shadow: -1px 0 1px black, 0 1px 1px black, 1px 0 1px black, 0 -1px 1px black;'><center><b>Gold   ".$ouronoestoque."/".$capacidadedosrecursos."</b></center></text>";
?>
</font>
</td>
<td>
<font color="lightgray">
<?php
echo "<text style='text-shadow: -1px 0 1px black, 0 1px 1px black, 1px 0 1px black, 0 -1px 1px black;'><center><b>Iron   ".$ferronoestoque."/".$capacidadedosrecursos."</b></center></text>";
?>
</font>
</td>
<td>
<font color="#FFA07A">
<?php
echo "<text style='text-shadow: -1px 0 1px black, 0 1px 1px black, 1px 0 1px black, 0 -1px 1px black;'><center><b>Food   ".$comidanoestoque."/".$capacidadedacomida."</b></center></text>";
?>
</font>
<?php
}?>
</td>
</table>
</div>
<div id="textodaoptions" name="textodaoptions"><table border="0">
<td><a href="../Usuario/home.php"><img src="../img/home.png"></a></td><td><a href="../Usuario/mapa.php"><img src="../img/map.png"></a></td><td><a href="../Usuario/msg.php"><img src="../img/messages.png"></a></td><td><a href="../Usuario/dados_usuario.php"><img src="../img/options.png"></a></td><td><a href="../logout.php"><img src="../img/logout.png"></a></td><td><a href="../Usuario/reports.php"><img src="../img/reports.png"></a></td>
</table></div>
</center>
</div>
<table style="height:20px; width:100%; background-image: URL(../img/block.png);">
</table><br>
</body>
</html>