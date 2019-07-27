<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

include "deletemsg.php";

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
<body width="100%" height="100%">



<div id="lermensagem" name="lermensagem">

<?php
$consulta3 = mysql_query("select * from mensagens where destino = '$login_usuario'");


$deleteID = $_POST['deleteID'];




$consulta980 = "DELETE FROM mensagens WHERE ID=$deleteID";
 $result = mysql_query($consulta980);
    echo "<center><br><table width='50%' border='1' cellspacing='0' style='background-color: #CDC9C9;'><td align='center'><b>Message Deleted!</b></td></table></center>";








?>


</div>




</body>
</html>