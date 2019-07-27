<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

include "../engine/time.php";

// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 36px}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {
	color: #000000;
	font-weight: bold;
}
.style4 {
	color: #FF0000;
	font-weight: bold;
}
.style5 {color: #000000}
.style7 {font-size: 12px}

#dados {
	width: 50%;
	height: 50%;
	margin-left: 25%;
	margin-top: 0%;
	border-style: solid;
}
-->
</style>
</head>

<body>
<div id="dados" name="dados">
<form action="atualizar_dados.php" method="post" enctype="multipart/form-data" name="formatualizar">
<table width="628" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="173" height="30">&nbsp;</td>
    <td width="61">&nbsp;</td>
    <td width="252">&nbsp;</td>
    <td width="43">&nbsp;</td>
    <td width="52">&nbsp;</td>
    <td width="47">&nbsp;</td>
  </tr>
  <tr>
    <td height="45">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><span class="style1">Options</span> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="25" valign="middle">
<center>
<?php
while($linha = mysql_fetch_object($consulta)) {
	echo "<b>Hi ".$linha->Login."!</b>";
?></center></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2" valign="top" class="style3"> Options | <a href="mudar_senha.php" class="style3">Change Password</a> | <a href="../logout.php" class="style3">Logout</a> | <a href="home.php">Home</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="24"></td>
    <td colspan="4" valign="top"><p><span class="style5"><span class="style4">Atention:</span></span><span class="style3"> Change your data carefully!<br />
    </span></p></td>
    <td></td>
  </tr>
  <tr>
    <td height="150"></td>
    <td colspan="4" valign="top">
	  <table width="100%" border="2" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0">
	    <!--DWLayoutTable-->
	    
	    
	    <tr>
	      <td width="136" height="24" align="right" valign="middle" bgcolor="#000000" class="style2">E-mail:</td>
            <td colspan="3" valign="middle" bgcolor="#CCCCCC"><label for="label2"></label>
            <input name="email" type="text" id="label2" value="<?php echo $linha->Email;?>" size="40" maxlength="200" /></td>
          </tr>
	    <tr>
	      <td height="24">&nbsp;</td>
            <td width="15">&nbsp;</td>
            <td width="66" valign="top"><label for="Submit"></label>
            <input type="submit" name="atualizar" value="Change email" id="atualizar" /></td>
            <td width="179">&nbsp;</td>
          </tr><center>



</center>
	    <?php
}
?>


      </table></td>
    <td></td>
  </tr>
  <tr>
    <td height="47"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</form>
<center>
<?php



$consulta3002 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha5 = mysql_num_rows($consulta3002);
	if($linha5 == 0) {
		echo "<br>You don't have a village<br>
			  To create one, click <a href=novacolonia.php>HERE</a><br>
			";
	}

?>

</center>
</div>
</body>
</html>
