<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");

$online = ("0");
$updates = mysql_query("update dados_usuarios set online = '$online' where Login = '$login_usuario'");


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




$consulta3050 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha50 = mysql_num_rows($consulta3050);
	if($linha50 != 0) {
				header("Location: home.php");
		exit;

} else {
	echo"";


}  


?>

<center>
<div name="criarcolo" id="criarcolo">
<form id="criarcoloform" name="criarcoloform" action="novacoloniascript.php" method="post">
<b>Village name</b><br>
<input type="text" name="nomecolo" id="nomecolo" maxlength="40" size="40">
<br>
<br>
<input type="hidden" name="pop" id="pop" value="5">
<input type="hidden" name="ed1" id="ed1" value="ed1">
<b>Region</b><br>
Northwest<input type="radio" name="loca" id="loca" value="-x+y" checked="true">
Northeast<input type="radio" name="loca" id="loca" value="+x+y">
<br>
Southwest<input type="radio" name="loca" id="loca" value="-x-y">
Southeast<input type="radio" name="loca" id="loca" value="+x-y">
<br>
<br>
<input type="submit" id="enviarnewcolo" nome="enviarnewcolo" value="Create!">



</form>
</div>
</center>

</body>
</html>

