<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

include "msg.php";

// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");

$deleteID = ('');
$IDmsg = ('');

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
<body width="100%" height="100%">



<table border="1" cellspacing="0" style="background-color: #CDC9C9;" width="100%">
<td>
Mensagem:
<?php
$consulta3 = mysql_query("select * from mensagens where destino = '$login_usuario'");
$IDmsg = $_POST['IDmsg'];
$consulta5000 = mysql_query("select * from mensagens where ID = '$IDmsg'");
while($linha = mysql_fetch_object($consulta5000)) {
echo " ".$linha->mensagem."";
}?>
</td>
</table>






</body>
</html>