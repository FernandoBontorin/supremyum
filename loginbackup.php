<?php
include "Config/config_sistema.php";
?>
<html>

<head>

<style type="text/css">

a:link, a:visited {

text-decoration: none;

color: green;

}

a:hover {

text-decoration: underline;

color: #f00;

}

a:active {

text-decoration: none;

}

</style>

</head>

<body>

<center>

<b><? echo $lg_tipodejogo; ?></b><br>

<h3><a href="cadastro.php"><? echo $lg_registrar_agora; ?></a></h3><br>

<h3><font color="orange"><? echo $lg_sermao_de_construcao; ?></font></h3>

<form action="logar.php" method="post" enctype="multipart/form-data" name="formlogin">

<?php echo"Username"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."Password";?><br>

<input name="login" type="text" id="login" maxlength="200" />

<input name="senha" type="password" id="label" maxlength="15" />

<br>

<input type="submit" name="logar" value="Logar" id="logar" onClick="this.form.target='_parent';return true;"/>

<br>

<a href="Senha/lembrar_senha.php" class="style3"><? echo $lg_recuperar_senha; ?></a> 

</body>

</html>