<?php
include "padrao.php";
include "../Config/formulas.php";
?>


<center>
<div id="manuallink" name="manuallink">
<a href="manualtropas.php" target="_blank">Manual das tropas</a>
</div>
<br>
<?php
$consultaaaacc = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linhaaaacc = mysql_num_rows($consultaaaacc);
while($linhaaaacc = mysql_fetch_object($consultaaaacc)) {


If ($linhaaaacc->quartelnv <= 0) {

echo "<font color=red><b>Quartel ainda não construído!</font></b>";


} else {













}}