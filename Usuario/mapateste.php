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



<div id="mapa" name="mapa" style="height: 100%; width: 100%;">
<form action="mapaframe.php" target="fm" name="mapalink" id="mapalink"  method="get" enctype="multipart/form-data">
<input type="hidden" value="0" name="var1" id="var1">
<input type="hidden" value="0" name="motion" id="motion">
<?php $x = $linhamapa->x; $y = $linhamapa->y; ?>
<table border="0" cellpadding="0" cellspacing="0" style="height: 100%; width: 100%;">
<td></td><td><a href="mapaframe.php?motion=0&var1=0"target="fm">
<input type="submit" name="var1" id="var1" value="1"></a></td><td></td><tr>
<td></td><td><input type="submit" value="01" id="motion" name="motion"></td><td></td></tr><tr>
<td><input type="submit" value="-10" id="motion" name="motion"></td><td height="300"><iframe border="0" height="450" width="100%" id="fm" name="fm" src="mapaframe.php?motion=0&var1=1"></iframe></td><td><input type="image" src="../img/arrow.png" border="0" value="10" id="motion" name="motion"></td></tr><tr>
<td></td><td><input type="submit" value="-01" id="motion" name="motion"></td><td></td></tr>
</table>
</form>
</div>







<br>
<br>
<br><b>
<font color="blue">1,2,3 = X</font><br>
<font color="red">1,2,3 = Y</font><br><br>
</b>


0 = Nenhuma vila no local
<br>
# = Vila no local

</center>
</body>
</html>

<?php } ?>