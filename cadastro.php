<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="cadastro.css" rel="stylesheet" type="text/css" />
</head>

<body>
<a href="login.php">
<div id="voltarlogin">
<center>
<b>Back</b>
</center>
</div>
</a>
<form action="cadastra_usuario.php" method="post" enctype="multipart/form-data" name="formcadastro">
Login:<center><input name="login" type="text" id="login" size="40" maxlength="200" /></center>
Password:<center><input name="senha" type="password" id="label" size="20" maxlength="15" /></center>
Password Confirm: <center><input name="rep_senha" type="password" id="label2" size="20" maxlength="15" /></center>
Email:<center><input name="email" type="text" id="label4" size="40" maxlength="200" /></center>
Secret Ask:<center><input name="pergunta" type="text" id="label11" size="40" maxlength="200" /></center>
Secret Answer:<center><input name="resposta" type="text" id="label12" size="40" maxlength="200" /></center>
Civilization:
<br>
<input type="radio" name="criarciv" id="criarciv" value="1" checked="true">Germans
<input type="radio" name="criarciv" id="criarciv" value="2">Apaches
<input type="radio" name="criarciv" id="criarciv" value="3">Aztecs
<input type="radio" name="criarciv" id="criarciv" value="4">Byzantines
<input type="radio" name="criarciv" id="criarciv" value="5">British
<input type="radio" name="criarciv" id="criarciv" value="6">Cherokees
<input type="radio" name="criarciv" id="criarciv" value="7">Spanish
<input type="radio" name="criarciv" id="criarciv" value="8">French
<input type="radio" name="criarciv" id="criarciv" value="9">Dutch
<input type="radio" name="criarciv" id="criarciv" value="10">Incas
<input type="radio" name="criarciv" id="criarciv" value="11">Italians
<input type="radio" name="criarciv" id="criarciv" value="12">Portuguese
<input type="radio" name="criarciv" id="criarciv" value="13">Russians
<input type="radio" name="criarciv" id="criarciv" value="14">Swiss
<input type="radio" name="criarciv" id="criarciv" value="15">Turks
<center>
<br>
      <input type="submit" name="cadastrar" value="Register!" id="cadastrar" />
      <input type="reset" name="limpar" value="Clear" id="label13" />
<br>
</center>
</form>
</body>
</html>
