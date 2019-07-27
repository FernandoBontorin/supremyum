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
<b>War Game - Browser</b><br>
<h3><a href="cadastro.php">Register Now!!</a></h3><br>
<h3><font color="orange">Game under construction! But you can still register!</font></h3>
<form action="logar.php" method="post" enctype="multipart/form-data" name="formlogin">
<?php echo"Username"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."Password";?><br>
<input name="login" type="text" id="login" maxlength="200" />
<input name="senha" type="password" id="label" maxlength="15" />
<br>
<input type="submit" name="logar" value="Logar" id="logar" onclick="this.form.target='_parent';return true;"/>
<br>
<a href="Senha/lembrar_senha.php" class="style3">Forgot pass?</a> 
</body>
</html>