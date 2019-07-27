<?php
include "../validar_session.php";
include "../Config/config_sistema.php";
include "../Config/tropasdados.php";
include "menu1.php";


$aldeiapver = "0";
@$aldeiapver = $_GET['aldeiapver'];
@$idpver = $_GET['idpver'];
If (isset($idpver)){


$consultasmap08 = mysql_query("select * from aldeias where id = '$idpver'");
	$linhasmap09 = mysql_num_rows($consultasmap08);
while($linhasmap08 = mysql_fetch_object($consultasmap08)) {
?>
<html>
<body>
<?php 
function pnome() {
global $linhasmap08, $p1nome, $p2nome, $p3nome, $p4nome, $p5nome, $p6nome, $p7nome, $p8nome, $p9nome, $p10nome, $p11nome, $p12nome, $p13nome, $p14nome, $p15nome;
$lol = "p".$linhasmap08->povo."nome";
echo " ".$$lol;
}?>
<center>
<table style=" background-color: #DEB887;" border="1" width="100%" height="100%">
<td align="center" width="33%"><b>Informações Gerais</b></td><td align="center" width="33%"><b>Estatísticas</b></td><td align="center" width="33%"><b>Ações</b></td><tr>
<td width="33%" align="center"><img src="../img/vila1.png" align="left" width="100" height="100" border="1"><b>Nick:</b><?php echo " ".$linhasmap08->dono;?><br><b>Nome da aldeia:</b><?php echo " ".$linhasmap08->nome;?><br><b>Coordenadas:</b><?php echo " <b>X:</b>".$linhasmap08->x." <b>Y:</b>".$linhasmap08->y;?><br><b>Clan:</b><?php echo " ".$linhasmap08->clan;?><br><b>Civilização:</b><?php pnome();?></td>
<td width="33%" align="center"><img src="../img/top1000.bmp" align="left" width="100" height="100" border="1"><b>População da aldeia:</b><?php echo " ".$linhasmap08->pop;?><br><b>Posição no ranking de aldeias:</b><?php echo " ";?><br><b>Ataques realizados por essa aldeia:</b><?php echo " ";?><br><b>Ataques sofridos por essa aldeia:</b><?php echo " ";?><br><b>Distância para sua aldeia:</b><?php ;?></td>
</tr>
</table>
</center>

<?php
}} else {


echo "tem nada aki naum";}





?>

</body>
</html>