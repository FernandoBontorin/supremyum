<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

$x = " ";
$y = " ";
$player=" ";
$aldeia=" ";
$pop=" ";
$clan=" ";
$idald=" ";
@$cood = $_GET['cood'];

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
$idald = $linhasmap8->ID;
}
}
?>

<html>
<link rel="StyleSheet" href="frame.css">
<body margin="0" border="0">
<center>
<table border="1" cellpadding="0" cellspacing="0">
<td colspan="2" width="100" align="center"><b>Coordinates:</b></td>
<td colspan="2" width="100" align="center"><?php echo"<b>X:</b>".$x."  <b>Y:</b>".$y;?></td>
<tr>
<td width="100" align="center"><b>Player:</b></td>
<td width="100" align="center"><?php echo"$player";?></td>
<td width="100" align="center"><b>Village:</b></td><td width="100" align="center"><?php echo"$aldeia";?></td>
<tr>
<td width="100" align="center"><b>Population:</b></td>
<td width="100" align="center"><?php echo"$pop";?></td>
<td width="100" align="center"><b>Clan:</b></td>
<td width="100" align="center"><?php echo"$clan";?></td></tr>
<tr>
<td colspan="4" width="100" align="center">
	<form action="aldprof.php" name="fald" id="fald"  method="get" enctype="multipart/form-data" target="_blank">
		<input type="hidden" value="<?php echo $aldeia;?>" name="aldeiapver" id="aldeiapver">
		<input type="hidden" value="<?php echo $idald;?>" name="idpver" id="idpver">
		<?php 
		If($linhasmap9 != 0){
		$mostrar = "Ver página da aldeia: ".$aldeia; 
		$akkk = 1;
		} else {
		$mostrar = "";
		$akkk = 0;
		}?>
		<?php If($akkk != 0){
		echo'
		<input type="submit" value="Ver página da aldeia: '.$aldeia.'">';}?>
	</form>
</td></tr>
</table>
</center>
<?php ?>
</body>
</html>





