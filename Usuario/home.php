<?php
include "../validar_session.php";

include "../Config/tropasdados.php";

include "../Config/config_sistema.php";

include "../engine/recursos.php";




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
echo "<center><b>Aldeia: ".$linha7->nome."</b></center>";
?>
</td>
<td>
<?php
echo "<center><b>População: $linha7->popdisponivel  / ".$linha7->pop."</b></center>";



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
	if($linha5 != 0) {

echo '
<div id="linkr" name="linkr">
<a href="recursos.php"><img src="../img/flamular.png"></a>
</div>

<div id="linkespadas" name="linkespadas">
<a href="quarteled.php"><img src="../img/flamulaespada.png"></a>
</div>

<div id="linkmartelo" name="linkmartelo">
<a href="construir.php"><img src="../img/flamulamartelo.png"></a>
</div>









<center>
<div id="vila" name="vila" class="vila">';

include "vila.php";


'
</div>

</center>
;



';

echo '</center> 

';
$consulta3000w = mysql_query("select * from tropas where dono = '$login_usuario'");	$linha5w = mysql_num_rows($consulta3000w); while($linha5w = mysql_fetch_object($consulta3000w)) { $povo = $linha->povo;
If ($povo != 1) { $display1='none'; } else { $display1='block'; }
If ($povo != 2) { $display2='none'; } else { $display2='block'; }
If ($povo != 3) { $display3='none'; } else { $display3='block'; }
If ($povo != 4) { $display4='none'; } else { $display4='block'; }
If ($povo != 5) { $display5='none'; } else { $display5='block'; }
If ($povo != 6) { $display6='none'; } else { $display6='block'; }
If ($povo != 7) { $display7='none'; } else { $display7='block'; }
If ($povo != 8) { $display8='none'; } else { $display8='block'; }
If ($povo != 9) { $display9='none'; } else { $display9='block'; }
If ($povo != 10) { $display10='none'; } else { $display10='block'; }
If ($povo != 11) { $display11='none'; } else { $display11='block'; }
If ($povo != 12) { $display12='none'; } else { $display12='block'; }
If ($povo != 13) { $display13='none'; } else { $display13='block'; }
If ($povo != 14) { $display14='none'; } else { $display14='block'; }
If ($povo != 15) { $display15='none'; } else { $display15='block'; }

echo '
<center>
<div style="display:'.$display1.';" id="t1" name="t1"  >
<table border="1" style="background-color: #DCDCDC;">
<td align="center"><b>Tropas</b></td><td align="center">'.$t11nome.'</td><td align="center">'.$t12nome.'</td><td align="center">'.$t13nome.'</td><td align="center">'.$t14nome.'</td><td align="center">'.$t15nome.'</td><td align="center">'.$t16nome.'</td><td align="center">'.$t17nome.'</td><td align="center">'.$t18nome.'</td><td align="center">'.$t19nome.'</td>
<tr>
<td align="center"><b>Quantidade</b></td><td align="center">'.$linha5w->t11.'</td><td align="center">'.$linha5w->t12.'</td><td align="center">'.$linha5w->t13.'</td><td align="center">'.$linha5w->t14.'</td><td align="center">'.$linha5w->t15.'</td><td align="center">'.$linha5w->t16.'</td><td align="center">'.$linha5w->t17.'</td><td align="center">'.$linha5w->t18.'</td><td align="center">'.$linha5w->t19.'</td>
</table>


</div>


</center>
'

;}'
';
} else {

echo '
<center>
<b>Clique <a href="dados_usuario.php">aqui</a> para criar uma colônia</b>
</center>';

}}


?>




</body>
</html>