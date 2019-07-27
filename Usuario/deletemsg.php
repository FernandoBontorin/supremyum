<?php
include "padrao.php";



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
<table width="100%" border="1">
<td align="center" colspan="1" width="50%"><b>Remetente</b></td>
<td align="center" colspan="1" width="50%"><b>Assunto</b></td>
</table>


<hr width="100%">

<br>
</div>

<table name="remassu" id="remassu">
<td width="49%" align="left">
<div id="remetentelist" name="remetentelist" align="left">
<form action="deletemsgscript.php" name="deletemsg" id="deletemsg"  method="post" enctype="multipart/form-data">
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
	echo "<center>".$linha->assunto."";





?>





<input type="submit" name="deleteID" id="deleteID" value=<?php echo " ".$linha->ID.""; ?>>
</center>



<hr width="100%">

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