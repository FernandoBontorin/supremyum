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


<script language="JavaScript"> 
function moveRelogio(){ 
   	momentoAtual = new Date() 
   	hora = momentoAtual.getHours() 
   	minuto = momentoAtual.getMinutes() 
   	segundo=segundo = momentoAtual.getSeconds() ;

   	horaImprimivel = hora + " : " + minuto + " : " + segundo 

   	document.form_relogio.relogio.value = horaImprimivel 


var x = "111111111111";   


   	setTimeout("moveRelogio()",1000) 
} 
</script> 

</head>
<body onload="moveRelogio()">




<?php


$consulta300053 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha83 = mysql_num_rows($consulta300053);




while($linha83 = mysql_fetch_object($consulta300053)) {


$madeiraparaatt=($linha83->madeirahora);
$attmadeira = mysql_query("UPDATE aldeias SET madeira = madeira + 1 WHERE dono = '$login_usuario'");


}




?>

</body>
</html>
















