<html>
<body>
<?php
include "../validar_session.php";
include "../Config/config_sistema.php";
$contagem = 1;

function pop() {
$query = "SELECT reg, SUM(pop) FROM aldeias GROUP BY reg"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
	echo @$row['pop']. " = $". $row['SUM(price)'];
	echo "<br />";
}}
?>

<center>
<table border="1" cellpadding="5" cellspacing="0" margin="0" style="background-color: #F5DEB3;">
<td align="center"><b>Nº</b></td><td align="center"><b>Região</b></td><td align="center"><b>Aldeias</b></td><td align="center"><b>Jogadores</b></td><td align="center"><b>População</b></td><tr>
<td align="center"><?php  ?></td><td align="center"><?php ?></td><td align="center"><?php  ?></td><td align="center"><?php  ?></td><td align="center"><?php  ?></td></tr>
</table>
</center>
</html>
</body>
<?php

?>