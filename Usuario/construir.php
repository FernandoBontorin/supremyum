<?php
include "padrao.php";
?>



<div id="frameed" name="frameed" style="position: absolute; margin-left: 5px;">
<iframe scrolling="no" id="iframeeds" name="iframeeds" src="padraoframe.php">
</iframe>


</div>

<?php $consulta38975 = mysql_query("select * from aldeias where dono = '$login_usuario'");
while($linha72 = mysql_fetch_object($consulta38975)) {
?>

<center>
<div id="edlist" name="edlist" style="margin-top: 5px;">
<table border="1" bgcolor="white" style=" text-align: center;">
<td>
<b>
Building
</b>
</td>
<td>
<b>
Level
</b>
</td>
<td>
<b>
Next Level
</b>
</td>
<tr>
<td>
<a href="edcentral.php" target="iframeeds">Main Building</a>
</td>
<td>
<?php echo' '.$linha72->edcentralnv;?>
</td>
<td>
<?php echo' '.$linha72->edcentralnv + 1;?>
</td>
<tr>
<td>
<a href="armazem.php" target="iframeeds">Warehouse</a>
</td>
<td>
<?php echo' '.$linha72->armazemnv;?>
</td>
<td>
<?php echo' '.$linha72->armazemnv + 1;?>
</td>
<tr>
<td>
<a href="galpao.php" target="iframeeds">Food Warehouse</a>
</td>
<td>
<?php echo' '.$linha72->galpaonv;?>
</td>
<td>
<?php echo' '.$linha72->galpaonv + 1;?>
</td>
<tr>
<td>
<a href="quartel.php" target="iframeeds">Barracks</a>
</td>
<td>
<?php echo' '.$linha72->quartelnv;?>
</td>
<td>
<?php echo' '.$linha72->quartelnv + 1;?>
</td>
<tr>
<td>
Stable
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Offensive Arsenal
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Defensive Arsenal
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Market
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Academy
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Geographical Research Center
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Economic Research Center
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Embassy
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Wall
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>


</table>
</div>
</center>

<?php 
}
?>
