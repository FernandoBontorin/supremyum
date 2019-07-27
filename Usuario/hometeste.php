<?php
include "../validar_session.php";


include "../Config/config_sistema.php";





// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");

$online = ("0");
$updates = mysql_query("update dados_usuarios set online = '$online' where Login = '$login_usuario'");





?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="StyleSheet" href="style.css">
<style type="text/css">
<!--

-->
</style>







</head>













<table name="producao" id="producao" align="right">
<td>

	    <?php





$consulta30005 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha8 = mysql_num_rows($consulta30005);


while($linha8 = mysql_fetch_object($consulta30005)) {
echo "<center><b>Madeira Por Hora  = ".$linha8 ->madeirahora;"</b></center>";
echo "<center><b>Ouro Por Hora  = ".$linha8 ->ourohora;"</b></center>";
echo "<center><b>Ferro Por Hora  = ".$linha8 ->ferrohora;"</b></center>";
echo "<center><b>Comida Por Hora  = ".$linha8 ->comidahora;"</b></center>";
}


?>
</td>
</table>
<center>
<?php




include "../engine/recursos.php";

?>


</center>






<script>
function abrir() {
    var el = document.getElementById('spoiler');
    if (el.style.display == 'none') {
        el.style.display = 'block';
    }else {
        el.style.display = 'none';
    }
}
</script>







<img src="../img/espadaslayer.png" onclick="abrir();">
<div id="spoiler" style="display:none;">




<div id="tableniveis1" name="tableniveis1">
<?php

$consulta3000999 = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	$linha590 = mysql_num_rows($consulta3000999);

while($linha590 = mysql_fetch_object($consulta3000999)) {
if  ($linha590->vilas ==1) {

?>
<table bgcolor="white" border="5">
<form action="madeiraup.php" target="iframerecursos" name="madeiraupform" id="madeiraupform"  method="post" enctype="multipart/form-data">
<tr>
<td>
Prod. de madeira: <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelmadeira;                   } ?>
</td>
<td>

<input type="submit" name="madeiraup" id="madeiraup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelmadeira + 1;                   } ?>"></input>



</td>
</tr>
</form>


<form action="ouroup.php" target="iframerecursos" name="ouroupform" id="ouroupform"  method="post" enctype="multipart/form-data">
<tr>
<td>
Prod. de ouro: <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelouro;                   } ?>
</td>
<td>
<input type="submit" name="ouroup" id="ouroup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelouro + 1;                   } ?>"></input>
</td>
</tr>
</form>
<form action="ferroup.php" target="iframerecursos" name="ferroupform" id="ferroupform"  method="post" enctype="multipart/form-data">

<tr>
<td>
Prod. de ferro: <?php             $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelferro;                   } ?>
</td>
<td>
<input type="submit" name="ferroup" id="ferroup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelferro + 1;                   } ?>"></input>
</td>
</form>
<form action="comidaup.php" target="iframerecursos" name="comidaupform" id="comidaupform"  method="post" enctype="multipart/form-data">

<tr>
<td>
Prod. de comida: <?php               $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelcomida;                   } ?>
</td>

<td>
<input type="submit" name="comidaup" id="comidaup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelcomida + 1;                   } ?>"></input>
</td>

</tr>

</form>
</table>
</div>
<div id="recursosframe" name="recursosframe">
<td>
<iframe name="iframerecursos" id="iframerecursos" style="background-image:url('../img/bg1.jpg')" scrolling="no" allowtransparency="true"></iframe>
</td>
</div>
</div>
</div>


















<center>
<div id="vila" name="vila">
<?php
include "vila.php";
?>
</div>
</center>
<?php
}}




?>


</body>
</html>