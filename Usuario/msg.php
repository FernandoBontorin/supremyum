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

<div id="options" name="options">
<center>
<div id="textodaoptions" name="textodaoptions">
 <td colspan="2" valign="top" class="style3"><a href="msg.php"> Mensagens </a>  | <a href="dados_usuario.php" class="style3"> Dados do usu&aacute;rio </a> | <a href="../logout.php" class="style3">Logout</a> | <a href="home.php">Home</a></td>
</div>
</center>
</div>

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
<b>Remetente</b>
</div>

<div id="assunto2" name="assunto2">
<b>Assunto</b>
</div>


<hr width="100%">

<br>
</div>

<table name="remassu" id="remassu">
<td width="49%" align="left">
<div id="remetentelist" name="remetentelist" align="left">
<form action="lermsg.php" name="lermsg" id="lermsg"  method="post" enctype="multipart/form-data">
<?php
$consulta2 = mysql_query("select * from mensagens where destino = '$login_usuario'");

while($linha = mysql_fetch_object($consulta2)) {
	echo "".$linha->remetente."";
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
	echo "".$linha->assunto."";





?>





<input type="submit" name="IDmsg" id="IDmsg" value=<?php echo " ".$linha->ID.""; ?>>


<div id="leia" name="leia">

</div>

<hr width="100%">

	    <?php
}

?>
</form>



</td>
</div>

</table>















</div>
<hr>
<hr>


</div>





</center>

</body>
</html>