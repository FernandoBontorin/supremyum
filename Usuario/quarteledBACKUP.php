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
include "../Config/tropasdados.php";
$consultaaaacc = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linhaaaacc = mysql_num_rows($consultaaaacc);
while($linhaaaacc = mysql_fetch_object($consultaaaacc)) {
$povo = $linhaaaacc->povo;


function echopovo() {
global $povo, $p1nome, $p2nome, $p3nome, $p4nome, $p5nome, $p6nome, $p7nome, $p8nome, $p9nome, $p10nome, $p11nome, $p12nome, $p13nome, $p14nome, $p15nome;
If ($povo == 1) {
$meupovo = "$p1nome";
echo $meupovo; 
 } else { 
If ($povo == 2) {
$meupovo = "$p2nome";
echo $meupovo; 
} else {
If ($povo == 3) {
$meupovo = "$p3nome";
echo $meupovo; 
} else {
If ($povo == 4) {
$meupovo = "$p4nome";
echo $meupovo; 
} else {
If ($povo == 5) {
$meupovo = "$p5nome";
echo $meupovo; 
} else {
If ($povo == 6) {
$meupovo = "$p6nome";
echo $meupovo; 
 } else { 
If ($povo == 7) {
$meupovo = "$p7nome";
echo $meupovo; 
} else {
If ($povo == 8) {
$meupovo = "$p8nome";
echo $meupovo; 
} else {
If ($povo == 9) {
$meupovo = "$p9nome";
echo $meupovo; 
} else {
If ($povo == 10) {
$meupovo = "$p10nome";
echo $meupovo; 
} else {
If ($povo == 11) {
$meupovo = "$p11nome";
echo $meupovo; 
 } else { 
If ($povo == 12) {
$meupovo = "$p12nome";
echo $meupovo; 
} else {
If ($povo == 13) {
$meupovo = "$p13nome";
echo $meupovo; 
} else {
If ($povo == 14) {
$meupovo = "$p14nome";
echo $meupovo; 
} else {
If ($povo == 15) {
$meupovo = "$p15nome";
echo $meupovo; 
} else {
 }}}}}}}}}}}}}}}}

$includee = include "../Config/tropasdados.php";
function echotropa() {
global $povo, $t11atk, $t11nome;
echo $t11atk;
echo $t11nome;
}



If ($linhaaaacc->quartelnv <= 0) {

echo "<font color=red><b>Quartel ainda não construído!</font></b>";


} else {
}

?>
<div id="tabela1" name="tabela1">
<h3>
<?php echo echotropa(); ?>
</h3>
<table>
<td>
<div id="tabela2" name="tabela2">


</div>



</td>
</table>
</div>





</center>

<?php
}
?>