<?php
include "padrao.php";


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


$temposobrandot11 = $linhaD->t11timefim - $tempoatual;
If ($temposobrandot11 < 0) { $tst11 = 0; } else { $tst11 = StoH($temposobrandot11);}
$temposobrandot12 = $linhaD->t12timefim - $tempoatual;
If ($temposobrandot12 < 0) { $tst12 = 0; } else { $tst12 = StoH($temposobrandot12);}
$temposobrandot13 = $linhaD->t13timefim - $tempoatual;
If ($temposobrandot13 < 0) { $tst13 = 0; } else { $tst13 = StoH($temposobrandot13);}
$temposobrandot14 = $linhaD->t14timefim - $tempoatual;
If ($temposobrandot14 < 0) { $tst14 = 0; } else { $tst14 = StoH($temposobrandot14);}

?>


<div id="tabelaP" name="tabelaP">
<b>Faça suas tropas com sabedoria!</b><br>
Ao colocar tropas na fila de produção, você somente poderá produzir mais da unidade desejada, quando não houver nenhuma unidade dessa em produção!<br>
<b>Bônus no tempo de produção oferecido pelo nível do seu quartel: <?php echo $linhaaaacc->quartelnv * 2; ?>%</b>

<div id="tabela1" name="tabela1" style="display:<?php echo $display1; ?>; background-color: #DCDCDC;"><h3>Alemães</h3>
<b>Tropas em produção</b>
<table border="1"><td align="center"><?php echo $t11nome; ?></td><td align="center"><?php echo $t12nome; ?></td><td align="center"><?php echo $t13nome; ?></td><td align="center"><?php echo $t14nome; ?></td>
<tr><td align="center"><?php echo $linhaD->t11; ?></td><td align="center"><?php echo $linhaD->t12; ?></td><td align="center"><?php echo $linhaD->t13; ?></td><td align="center"><?php echo $linhaD->t14; ?></td>
</table><b>Tempo restante: </b><table border="1">
<td align="center"><?php echo $t11nome; ?></td><td align="center"><?php echo $t12nome; ?></td><td align="center"><?php echo $t13nome; ?></td><td align="center"><?php echo $t14nome; ?></td>
<tr><td align="center"><?php echo $tst11; ?></td><td align="center"><?php echo $tst12; ?></td><td align="center"><?php echo $tst13; ?></td><td align="center"><?php echo $tst14; ?></td>
</table><br><b>Produzir</b><table border="0"><td><table border="1"><td align="center"><b>
<?php If ($temposobrandot11 <= 0) { 
 $limpatc11 = mysql_query("update fila set t11timecmc = 0 where aldeiaid = '$iddavila'");
 $limpatf11 = mysql_query("update fila set t11timefim = 0 where aldeiaid = '$iddavila'");
 $attt11 = mysql_query("update tropas set t11 = $linhaD->t11 + $t11atual where IDaldeia = '$iddavila'");
 $limpa11 = mysql_query("update fila set t11 = 0 where aldeiaid = '$iddavila'"); } else {}; ?>
