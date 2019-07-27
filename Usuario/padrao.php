<?php
include "../validar_session.php";


include "../Config/config_sistema.php";





// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");

$online = ("0");
$updates = mysql_query("update dados_usuarios set online = '$online' where Login = '$login_usuario'");





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




<?php
include "menu1.php";
?>






<center>
<div id="aldeiapop" name="aldeiapop">
<table border="1">
<tr>
<td>
<?php
while($linha = mysql_fetch_object($consulta)) {
	
?>

<?php


$consulta3000 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha5 = mysql_num_rows($consulta3000);
	if($linha5 != 0) {

while($linha7 = mysql_fetch_object($consulta3000)) {

$id = $linha7->ID;
echo "<center><b>ID: ".$linha7->ID."</b></center>";
?>
</td>
<td>
<?php
echo "<center><b>Village: ".$linha7->nome."</b></center>";
?>
</td>
<td>
<?php
echo "<center><b>Population: $linha7->popdisponivel  / ".$linha7->pop."</b></center>";



}


	} else {
		echo "<br>Você ainda não tem uma colônia<br>
			  Para criar uma, clique em<br>
			Dados do usuário e crie uma";
	}








?>
</td>
</tr>
</table>
</div>




</center>

<?php
}
include "../engine/recursos.php";
?>