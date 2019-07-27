<?php
include "../validar_session.php";
include "padrao.php";
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



<center>
<div id="msglinks" name="msglinks">
<center>
 <a href="msg.php">Caixa de Entrada</a> | <a href="enviar.php">Enviar</a> | <a href="deletemsg.php">Deletar Mensagens</a>
</center>
</div>
</center>
<center>
<div id="enviarbox" name="enviarbox" style="background-color: #CDC9C9;">


<form action="enviarmensagemscript.php" target="_self" method="post" enctype="multipart/form-data" name="formmensagem">

<br>Destinatário:<center><input name="destinatario" type="text" id="destinatario" size="40" maxlength="200"/> </center><br>
Assunto:<center><input name="assunto" type="text" id="assunto" size="40" maxlength="20"/> </center><br>
Mensagem:<center><input name="mensagem" type="text" id="mensagem" size="50" maxlength="500"/> </center>
<input name="ID" type="hidden" id="ID" size="30" maxlenght="30"/>

      <input type="submit" name="enviar" value="Enviar" id="enviar" />
      <input type="reset" name="limpar" value="Limpar dados" />


</form>
</div>
</center>
</body>
</html>