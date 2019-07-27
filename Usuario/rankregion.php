<html>
<body>
<?php
include "../validar_session.php";
include "../Config/config_sistema.php";
$contagem = 1;


function contagem() {
global $contagem;
$query = "SELECT reg, SUM(pop) FROM aldeias GROUP BY reg"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
	echo $contagem."<hr>";
$contagem = $contagem + 1;
}}


function pop() {
$query = "SELECT reg, SUM(pop) FROM aldeias GROUP BY reg ORDER BY SUM(pop) DESC LIMIT 100"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
	echo $row['SUM(pop)']."<hr>";
}}


function reg() {
$query = "SELECT reg, SUM(pop) FROM aldeias GROUP BY reg ORDER BY SUM(pop) DESC LIMIT 100"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
$regiao = $row['reg'];
If ($regiao == "1") { $regiao = "Nordeste"; }
If ($regiao == "2") { $regiao = "Noroeste"; }
If ($regiao == "3") { $regiao = "Sudoeste"; }
If ($regiao == "4") { $regiao = "Sudeste"; }
	echo $regiao."<hr>";
}}

function ald() {
$query = "SELECT reg, COUNT(dono) FROM aldeias GROUP BY reg ORDER BY SUM(pop) DESC LIMIT 100"; 
$result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
echo $row['COUNT(dono)']."<hr>";
}}
?>

<center>
<table border="1" cellpadding="5" cellspacing="0" margin="0" style="background-color: #F5DEB3;">
<td align="center"><b>Nº</b></td><td align="center"><b>Região</b></td><td align="center"><b>Aldeias</b></td><td align="center"><b>População</b></td><tr>
<td align="center"><?php contagem(); ?></td><td align="center"><?php reg(); ?></td><td align="center"><?php ald(); ?></td><td align="center"><?php pop() ?></td></tr>
</table>
</center>
</html>
</body>
<?php

?>