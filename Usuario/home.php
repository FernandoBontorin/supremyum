<?php

include "../Config/config_sistema.php";

include "../validar_session.php";

include "../Config/tropasdados.php";

include "../engine/recursos.php";

include "adfly.php";



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
		echo "<br>You don't have a village!<br>";
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


<div id="linkest" name="linkest">
<a href="rank.php"><img src="../img/flamulaest.png"></a>
</div>

<div id="linkmov" name="linkmov">
<a href="tmov.php"><img src="../img/flamulamov.png"></a>
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


$nome1 = "t".$povolocal."1nome";
$nome2 = "t".$povolocal."2nome";
$nome3 = "t".$povolocal."3nome";
$nome4 = "t".$povolocal."4nome";
$nome5 = "t".$povolocal."5nome";
$nome6 = "t".$povolocal."6nome";
$nome7 = "t".$povolocal."7nome";
$nome8 = "t".$povolocal."8nome";
$nome9 = "t".$povolocal."9nome";
echo '
<center>
<div  >
<table border="1" style="background-color: #DCDCDC;">

<td align="center"><b>Troops</b></td><td align="center">'.$$nome1.'</td><td align="center">'.$$nome2.'</td><td align="center">'.$$nome3.'</td><td align="center">'.$$nome4.'</td><td align="center">'.$$nome5.'</td><td align="center">'.$$nome6.'</td><td align="center">'.$$nome7.'</td><td align="center">'.$$nome8.'</td><td align="center">'.$$nome9.'</td>
<tr>
<td align="center"><b>Amount</b></td><td align="center">'.$linha5w->t1.'</td><td align="center">'.$linha5w->t2.'</td><td align="center">'.$linha5w->t3.'</td><td align="center">'.$linha5w->t4.'</td><td align="center">'.$linha5w->t5.'</td><td align="center">'.$linha5w->t6.'</td><td align="center">'.$linha5w->t7.'</td><td align="center">'.$linha5w->t8.'</td><td align="center">'.$linha5w->t9.'</td>
</table>
</div>









</center>
'

;}'
';
} else {

echo '
<center><div style="background-color: white; border-style: solid; border-width: 1; width: 30%;">
<b>Click <a href="dados_usuario.php">HERE</a> to create a village!</b></div>
</center>';

}}


?>




</body>
</html>