<?php echo $t11nome.' ('.$t11atual.')'; ?></b><br><br><img src="../img/madeira.bmp"><?php echo $t11m." ";?><img src="../img/ouro.bmp"><?php echo $t11o." ";?><img src="../img/ferro.bmp"><?php echo $t11f." ";?><img src="../img/comida.bmp"><?php echo $t11c." ";?><img src="../img/time.bmp"><?php echo $t11t." ";?>
<form action="quarteledmake11.php" target="iframequartel" name="quartel11" id="quartel11"  method="post" enctype="multipart/form-data">
<?php $t11possiveism = (int)$madeira / $t11m; $t11possiveismm = (int)$t11possiveism; ?>
<?php $t11possiveiso = (int)$ouro / $t11o; $t11possiveisoo = (int)$t11possiveiso; ?>
<?php $t11possiveisf = (int)$ferro / $t11f; $t11possiveisff = (int)$t11possiveisf; ?>
<?php $t11possiveisc = (int)$comida / $t11c; $t11possiveiscc = (int)$t11possiveisc; ?>
<?php If ($t11possiveismm < $t11possiveisoo) { $possiveisgeralt11a = $t11possiveismm; } else { $possiveisgeralt11a = $t11possiveisoo; } ?>
<?php If ($t11possiveisff < $t11possiveiscc) { $possiveisgeralt11b = $t11possiveisff; } else { $possiveisgeralt11b = $t11possiveiscc; } ?>
<?php If ($possiveisgeralt11a < $possiveisgeralt11b) { $possiveisgeralt11c = $possiveisgeralt11a; } else { $possiveisgeralt11c = $possiveisgeralt11b; } ?>
<b>(Max: <?php echo $possiveisgeralt11c ?>)</b>
<?php If ($linhaD->t11 != 0) {
echo "Este quartel já possui<br>tropas deste tipo em produção!";
} else { echo '
<input type="number" name="text11" id="text11" value=""><br>
<input type="submit" name="sub11" id="sub11" value="Produzir tropas">';} ?>
</form>
</td></table>
</td><td>



<table border="1"><td align="center"><b>
<?php 
 If ($temposobrandot12 <= 0) { 
 $limpatc12 = mysql_query("update fila set t12timecmc = 0 where aldeiaid = '$iddavila'");
 $limpatf12 = mysql_query("update fila set t12timefim = 0 where aldeiaid = '$iddavila'");
 $attt12 = mysql_query("update tropas set t12 = $linhaD->t12 + $t12atual where IDaldeia = '$iddavila'");
 $limpa12 = mysql_query("update fila set t12 = 0 where aldeiaid = '$iddavila'"); } else {}; ?>
<?php echo $t12nome.' ('.$t12atual.')'; ?></b><br><br><img src="../img/madeira.bmp"><?php echo $t12m." ";?><img src="../img/ouro.bmp"><?php echo $t12o." ";?><img src="../img/ferro.bmp"><?php echo $t12f." ";?><img src="../img/comida.bmp"><?php echo $t12c." ";?><img src="../img/time.bmp"><?php echo $t12t." ";?>
<form action="quarteledmake12.php" target="iframequartel" name="quartel12" id="quartel12"  method="post" enctype="multipart/form-data">
<?php $t12possiveism = (int)$madeira / $t12m; $t12possiveismm = (int)$t12possiveism; ?>
<?php $t12possiveiso = (int)$ouro / $t12o; $t12possiveisoo = (int)$t12possiveiso; ?>
<?php $t12possiveisf = (int)$ferro / $t12f; $t12possiveisff = (int)$t12possiveisf; ?>
<?php $t12possiveisc = (int)$comida / $t12c; $t12possiveiscc = (int)$t12possiveisc; ?>
<?php If ($t12possiveismm < $t12possiveisoo) { $possiveisgeralt12a = $t12possiveismm; } else { $possiveisgeralt12a = $t12possiveisoo; } ?>
<?php If ($t12possiveisff < $t12possiveiscc) { $possiveisgeralt12b = $t12possiveisff; } else { $possiveisgeralt12b = $t12possiveiscc; } ?>
<?php If ($possiveisgeralt12a < $possiveisgeralt12b) { $possiveisgeralt12c = $possiveisgeralt12a; } else { $possiveisgeralt12c = $possiveisgeralt12b; } ?>
<b>(Max: <?php echo $possiveisgeralt12c ?>)</b>
<?php If ($linhaaaacc->quartelnv < $t12Rq) {
echo"Nível do quartel ainda<br>não alcançado(".$t12Rq.")<br>";} else {
If ($linhaaaacc->cpmnv < $t12Rcpm) {
echo"Nível do centro de pesquisas militares<br>ainda não alcançado(".$t12Rcpm.")"; } else {
 If ($linhaD->t12 != 0) {
echo "Este quartel já possui<br>tropas deste tipo em produção!";
} else { echo '
<input type="number" name="text12" id="text12" value=""><br>
<input type="submit" name="sub12" id="sub12" value="Produzir tropas">';}}} ?>
</form>
</td></table>
</td><td>

<table border="1"><td align="center"><b>
<?php 
 If ($temposobrandot13 <= 0) { 
 $limpatc13 = mysql_query("update fila set t13timecmc = 0 where aldeiaid = '$iddavila'");
 $limpatf13 = mysql_query("update fila set t13timefim = 0 where aldeiaid = '$iddavila'");
 $attt13 = mysql_query("update tropas set t13 = $linhaD->t13 + $t13atual where IDaldeia = '$iddavila'");
 $limpa13 = mysql_query("update fila set t13 = 0 where aldeiaid = '$iddavila'"); } else {}; ?>
<?php echo $t13nome.' ('.$t13atual.')'; ?></b><br><br><img src="../img/madeira.bmp"><?php echo $t13m." ";?><img src="../img/ouro.bmp"><?php echo $t13o." ";?><img src="../img/ferro.bmp"><?php echo $t13f." ";?><img src="../img/comida.bmp"><?php echo $t13c." ";?><img src="../img/time.bmp"><?php echo $t13t." ";?>
<form action="quarteledmake13.php" target="iframequartel" name="quartel13" id="quartel13"  method="post" enctype="multipart/form-data">
<?php $t13possiveism = (int)$madeira / $t13m; $t13possiveismm = (int)$t13possiveism; ?>
<?php $t13possiveiso = (int)$ouro / $t13o; $t13possiveisoo = (int)$t13possiveiso; ?>
<?php $t13possiveisf = (int)$ferro / $t13f; $t13possiveisff = (int)$t13possiveisf; ?>
<?php $t13possiveisc = (int)$comida / $t13c; $t13possiveiscc = (int)$t13possiveisc; ?>
<?php If ($t13possiveismm < $t13possiveisoo) { $possiveisgeralt13a = $t13possiveismm; } else { $possiveisgeralt13a = $t13possiveisoo; } ?>
<?php If ($t13possiveisff < $t13possiveiscc) { $possiveisgeralt13b = $t13possiveisff; } else { $possiveisgeralt13b = $t13possiveiscc; } ?>
<?php If ($possiveisgeralt13a < $possiveisgeralt13b) { $possiveisgeralt13c = $possiveisgeralt13a; } else { $possiveisgeralt13c = $possiveisgeralt13b; } ?>
<b>(Max: <?php echo $possiveisgeralt13c ?>)</b>
<?php If ($linhaaaacc->quartelnv < $t13Rq) {
echo"Nível do quartel ainda<br>não alcançado(".$t13Rq.")<br>";} else {
If ($linhaaaacc->cpmnv < $t13Rcpm) {
echo"Nível do centro de pesquisas militares<br>ainda não alcançado(".$t13Rcpm.")"; } else {
 If ($linhaD->t13 != 0) {
echo "Este quartel já possui<br>tropas deste tipo em produção!";
} else { echo '
<input type="number" name="text13" id="text13" value=""><br>
<input type="submit" name="sub13" id="sub13" value="Produzir tropas">';}}} ?>
</form>
</td></table>
</td><td>



<table border="1"><td align="center"><b>
<?php 
 If ($temposobrandot14 <= 0) { 
 $limpatc14 = mysql_query("update fila set t14timecmc = 0 where aldeiaid = '$iddavila'");
 $limpatf14 = mysql_query("update fila set t14timefim = 0 where aldeiaid = '$iddavila'");
 $attt14 = mysql_query("update tropas set t14 = $linhaD->t14 + $t14atual where IDaldeia = '$iddavila'");
 $limpa14 = mysql_query("update fila set t14 = 0 where aldeiaid = '$iddavila'"); } else {}; ?>
<?php echo $t14nome.' ('.$t14atual.')'; ?></b><br><br><img src="../img/madeira.bmp"><?php echo $t14m." ";?><img src="../img/ouro.bmp"><?php echo $t14o." ";?><img src="../img/ferro.bmp"><?php echo $t14f." ";?><img src="../img/comida.bmp"><?php echo $t14c." ";?><img src="../img/time.bmp"><?php echo $t14t." ";?>
<form action="quarteledmake14.php" target="iframequartel" name="quartel14" id="quartel14"  method="post" enctype="multipart/form-data">
<?php $t14possiveism = (int)$madeira / $t14m; $t14possiveismm = (int)$t14possiveism; ?>
<?php $t14possiveiso = (int)$ouro / $t14o; $t14possiveisoo = (int)$t14possiveiso; ?>
<?php $t14possiveisf = (int)$ferro / $t14f; $t14possiveisff = (int)$t14possiveisf; ?>
<?php $t14possiveisc = (int)$comida / $t14c; $t14possiveiscc = (int)$t14possiveisc; ?>
<?php If ($t14possiveismm < $t14possiveisoo) { $possiveisgeralt14a = $t14possiveismm; } else { $possiveisgeralt14a = $t14possiveisoo; } ?>
<?php If ($t14possiveisff < $t14possiveiscc) { $possiveisgeralt14b = $t14possiveisff; } else { $possiveisgeralt14b = $t14possiveiscc; } ?>
<?php If ($possiveisgeralt14a < $possiveisgeralt14b) { $possiveisgeralt14c = $possiveisgeralt14a; } else { $possiveisgeralt14c = $possiveisgeralt14b; } ?>
<b>(Max: <?php echo $possiveisgeralt14c ?>)</b>
<?php If ($linhaaaacc->quartelnv < $t14Rq) {
echo"Nível do quartel ainda<br>não alcançado(".$t14Rq.")<br>";} else {
If ($linhaaaacc->cpmnv < $t14Rcpm) {
echo"Nível do centro de pesquisas militares<br>ainda não alcançado(".$t14Rcpm.")"; } else {
 If ($linhaD->t14 != 0) {
echo "Este quartel já possui<br>tropas deste tipo em produção!";
} else { echo '
<input type="number" name="text14" id="text14" value=""><br>
<input type="submit" name="sub14" id="sub14" value="Produzir tropas">';}}} ?>
</form>
</td></table>
</td><td>





</td></table>



</div>

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