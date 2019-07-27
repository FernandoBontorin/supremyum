<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

include "../engine/time.php";




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


<script language="JavaScript"> 
function moveRelogio(){ 
   	momentoAtual = new Date() 
   	hora = momentoAtual.getHours() 
   	minuto = momentoAtual.getMinutes() 
   	segundo=segundo = momentoAtual.getSeconds() ;

   	horaImprimivel = hora + " : " + minuto + " : " + segundo 

   	document.form_relogio.relogio.value = horaImprimivel 


var x = "111111111111";   


   	setTimeout("moveRelogio()",1000) 
} 
</script> 




</head>
<body onload="moveRelogio()">
<form name="form_relogio"> 
<input type="text" name="relogio" size="10"> 
</form> 



<?php
include "menu1.php";
?>



<br>


<?php
while($linha = mysql_fetch_object($consulta)) {
	echo "<b>Olá ".$linha->Login."!</b>";
?>

<?php

$x = "<script>document.write(x)</script>";  
echo $x;

$consulta3000 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha5 = mysql_num_rows($consulta3000);
	if($linha5 != 0) {

while($linha7 = mysql_fetch_object($consulta3000)) {


echo "<center><b>Aldeia: ".$linha7->nome."</b></center>";
echo "<center><b>População: ".$linha7->pop."</b></center>";



}


	} else {
		echo "<br>Você ainda não tem uma colônia<br>
			  Para criar uma, clique em<br>
			Dados do usuário e crie uma";
	}








?>



<table name="producao" id="producao" align="right">
<td>

	    <?php





$consulta30005 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha8 = mysql_num_rows($consulta30005);


while($linha8 = mysql_fetch_object($consulta30005)) {
echo "<center><b>Madeira Por Hora  = ".$linha8 ->madeirahora;"</b></center>";
echo "<center><b>Ouro Por Hora  = 30</b></center>";
echo "<center><b>Ferro Por Hora  = 30</b></center>";
echo "<center><b>Comida Por Hora  = 50</b></center>";
}
}

?>
</td>
<center>
<?php


$consulta30006 = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha86 = mysql_num_rows($consulta30006);


while($linha86 = mysql_fetch_object($consulta30006)) {

echo "<center><b>Madeira   ".$linha86->madeira."</b></center>";
echo "<center><b>Ouro   ".$linha86->ouro."</b></center>";
echo "<center><b>Ferro   ".$linha86->ferro."</b></center>";
echo "<center><b>Comida   ".$linha86->comida."</b></center>";


}

include "../engine/recursos.php";

?>


</center>

<?php

$consulta3000999 = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	$linha590 = mysql_num_rows($consulta3000999);

while($linha590 = mysql_fetch_object($consulta3000999)) {
if  ($linha590->vilas ==1) {

?>

<table border="5">
<tr>
<td>
Prod. de madeira: <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelmadeira;                   } ?>
</td>
<td>

<a href="upnivelmadeira.php">Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelmadeira + 1;                   } ?> </a>



</tr>
</tr>

<tr>
<td>
Prod. de ouro: <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelouro;                   } ?>
</td>
</tr>

<tr>
<td>
Prod. de ferro: <?php             $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelferro;                   } ?>
</td>
</tr>

<tr>
<td>
Prod. de comida: <?php               $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelcomida;                   } ?>
</td>
</tr>


</table>




<?php
}}




?>


</body>
</html>