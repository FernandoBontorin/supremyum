<html>
<body>
<?php
include "../validar_session.php";
include "../Config/config_sistema.php";
include "../Config/tropasdados.php";
$contagem = 1;

function contagem(){
global $contagem;
$busca = mysql_query("SELECT Login FROM dados_usuarios ORDER BY pop DESC LIMIT 100");
while ($ppp = mysql_fetch_array($busca, MYSQL_BOTH)) {
echo $contagem."<hr>";
$contagem = $contagem + 1;
}}

function mosplay(){
$busca = mysql_query("SELECT Login FROM dados_usuarios ORDER BY pop DESC LIMIT 100");
while ($ppp = mysql_fetch_array($busca, MYSQL_BOTH)) {
echo "<a target='_top' href='playerprof.php?login=".$ppp['Login']."'>".$ppp['Login']."<hr></a>";
}}

function aldeias(){
$busca = mysql_query("SELECT Login,vilas FROM dados_usuarios ORDER BY pop DESC LIMIT 100");
while ($ppp = mysql_fetch_array($busca, MYSQL_BOTH)) {
echo $ppp['vilas']."<hr>";
}}

function clan(){
$busca = mysql_query("SELECT Login,clan FROM dados_usuarios ORDER BY pop DESC LIMIT 100");
while ($ppp = mysql_fetch_array($busca, MYSQL_BOTH)) {
echo "<a target='_top' href='clanprof.php?clan=".$ppp['clan']."'>[".$ppp['clan']."]</a><hr>";
}}

function pop(){
$busca = mysql_query("SELECT Login,pop FROM dados_usuarios ORDER BY pop DESC LIMIT 100");
while ($ppp = mysql_fetch_array($busca, MYSQL_BOTH)) {
echo $ppp['pop']."<hr>";
}}

function povo(){
$busca = mysql_query("SELECT Login,pop,povo FROM dados_usuarios ORDER BY pop DESC LIMIT 100");
while ($ppp = mysql_fetch_array($busca, MYSQL_BOTH)) {
global $p1nome,$p2nome,$p3nome,$p4nome,$p5nome,$p6nome,$p7nome,$p8nome,$p9nome,$p10nome,$p11nome,$p12nome,$p13nome,$p14nome,$p999nome;
If ($ppp['povo'] == "1") { $povo = $p1nome;}
If ($ppp['povo'] == "2") { $povo = $p2nome;}
If ($ppp['povo'] == "3") { $povo = $p3nome;}
If ($ppp['povo'] == "4") { $povo = $p4nome;}
If ($ppp['povo'] == "5") { $povo = $p5nome;}
If ($ppp['povo'] == "6") { $povo = $p6nome;}
If ($ppp['povo'] == "7") { $povo = $p7nome;}
If ($ppp['povo'] == "8") { $povo = $p8nome;}
If ($ppp['povo'] == "9") { $povo = $p9nome;}
If ($ppp['povo'] == "10") { $povo = $p10nome;}
If ($ppp['povo'] == "11") { $povo = $p11nome;}
If ($ppp['povo'] == "12") { $povo = $p12nome;}
If ($ppp['povo'] == "13") { $povo = $p13nome;}
If ($ppp['povo'] == "14") { $povo = $p14nome;}
If ($ppp['povo'] == "999") { $povo = $p999nome;}
echo $povo."<hr>";
}}
?>

<center>
<table border="1" cellpadding="5" cellspacing="0" margin="0" style="background-color: #F5DEB3;">
<td align="center"><b>Nº</b></td><td align="center"><b>Player</b></td><td align="center"><b>Aldeias</b></td><td align="center"><b>Clã</b></td><td align="center"><b>Povo</b></td><td align="center"><b>População</b></td><tr>
<td align="center"><?php contagem(); ?></td><td align="center"><?php mosplay(); ?></td><td align="center"><?php aldeias(); ?></td><td align="center"><?php clan(); ?></td><td align="center"><?php povo(); ?></td><td align="center"><?php pop(); ?></td></tr>
</table>
</center>
</html>
</body>
<?php

?>