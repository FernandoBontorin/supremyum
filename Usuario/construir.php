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
Construção
</b>
</td>
<td>
<b>
Nivel
</b>
</td>
<td>
<b>
Próximo Nível
</b>
</td>
<tr>
<td>
<a href="edcentral.php" target="iframeeds">Edifício Principal</a>
</td>
<td>
<?php echo' '.$linha72->edcentralnv;?>
</td>
<td>
<?php echo' '.$linha72->edcentralnv + 1;?>
</td>
<tr>
<td>
<a href="armazem.php" target="iframeeds">Armazém</a>
</td>
<td>
<?php echo' '.$linha72->armazemnv;?>
</td>
<td>
<?php echo' '.$linha72->armazemnv + 1;?>
</td>
<tr>
<td>
<a href="galpao.php" target="iframeeds">Galpão de Comida</a>
</td>
<td>
<?php echo' '.$linha72->galpaonv;?>
</td>
<td>
<?php echo' '.$linha72->galpaonv + 1;?>
</td>
<tr>
<td>
<a href="quartel.php" target="iframeeds">Quartel</a>
</td>
<td>
<?php echo' '.$linha72->quartelnv;?>
</td>
<td>
<?php echo' '.$linha72->quartelnv + 1;?>
</td>
<tr>
<td>
Estábulo
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Centro de Estratégias
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Mercado
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Centro de Pesquisas Militares
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Centro de Pesquisas Geográficas
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Centro de Pesquisas Econômicas
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Embaixada
</td>
<td>
Nivel
</td>
<td>
Próximo Nível
</td>
<tr>
<td>
Muralha
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
