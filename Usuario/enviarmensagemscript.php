
<?php
include "padrao.php";

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

<?php
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
while($linha = mysql_fetch_object($consulta)) {
$remetente = $login_usuario;
$destinatario = $_POST['destinatario'];
$assunto = htmlspecialchars($_POST['assunto']);
$mensagem = htmlspecialchars($_POST['mensagem']);
$sql = "insert into mensagens (remetente,assunto,destino,mensagem) values ('$remetente','$assunto','$destinatario','$mensagem')";
$consulta = mysql_query($sql);
if($consulta) {
	echo "<font color=green><b><center>Mensagem enviada com sucesso!<br></center></font></b>";
	exit;
} else {
	echo "Não foi possivel efetuar o envio<br>
		  tente mais tarde pode ser um problema no servidor!<br>
		  Click <a href=../index.php>aqui</a> para ir ate a home page do sistema.";
	exit;
}} ?>

</div>
</center>
</body>
</html>