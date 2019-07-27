<?php
// inclui o arquivo de validar sessão
include "../validar_session.php";
// inclui o arquivo de configuração do sistema
include "../Config/config_sistema.php";

// faz consulta no banco de dados
$consulta = mysql_query("select * from dados_usuarios");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>

<body>
<form action="deletar_usuario.php" method="post" enctype="multipart/form-data">
<table width="732" border="0" cellpadding="0" cellspacing="0">
    <td height="52">&nbsp;</td>
    <td colspan="6" valign="top"><table width="100%" border="2" bordercolor="#FFFFFF" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="258" height="24" align="center" valign="middle" bgcolor="#000000"><span class="style3">Login:</span></td>
          <td width="278" align="center" valign="middle" bgcolor="#000000" class="style3">E-mail</td>
          <td width="67" align="center" valign="middle" bgcolor="#000000" class="style3">Excluir</td>
        </tr>
  <?php
while($linhas = mysql_fetch_object($consulta)) {
?>
      <tr>
        <td height="24" align="center" valign="middle" bgcolor="#CCCCCC"><?php echo $linhas->Login;?>&nbsp;</td>
          <td align="center" valign="middle" bgcolor="#CCCCCC"><?php echo $linhas->Email;?>&nbsp;</td>
          <td align="center" valign="middle" bgcolor="#CCCCCC" class="style2"><a href="deletar_usuario.php?codigo=<?php echo $linhas->ID;?>" class="style2">X</a></td>
        </tr>
      
  <?php
}
?>
      
      
      
      
    </table></td>

</table>
</form>
</body>
</html>
