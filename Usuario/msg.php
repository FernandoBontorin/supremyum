<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="StyleSheet" href="style.css">
<style type="text/css">
<!--

-->
</style>
</head>
<body>

<?php
include "menu1.php";
?>

<center>
<div id="msglinks" name="msglinks">
<center>
 <a href="msg.php">Caixa de Entrada</a> | <a href="enviar.php">Enviar</a> | <a href="deletemsg.php">Deletar Mensagens</a> 
</center>
</div>
</center>

<center>
<div id="caixadeentrada" name="caixadeentrada">
<div id="caracteristicas" name="caracteristicas">
<div id="remetente" name="remetente">
<center>
<table width="100%" border="1">
<td align="center" colspan="1" width="50%"><b>Remetente</b></td>
<td align="center" colspan="1" width="50%"><b>Assunto</b></td>
</table>
</center>
</div>
<center>

<hr width="100%">

<br>
</div>

<table name="remassu" id="remassu">
<td width="50%" align="left">
<div id="remetentelist" name="remetentelist" align="left">
<form action="lermsg.php" name="lermsg" id="lermsg"  method="post" enctype="multipart/form-data">
<?php
$consulta2 = mysql_query("select * from mensagens where destino = '$login_usuario'");

while($linha = mysql_fetch_object($consulta2)) {
	echo "<center>".$linha->remetente."</center>";
?>
<hr width="100%">
	    <?php
}
?>
</div>


</td>


<div id="assuntolist" name="assuntolist">
<td>




<?php
$consulta2 = mysql_query("select * from mensagens where destino = '$login_usuario'");

while($linha = mysql_fetch_object($consulta2)) {
	echo "<center>".$linha->assunto."<input type='submit' name='IDmsg' id='IDmsg' value=".$linha->ID." style='position: relative;'></center>";
?>


<hr width="100%">

<div id="leia" name="leia">

</div>



	    <?php
}

?>
</form>



</td>
</div>

</table>















</div>



</div>





</center>

</body>
</html>