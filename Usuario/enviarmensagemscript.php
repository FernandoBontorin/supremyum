<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="cadastro.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");


?>

<?php
while($linha = mysql_fetch_object($consulta)) {
	echo "<b>Olá ".$linha->Login."!</b>";
?>

<table width="650" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="224" height="140">&nbsp;</td>
    <td width="252">&nbsp;</td>
    <td width="174">&nbsp;</td>
  </tr>
  <tr>
    <td height="24">&nbsp;</td>
    <td valign="middle">
	<font color="#FF0000"><b>
	<?php


// recebe dados do formulario
$remetente = $login_usuario;
$destinatario = $_POST['destinatario'];
$assunto = htmlspecialchars($_POST['assunto']);

$mensagem = htmlspecialchars($_POST['mensagem']);








// faz consulta no banco para inserir os dados do usuario
$sql = "insert into mensagens (remetente,assunto,destino,mensagem) values ('$remetente','$assunto','$destinatario','$mensagem')";
$consulta = mysql_query($sql);

// verifica se o usuario foi cadastrado
if($consulta) {
	echo "<font color=green><b>
		  Mensagem enviada com sucesso!<br>
		 
		  </font></b>";
	exit;
} else {
	echo "Não foi possivel efetuar o envio<br>
		  tente mais tarde pode ser um problema no servidor!<br>
		  Click <a href=../index.php>aqui</a> para ir ate a home page do sistema.";
	exit;
}
?>

    <!--DWLayoutEmptyCell-->    &nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="148">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>





	    <?php
}
?>

</body>
</html>
