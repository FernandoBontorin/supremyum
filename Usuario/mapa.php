<?php
include "../validar_session.php";
include "../Config/config_sistema.php";
include "menu1.php";

$consultamapa = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linhamapa = mysql_num_rows($consultamapa);
while($linhamapa = mysql_fetch_object($consultamapa)) {
?>



<html>
<head>


<style type="text/css">
<!--
#mapa table {
	font-size: 30;
	text-align: center;
	width: 100%;
	height: 100%;
}
-->
</style>
</head>
<body>
<center>





<form action="mapaframe.php" target="fm" name="mapalink" id="mapalink"  method="get" enctype="multipart/form-data">
<input type="hidden" value="0" name="var1" id="var1">
<input type="hidden" value="0" name="motion" id="motion">
<input type="hidden" value="" name="irx" id="irx">
<input type="hidden" value="" name="iry" id="iry">
<?php $x = $linhamapa->x; $y = $linhamapa->y; ?>





<div id="control" name="control">
<table border="1" width="100" height="125" cellpadding="0" cellspacing="0" align="left" style="position: fixed; background-color: white;">
<td align="center" colspan="3" style="background-color: white;"><b>Controle<br>do mapa</b></td><tr>
<td align="center"></td><td align="center"><input type="submit" value="01" id="motion" name="motion" ></td><td align="center"></td></tr><tr>
<td align="center"><input type="submit" value="-10" id="motion" name="motion" ></td><td align="center"><a href="mapaframe.php?motion=0&var1=0"target="fm"><input type="submit" name="var1" id="var1" value="1" ></a></td><td align="center"><input type="image" src="../img/arrow.png" border="0" value="10" id="motion" name="motion" ></td></tr><tr>
<td align="center"></td><td align="center"><input type="submit" value="-01" id="motion" name="motion" ></td><td align="center"></td></tr><tr>
<td align="center" colspan="3"><b>Ir para</b></td></tr><tr>
<td align="center" colspan="3"><input type="number" value="" id="irx" name="irx"><br><input type="number" value="" id="iry" name="iry"><br><input type="submit" value="Go!" ></td></tr>
<tr><td colspan="3"><b>N�o utilize a tecla "enter" para ir a uma localidade!!</b></td></tr>
</table>
<center>
<iframe frameborder="0" height="550" width="70%" id="fm" name="fm" src="mapaframe.php?motion=0&var1=1&irx=&iry="></iframe>
</center>
</div>
</form>








</center>
</body>
</html>

<?php } ?>