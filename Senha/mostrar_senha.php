<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="esqueceu.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="../logar.php" method="post" enctype="multipart/form-data" name="form_mostra_senha">
<a href="../login.php">
<div id="voltarlogin" name="voltarlogin">
<center>
<b>Voltar</b>
</center>
</a>
</div>
    <?php
// inclui o arquivo de configuração do sistema
include "../Config/config_sistema.php";

// recebe dados do formulario
$login = htmlspecialchars($_POST['login']);
$resposta = htmlspecialchars($_POST['resposta']);

// faz consulta no banco de dados
$consulta = mysql_query("select * from dados_usuarios where Login = '$login'");

// imprime dados do usuario
while($linha = mysql_fetch_object($consulta)) {
	// verifica se a resposta é verdadeira
	if($resposta == $linha->Resposta) {
?>

	<center>
<b>Login:</b><input name="login" type="text" id="login" value="<?php echo $linha->Login;?>" size="40" maxlength="200" /><br>
<b>Senha:</b><input name="senha" type="text" id="label" value="<?php echo $linha->Senha;?>" size="20" /><br>
<b>Email:</b><input name="email" type="text" id="label3" value="<?php echo $linha->Email;?>" size="40" maxlength="200" /><br>
<input type="submit" name="logar" value="Logar" id="logar" />

<?php
	} else {
		echo "<font color=red><b>
			  Sua resposta esta errada!
		  	</font></b>";
		exit;
	}
}
?>	
</form>
</body>
</html>
