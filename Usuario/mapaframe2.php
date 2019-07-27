<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

$x = " ";
$y = " ";
$player=" ";
$aldeia=" ";
$pop=" ";
$clan=" ";
$valuesub=" ";
$cood = $_GET['cood'];

$consultasmap8 = mysql_query("select * from aldeias where xy = '$cood'");
	$linhasmap9 = mysql_num_rows($consultasmap8);
while($linhasmap8 = mysql_fetch_object($consultasmap8)) {

If($linhasmap9 = 1){
$player = $linhasmap8->dono;
$aldeia = $linhasmap8->nome;
$pop = $linhasmap8->pop;
$clan = $linhasmap8->clan;
$x = $linhasmap8->x;
$y = $linhasmap8->y;
$valuesub = $linhasmap8->ID;
}
}
?>

<center>
<table border="1" cellpadding="0" cellspacing="0">
<td colspan="2" width="100" align="center"><b>Coordenadas:</b></td><td colspan="2" width="100" align="center"><?php echo"<b>X:</b>".$x."  <b>Y:</b>".$y;?></td><tr><td width="100" align="center"><b>Jogador:</b></td><td width="100" align="center"><?php echo"$player";?></td><td width="100" align="center"><b>Aldeia:</b></td><td width="100" align="center"><?php echo"$aldeia";?></td><tr><td width="100" align="center"><b>População:</b></td><td width="100" align="center"><?php echo"$pop";?></td><td width="100" align="center"><b>Clã:</b></td><td width="100" align="center"><?php echo"$clan";?></td></tr><tr><td colspan="4" width="100" align="center"><input type="submit" value="<?php echo $valuesub;?>"></td></tr>
</table>
</center>






