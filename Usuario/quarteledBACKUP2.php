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
$madeira = $linhaaaacc->madeira;
$ouro = $linhaaaacc->ouro;
$ferro = $linhaaaacc->ferro;
$comida = $linhaaaacc->comida;
$iddavila = $linhaaaacc->ID;

$consultaD = mysql_query("select * from fila where aldeiaid = '$iddavila'");
	$linhaD = mysql_num_rows($consultaD);
while($linhaD = mysql_fetch_object($consultaD)) {



If ($linhaaaacc->quartelnv <= 0) {

echo "<font color=red><b>Quartel ainda não construído!</font></b>";


} else {


If ($linhaaaacc->quartelvalid <= 0) {
echo "<b>Clique <a href='quartelativar.php' target='_blank'>AQUI</a> para ativar seu quartel</b>";

} else {

?>

<?php If ($povo != 1) { $display1='none'; } else { $display1='block'; }
If ($povo != 2) { $display2='none'; } else { $display2='block'; }
If ($povo != 3) { $display3='none'; } else { $display3='block'; }
If ($povo != 4) { $display4='none'; } else { $display4='block'; }
If ($povo != 5) { $display5='none'; } else { $display5='block'; }
If ($povo != 6) { $display6='none'; } else { $display6='block'; }
If ($povo != 7) { $display7='none'; } else { $display7='block'; }
If ($povo != 8) { $display8='none'; } else { $display8='block'; }
If ($povo != 9) { $display9='none'; } else { $display9='block'; }
If ($povo != 10) { $display10='none'; } else { $display10='block'; }
If ($povo != 11) { $display11='none'; } else { $display11='block'; }
If ($povo != 12) { $display12='none'; } else { $display12='block'; }
If ($povo != 13) { $display13='none'; } else { $display13='block'; }
If ($povo != 14) { $display14='none'; } else { $display14='block'; }
If ($povo != 15) { $display15='none'; } else { $display15='block'; }


$timerest = $linhaD->timefim - $tempoatual;
If ($timerest <= 0) {
$timerest = 0;
} else {}

$tempodost11 = 0;
$tempodost12 = 0;
$tempodost13 = 0;
$tempodost14 = 0;
$tempoagora = $tempoatual;


If ($linhaD->t11 > 0) {
$tempodost11 = $linhaD->t11 * HtoS($t11t);
} else {}
If ($linhaD->t12 > 0) {
$tempodost11 = $linhaD->t12 * HtoS($t12t);
} else {}
If ($linhaD->t13 > 0) {
$tempodost11 = $linhaD->t13 * HtoS($t13t);
} else {}
If ($linhaD->t14 > 0) {
$tempodost11 = $linhaD->t14 * HtoS($t14t);
} else {}

$temposobrando = 0;
$tempodetudo = $tempodost11 + $tempodost12 + $tempodost13 + $tempodost14;
$timefim = $linhaD->timefim;
$timecmc = $linhaD->timecmc;
$tempototal = $timefim - $timecmc;
If ($timefim == 0) {
} else {
$temposobrando = $timefim - $tempoagora;
}

$t11tS = HtoS($t11t);
$t12tS = HtoS($t12t);
$t13tS = HtoS($t13t);
$t14tS = HtoS($t14t);
$filat11 = $linhaD->t11;
echo $t11atual.'______';



function atualizatrop() {
global $t11atual, $iddavila, $tempototal, $temposobrando, $t11tS, $filat11, $timefim, $timecmc, $tempoagora;
If ($filat11 <= 0) {
$updtc = mysql_query("update fila set timecmc = 0 where aldeiaid = '$iddavila'");
$updtf = mysql_query("update fila set timefim = 0 where aldeiaid = '$iddavila'");
} else {
If ($temposobrando + $t11tS <= $tempototal) {
$updT11 = mysql_query("update tropas set t11 = '$t11atual' + 1 where IDaldeia = '$iddavila'");
$updF11 = mysql_query("update fila set t11 = '$filat11' - 1 where aldeiaid = '$iddavila'");
$updtcA = mysql_query("update fila set timecmc = timecmc + $t11tS where aldeiaid = '$iddavila'");
$tempototal = $timefim - $timecmc;
$temposobrando = $timefim - $tempoagora;
atualizatrop();
} else {; }}}

echo $temposobrando + $t11tS.'_____'.$tempototal.'_____'.$timefim;
atualizatrop();

?>


<div id="tabelaP" name="tabelaP">
<h3>
</h3>

<div id="tabela1" name="tabela1" style="display:<?php echo $display1; ?>;"><h3>Alemães</h3>
<b>Tropas em produção</b>
<table border="1">
<td align="center"><?php echo $t11nome; ?></td><td align="center"><?php echo $t12nome; ?></td><td align="center"><?php echo $t13nome; ?></td><td align="center"><?php echo $t14nome; ?></td>
<tr>
<td align="center"><?php echo $linhaD->t11; ?></td><td align="center"><?php echo $linhaD->t12; ?></td><td align="center"><?php echo $linhaD->t13; ?></td><td align="center"><?php echo $linhaD->t14; ?></td>
</table>
<b>Tempo restante: </b><?php echo StoH($timerest); ?>
<br>
<b>Produzir</b>
<table border="1"><td align="center"><b>
<?php echo $t11nome; ?></b><br><br><img src="../img/madeira.bmp"><?php echo $t11m." ";?><img src="../img/ouro.bmp"><?php echo $t11o." ";?><img src="../img/ferro.bmp"><?php echo $t11f." ";?><img src="../img/comida.bmp"><?php echo $t11c." ";?><img src="../img/time.bmp"><?php echo $t11t." ";?>
<form action="quarteledmake11.php" target="iframequartel" name="quartel11" id="quartel11"  method="post" enctype="multipart/form-data">
<?php $t11possiveism = (int)$madeira / $t11m; $t11possiveismm = (int)$t11possiveism; ?>
<?php $t11possiveiso = (int)$ouro / $t11o; $t11possiveisoo = (int)$t11possiveiso; ?>
<?php $t11possiveisf = (int)$ferro / $t11f; $t11possiveisff = (int)$t11possiveisf; ?>
<?php $t11possiveisc = (int)$comida / $t11c; $t11possiveiscc = (int)$t11possiveisc; ?>
<?php If ($t11possiveismm < $t11possiveisoo) { $possiveisgeralt11a = $t11possiveismm; } else { $possiveisgeralt11a = $t11possiveisoo; } ?>
<?php If ($t11possiveisff < $t11possiveiscc) { $possiveisgeralt11b = $t11possiveisff; } else { $possiveisgeralt11b = $t11possiveiscc; } ?>
<?php If ($possiveisgeralt11a < $possiveisgeralt11b) { $possiveisgeralt11c = $possiveisgeralt11a; } else { $possiveisgeralt11c = $possiveisgeralt11b; } ?>
<b>(Max: <?php echo $possiveisgeralt11c ?>)</b>
<input type="number" name="text11" id="text11" value=""><br>
<input type="submit" name="sub11" id="sub11" value="Produzir tropas">
</form>
</td></table></div>

<div id="tabela2" name="tabela2">
</div>
<div id="tabela3" name="tabela3">
</div>
<div id="tabela4" name="tabela4">
</div>


</div>



<div id="iframedoquartel" name="iframedoquartel">
<iframe src="padraoframe.php" name="iframequartel" id="iframequartel">
</iframe>
</div>




</center>

<?php
}}}}
?>