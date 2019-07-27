<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="cadastro.css" rel="stylesheet" type="text/css" />
</head>

<body>
<a href="login.php">
<div id="voltarlogin" name="voltarlogin">
<center>
<b>Voltar</b>
</center>
</div>
</a>
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
// inclui o arquivo de configuração do sistema
include "Config/config_sistema.php";

// recebe dados do formulario
$login = htmlspecialchars($_POST['login']);
$senha = $_POST['senha'];
$rep_senha = $_POST['rep_senha'];
$email = htmlspecialchars($_POST['email']);
$pergunta = htmlspecialchars($_POST['pergunta']);
$resposta = htmlspecialchars($_POST['resposta']);
$povo = $_POST['criarciv'];
$online = ("0");



// verifica se o usuario digitou o login
if($login == "") {
	echo "Digite seu login!";
	exit;
} else {
	// se o usuario digitou o login ele verifica
	// se esta disponivel
	$consulta = mysql_query("select * from dados_usuarios where Login = '$login'");
	$linha = mysql_num_rows($consulta);
	if($linha != 0) {
		echo "O nome de usuario que você<br>
			  Digitou já existe tente outro!";
		exit;
	}
}

// verifica se o usuario digitou a senha
if($senha == "") {
	echo "Digite sua senha!";
	exit;
} else {
	// se o usuario digitou a senha
	// vamos comparar com a contra senha
	if($senha != $rep_senha) {
		echo "Senha invalida!";
		exit;
	}
}

// verifica o email
if($email == "") {
	echo "Digite o seu e-mail!";
	exit;
}

// verifica a pergunta secreta
if($pergunta == "") {
	echo "Digite sua pergunta secreta!";
	exit;
}

// verifica a resposta secreta
if($resposta == "") {
	echo "Digite sua resposta secreta!";
	exit;
}

// faz consulta no banco para inserir os dados do usuario
$sql = "insert into dados_usuarios (ID,Login,Senha,Email,Pergunta,Resposta,online,povo) values ('','$login','$senha','$email','$pergunta','$resposta','$online','$povo')";
$consulta = mysql_query($sql);

// verifica se o usuario foi cadastrado
if($consulta) {
	echo "<font color=green><b>
		  Você foi cadastrado com sucesso!<br>
		  Click <a href=login.php>aqui</a> para efetuar o login.
		  </font></b>";
	exit;
} else {
	echo "Não foi possivel efetuar o seu cadastro<br>
		  tente mais tarde pode ser um problema no servido!<br>
		  Click <a href=index.php>aqui</a> para ir ate a home page do sistema.";
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
</body>
</html>
