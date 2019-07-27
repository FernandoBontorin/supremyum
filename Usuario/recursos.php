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






}

?>
</td>
</tr>
</table>
</div>
<center>

<div id="recursostudo" name="recursostudo">

<div name="tabelaproducao" id="tabelaproducao">
<table name="producao" id="producao" border="5">
<td>
	    <?php
$consulta30005 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha8 = mysql_num_rows($consulta30005);
while($linha8 = mysql_fetch_object($consulta30005)) {
echo "<center><b>Wood per hour  = ".$linha8 ->madeirahora;"</b></center>";
?></td><td><?php
echo "<center><b>Gold per hour  = ".$linha8 ->ourohora;"</b></center>";
?></td><td><?php
echo "<center><b>Iron per hour  = ".$linha8 ->ferrohora;"</b></center>";
?></td><td><?php
echo "<center><b>Food per hour  = ".$linha8 ->comidahora;"</b></center>";
}


?>
</td>
</table>
</div>
</center>



<center>
<?php




include "../engine/recursos.php";

?>


</center>














<div id="recursos">



<b>
<center>
<div id="tableniveis1" name="tableniveis1">
<?php

$consulta3000999 = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	$linha590 = mysql_num_rows($consulta3000999);

while($linha590 = mysql_fetch_object($consulta3000999)) {
if  ($linha590->vilas ==1) {

?>
<table bgcolor="white" border="5" cellpadding="0" callspacing="0">
<form action="madeiraup.php" target="iframerecursos" name="madeiraupform" id="madeiraupform"  method="post" enctype="multipart/form-data">
<tr>
<td>
Wood level: <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelmadeira;                   } ?>
</td>
<td>

<input type="submit" name="madeiraup" id="madeiraup" value="Increase to level  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelmadeira + 1;                   } ?>"></input>



</td>
</tr>
</form>


<form action="ouroup.php" target="iframerecursos" name="ouroupform" id="ouroupform"  method="post" enctype="multipart/form-data">
<tr>
<td>
Gold level: <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelouro;                   } ?>
</td>
<td>
<input type="submit" name="ouroup" id="ouroup" value="Increase to level  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelouro + 1;                   } ?>"></input>
</td>
</tr>
</form>
<form action="ferroup.php" target="iframerecursos" name="ferroupform" id="ferroupform"  method="post" enctype="multipart/form-data">

<tr>
<td>
Iron level: <?php             $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelferro;                   } ?>
</td>
<td>
<input type="submit" name="ferroup" id="ferroup" value="Increase to level  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelferro + 1;                   } ?>"></input>
</td>
</form>
<form action="comidaup.php" target="iframerecursos" name="comidaupform" id="comidaupform"  method="post" enctype="multipart/form-data">

<tr>
<td>
Food level: <?php               $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelcomida;                   } ?>
</td>

<td>
<input type="submit" name="comidaup" id="comidaup" value="Increase to level  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelcomida + 1;                   } ?>"></input>
</td>

</tr>

</form>
</table>
</div>
</center>
<center>
</b>
<div id="recursosframe" name="recursosframe">
<td>
<iframe name="iframerecursos" id="iframerecursos" style="background-image:url('../img/bg1.jpg')" scrolling="no" allowtransparency="true"></iframe>
</td>
</div>
</div>
</div>
</div>


<?php 
}}
?>