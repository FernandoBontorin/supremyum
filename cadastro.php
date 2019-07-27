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
<form action="cadastra_usuario.php" method="post" enctype="multipart/form-data" name="formcadastro">
Login:<center><input name="login" type="text" id="login" size="40" maxlength="200" /></center>
Senha:<center><input name="senha" type="password" id="label" size="20" maxlength="15" /></center>
Repita sua senha: <center><input name="rep_senha" type="password" id="label2" size="20" maxlength="15" /></center>
Email:<center><input name="email" type="text" id="label4" size="40" maxlength="200" /></center>
Pergunta secreta:<center><input name="pergunta" type="text" id="label11" size="40" maxlength="200" /></center>
Resposta:<center><input name="resposta" type="text" id="label12" size="40" maxlength="200" /></center>
Civilização:
<br>
<input type="radio" name="criarciv" id="criarciv" value="1" checked="true">Britânicos
<input type="radio" name="criarciv" id="criarciv" value="2">Espanhóis
<input type="radio" name="criarciv" id="criarciv" value="3">Russos
<input type="radio" name="criarciv" id="criarciv" value="4">Holandeses
<input type="radio" name="criarciv" id="criarciv" value="5">Turcos
<input type="radio" name="criarciv" id="criarciv" value="6">Portugueses
<input type="radio" name="criarciv" id="criarciv" value="7">Franceses
<input type="radio" name="criarciv" id="criarciv" value="8">Alemães
<center>
<br>
      <input type="submit" name="cadastrar" value="Cadastrar" id="cadastrar" />
      <input type="reset" name="limpar" value="Limpar dados" id="label13" />
<br>
</center>
</form>
</body>
</html>
