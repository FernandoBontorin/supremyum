<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="esqueceu.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="mostrar_senha.php" method="post" enctype="multipart/form-data" name="formmostar">
<a href="../login.php"><div id="voltarlogin" name="voltarlogin">
<center>
<b>Voltar</b>
</center>
</div>
</a>

<?php
// inclui o arquivo de configuração do sistema
include "../Config/config_sistema.php";

// recebe dados do formulario
$login = htmlspecialchars($_POST['login']);

// faz consulta no banco de dados
$consulta = mysql_query("select * from dados_usuarios where Login = '$login'");

// imprime a pergunta do usuario
while($linha = mysql_fetch_object($consulta)) {
	echo "<b>".$linha->Pergunta."?</b>";
}
?>

<center>
<b>Resposta:</b>
          <input name="resposta" type="text" id="resposta" size="40" maxlength="200" />
<br>
<b>Login:</b>
          <input name="login" type="text" id="login" size="40" maxlength="200" />
<br>
          <input type="submit" name="mostar" value="Enviar" id="mostar" />
</form>
</body>
</html>
