<?php
include "../validar_session.php";

include "../Config/config_sistema.php";



?>

<?php
$consulta30040 = mysql_query("select * from aldeias where xy = '$xy'");
$linha45 = mysql_num_rows($consulta30040);
if($linha45 == 0) {
echo '0';
} else {
while($linha45 = mysql_fetch_object($consulta30040)) {
?>


<input type="submit" name="aldeiamapa" id="aldeiamapa" value=<?php echo " ".$linha45->dono.""; ?>>
<input type="hidden" name="xyaldeia" id="xyaldeia" value=<?php $xy ?>>

<?php
}}
?>