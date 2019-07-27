<?php
include "Config/config_sistema.php";

$consultal = mysql_query("select * from aldeias");
$linhal = mysql_num_rows($consultal);
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
<table style=" text-shadow: -1px 0 1px black, 0 1px 1px black, 1px 0 1px black, 0 -1px 1px black;" border="1" cellspacing="0" cellpadding="3" bgcolor="#98FB98" width="100%"><td align="center" width="50%"><font color="white"><b>Registered Users</b></font></td><td align="center" width="50%"><font color="white"><b><?php echo $linhal;?></b></font></td></table>
<b>War/Strategy Game - Browser</b><br>
<h3><a href="cadastro.php">Register Now!!</a></h3><br>
<h3><font color="orange">Game under construction! But you can still register!</font></h3>
<form action="logar.php" method="post" enctype="multipart/form-data" name="formlogin">
<table border="0" cellspacing="0"><td align="center">Username</td><td align="center">Password</td><tr>
<td><input name="login" type="text" id="login" maxlength="200" /></td>
<td><input name="senha" type="password" id="label" maxlength="15" /></td></tr></table>
<br>
<input type="submit" name="logar" value="Logar" id="logar" onclick="this.form.target='_parent';return true;"/>
<br>
<a href="Senha/lembrar_senha.php" class="style3">Forgot pass?</a> <br></center>
<div width="100%">
<?php include"changelog.html";?>
</div>
</body>
</html>