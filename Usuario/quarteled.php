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

<?php If ($povo != 1) { $display1='block'; } else { $display1='block'; }
If ($povo != 2) { $display2='block'; } else { $display2='block'; }
If ($povo != 3) { $display3='block'; } else { $display3='block'; }
If ($povo != 4) { $display4='block'; } else { $display4='block'; }
If ($povo != 5) { $display5='block'; } else { $display5='block'; }
If ($povo != 6) { $display6='block'; } else { $display6='block'; }
If ($povo != 7) { $display7='block'; } else { $display7='block'; }
If ($povo != 8) { $display8='block'; } else { $display8='block'; }
If ($povo != 9) { $display9='block'; } else { $display9='block'; }
If ($povo != 10) { $display10='block'; } else { $display10='block'; }
If ($povo != 11) { $display11='block'; } else { $display11='block'; }
If ($povo != 12) { $display12='block'; } else { $display12='block'; }
If ($povo != 13) { $display13='block'; } else { $display13='block'; }
If ($povo != 14) { $display14='block'; } else { $display14='block'; }
If ($povo != 15) { $display15='block'; } else { $display15='block'; }


$temposobrandot1 = $linhaD->t1timefim - $tempoatual;
If ($temposobrandot1 < 0) { $tst1 = 0; } else { $tst1 = StoH($temposobrandot1);}
$temposobrandot2 = $linhaD->t2timefim - $tempoatual;
If ($temposobrandot2 < 0) { $tst2 = 0; } else { $tst2 = StoH($temposobrandot2);}
$temposobrandot3 = $linhaD->t3timefim - $tempoatual;
If ($temposobrandot3 < 0) { $tst3 = 0; } else { $tst3 = StoH($temposobrandot3);}
$temposobrandot4 = $linhaD->t4timefim - $tempoatual;
If ($temposobrandot4 < 0) { $tst4 = 0; } else { $tst4 = StoH($temposobrandot4);}

$nome1 = "t".$povolocal."1nome";
$nome2 = "t".$povolocal."2nome";
$nome3 = "t".$povolocal."3nome";
$nome4 = "t".$povolocal."4nome";
$nome5 = "t".$povolocal."5nome";
$nome6 = "t".$povolocal."6nome";
$nome7 = "t".$povolocal."7nome";
$nome8 = "t".$povolocal."8nome";
$nome9 = "t".$povolocal."9nome";
?>
<?php
$t1m = "t".$povolocal."1m";
$t1o = "t".$povolocal."1o";
$t1f = "t".$povolocal."1f";
$t1c = "t".$povolocal."1c"; 
$t1t = "t".$povolocal."1t"; 
$t2m = "t".$povolocal."2m";
$t2o = "t".$povolocal."2o";
$t2f = "t".$povolocal."2f";
$t2c = "t".$povolocal."2c"; 
$t2t = "t".$povolocal."2t"; 
$t3m = "t".$povolocal."3m";
$t3o = "t".$povolocal."3o";
$t3f = "t".$povolocal."3f";
$t3c = "t".$povolocal."3c"; 
$t3t = "t".$povolocal."3t"; 
$t4m = "t".$povolocal."4m";
$t4o = "t".$povolocal."4o";
$t4f = "t".$povolocal."4f";
$t4c = "t".$povolocal."4c"; 
$t4t = "t".$povolocal."4t"; 
$t1Rq = "t".$povolocal."1Rq";
$t1Rcpm = "t".$povolocal."1Rcpm";
$t2Rq = "t".$povolocal."2Rq";
$t2Rcpm = "t".$povolocal."2Rcpm";
$t3Rq = "t".$povolocal."3Rq";
$t3Rcpm = "t".$povolocal."3Rcpm";
$t4Rq = "t".$povolocal."4Rq";
$t4Rcpm = "t".$povolocal."4Rcpm";

?>

<div id="tabelaP" name="tabelaP">
<b>Faça suas tropas com sabedoria!</b><br>
Ao colocar tropas na fila de produção, você somente poderá produzir mais da unidade desejada, quando não houver nenhuma unidade dessa em produção!<br>
<b>Bônus no tempo de produção oferecido pelo nível do seu quartel: <?php echo $linhaaaacc->quartelnv * 2; ?>%</b>

<div id="tabela1" name="tabela1" style="display:<?php echo $display1; ?>; background-color: #DCDCDC;"><h3>Alemães</h3>
<b>Tropas em produção</b>
<table border="1"><td align="center"><?php echo $$nome1; ?></td><td align="center"><?php echo $$nome2; ?></td><td align="center"><?php echo $$nome3; ?></td><td align="center"><?php echo $$nome4; ?></td>
<tr><td align="center"><?php echo $linhaD->t1; ?></td><td align="center"><?php echo $linhaD->t2; ?></td><td align="center"><?php echo $linhaD->t3; ?></td><td align="center"><?php echo $linhaD->t4; ?></td>
</table><b>Tempo restante: </b><table border="1">
<td align="center"><?php echo $$nome1; ?></td><td align="center"><?php echo $$nome2; ?></td><td align="center"><?php echo $$nome3; ?></td><td align="center"><?php echo $$nome4; ?></td>
<tr><td align="center"><?php echo $tst1; ?></td><td align="center"><?php echo $tst2; ?></td><td align="center"><?php echo $tst3; ?></td><td align="center"><?php echo $tst4; ?></td>
</table><br><b>Produzir</b><table border="0"><td><table border="1"><td align="center"><b>
<?php If ($temposobrandot1 <= 0) { 
 $limpatc1 = mysql_query("update fila set t1timecmc = 0 where aldeiaid = '$iddavila'");
 $limpatf1 = mysql_query("update fila set t1timefim = 0 where aldeiaid = '$iddavila'");
 $attt1 = mysql_query("update tropas set t1 = $linhaD->t1 + $t1atual where IDaldeia = '$iddavila'");
 $limpa1 = mysql_query("update fila set t1 = 0 where aldeiaid = '$iddavila'"); } else {}; ?>
<?php echo $$nome1.' ('.$t1atual.')'; ?></b><br><br><img src="../img/madeira.bmp"><?php echo $$t1m." ";?><img src="../img/ouro.bmp"><?php echo $$t1o." ";?><img src="../img/ferro.bmp"><?php echo $$t1f." ";?><img src="../img/comida.bmp"><?php echo $$t1c." ";?><img src="../img/time.bmp"><?php echo $$t1t." ";?>
<form action="quarteledmake1.php" target="iframequartel" name="quartel1" id="quartel1"  method="post" enctype="multipart/form-data">

<?php $t1possiveism = (int)$madeira / $$t1m; $t1possiveismm = (int)$t1possiveism; ?>
<?php $t1possiveiso = (int)$ouro / $$t1o; $t1possiveisoo = (int)$t1possiveiso; ?>
<?php $t1possiveisf = (int)$ferro / $$t1f; $t1possiveisff = (int)$t1possiveisf; ?>
<?php $t1possiveisc = (int)$comida / $$t1c; $t1possiveiscc = (int)$t1possiveisc; ?>
<?php If ($t1possiveismm < $t1possiveisoo) { $possiveisgeralt1a = $t1possiveismm; } else { $possiveisgeralt1a = $t1possiveisoo; } ?>
<?php If ($t1possiveisff < $t1possiveiscc) { $possiveisgeralt1b = $t1possiveisff; } else { $possiveisgeralt1b = $t1possiveiscc; } ?>
<?php If ($possiveisgeralt1a < $possiveisgeralt1b) { $possiveisgeralt1c = $possiveisgeralt1a; } else { $possiveisgeralt1c = $possiveisgeralt1b; } ?>
<b>(Max: <?php echo $possiveisgeralt1c ?>)</b>
<?php If ($linhaD->t1 != 0) {
echo "Este quartel já possui<br>tropas deste tipo em produção!";
} else { echo '
<input type="number" name="text1" id="text1" value=""><br>
<input type="submit" name="sub1" id="sub1" value="Produzir tropas">';} ?>
</form>
</td></table>
</td><td>



<table border="1"><td align="center"><b>
<?php 
 If ($temposobrandot2 <= 0) { 
 $limpatc2 = mysql_query("update fila set t2timecmc = 0 where aldeiaid = '$iddavila'");
 $limpatf2 = mysql_query("update fila set t2timefim = 0 where aldeiaid = '$iddavila'");
 $attt2 = mysql_query("update tropas set t2 = $linhaD->t2 + $t2atual where IDaldeia = '$iddavila'");
 $limpa2 = mysql_query("update fila set t2 = 0 where aldeiaid = '$iddavila'"); } else {}; ?>
<?php echo $$nome2.' ('.$t2atual.')'; ?></b><br><br><img src="../img/madeira.bmp"><?php echo $$t2m." ";?><img src="../img/ouro.bmp"><?php echo $$t2o." ";?><img src="../img/ferro.bmp"><?php echo $$t2f." ";?><img src="../img/comida.bmp"><?php echo $$t2c." ";?><img src="../img/time.bmp"><?php echo $$t2t." ";?>
<form action="quarteledmake2.php" target="iframequartel" name="quartel2" id="quartel2"  method="post" enctype="multipart/form-data">
<?php $t2possiveism = (int)$madeira / $$t2m; $t2possiveismm = (int)$t2possiveism; ?>
<?php $t2possiveiso = (int)$ouro / $$t2o; $t2possiveisoo = (int)$t2possiveiso; ?>
<?php $t2possiveisf = (int)$ferro / $$t2f; $t2possiveisff = (int)$t2possiveisf; ?>
<?php $t2possiveisc = (int)$comida / $$t2c; $t2possiveiscc = (int)$t2possiveisc; ?>
<?php If ($t2possiveismm < $t2possiveisoo) { $possiveisgeralt2a = $t2possiveismm; } else { $possiveisgeralt2a = $t2possiveisoo; } ?>
<?php If ($t2possiveisff < $t2possiveiscc) { $possiveisgeralt2b = $t2possiveisff; } else { $possiveisgeralt2b = $t2possiveiscc; } ?>
<?php If ($possiveisgeralt2a < $possiveisgeralt2b) { $possiveisgeralt2c = $possiveisgeralt2a; } else { $possiveisgeralt2c = $possiveisgeralt2b; } ?>
<b>(Max: <?php echo $possiveisgeralt2c ?>)</b>
<?php If ($linhaaaacc->quartelnv < $$t2Rq) {
echo"Nível do quartel ainda<br>não alcançado(".$$t2Rq.")<br>";} else {
If ($linhaaaacc->cpmnv < $$t2Rcpm) {
echo"Nível do centro de pesquisas militares<br>ainda não alcançado(".$$t2Rcpm.")"; } else {
 If ($linhaD->t2 != 0) {
echo "Este quartel já possui<br>tropas deste tipo em produção!";
} else { echo '
<input type="number" name="text2" id="text2" value=""><br>
<input type="submit" name="sub2" id="sub2" value="Produzir tropas">';}}} ?>
</form>
</td></table>
</td><td>

<table border="1"><td align="center"><b>
<?php 
 If ($temposobrandot3 <= 0) { 
 $limpatc3 = mysql_query("update fila set t3timecmc = 0 where aldeiaid = '$iddavila'");
 $limpatf3 = mysql_query("update fila set t3timefim = 0 where aldeiaid = '$iddavila'");
 $attt3 = mysql_query("update tropas set t3 = $linhaD->t3 + $t3atual where IDaldeia = '$iddavila'");
 $limpa3 = mysql_query("update fila set t3 = 0 where aldeiaid = '$iddavila'"); } else {}; ?>
<?php echo $$nome3.' ('.$t3atual.')'; ?></b><br><br><img src="../img/madeira.bmp"><?php echo $$t3m." ";?><img src="../img/ouro.bmp"><?php echo $$t3o." ";?><img src="../img/ferro.bmp"><?php echo $$t3f." ";?><img src="../img/comida.bmp"><?php echo $$t3c." ";?><img src="../img/time.bmp"><?php echo $$t3t." ";?>
<form action="quarteledmake3.php" target="iframequartel" name="quartel3" id="quartel3"  method="post" enctype="multipart/form-data">
<?php $t3possiveism = (int)$madeira / $$t3m; $t3possiveismm = (int)$t3possiveism; ?>
<?php $t3possiveiso = (int)$ouro / $$t3o; $t3possiveisoo = (int)$t3possiveiso; ?>
<?php $t3possiveisf = (int)$ferro / $$t3f; $t3possiveisff = (int)$t3possiveisf; ?>
<?php $t3possiveisc = (int)$comida / $$t3c; $t3possiveiscc = (int)$t3possiveisc; ?>
<?php If ($t3possiveismm < $t3possiveisoo) { $possiveisgeralt3a = $t3possiveismm; } else { $possiveisgeralt3a = $t3possiveisoo; } ?>
<?php If ($t3possiveisff < $t3possiveiscc) { $possiveisgeralt3b = $t3possiveisff; } else { $possiveisgeralt3b = $t3possiveiscc; } ?>
<?php If ($possiveisgeralt3a < $possiveisgeralt3b) { $possiveisgeralt3c = $possiveisgeralt3a; } else { $possiveisgeralt3c = $possiveisgeralt3b; } ?>
<b>(Max: <?php echo $possiveisgeralt3c ?>)</b>
<?php If ($linhaaaacc->quartelnv < $$t3Rq) {
echo"Nível do quartel ainda<br>não alcançado(".$$t3Rq.")<br>";} else {
If ($linhaaaacc->cpmnv < $$t3Rcpm) {
echo"Nível do centro de pesquisas militares<br>ainda não alcançado(".$$t3Rcpm.")"; } else {
 If ($linhaD->t3 != 0) {
echo "Este quartel já possui<br>tropas deste tipo em produção!";
} else { echo '
<input type="number" name="text3" id="text3" value=""><br>
<input type="submit" name="sub3" id="sub3" value="Produzir tropas">';}}} ?>
</form>
</td></table>
</td><td>



<table border="1"><td align="center"><b>
<?php 
 If ($temposobrandot4 <= 0) { 
 $limpatc4 = mysql_query("update fila set t4timecmc = 0 where aldeiaid = '$iddavila'");
 $limpatf4 = mysql_query("update fila set t4timefim = 0 where aldeiaid = '$iddavila'");
 $attt4 = mysql_query("update tropas set t4 = $linhaD->t4 + $t4atual where IDaldeia = '$iddavila'");
 $limpa4 = mysql_query("update fila set t4 = 0 where aldeiaid = '$iddavila'"); } else {}; ?>
<?php echo $$nome4.' ('.$t4atual.')'; ?></b><br><br><img src="../img/madeira.bmp"><?php echo $$t4m." ";?><img src="../img/ouro.bmp"><?php echo $$t4o." ";?><img src="../img/ferro.bmp"><?php echo $$t4f." ";?><img src="../img/comida.bmp"><?php echo $$t4c." ";?><img src="../img/time.bmp"><?php echo $$t4t." ";?>
<form action="quarteledmake4.php" target="iframequartel" name="quartel4" id="quartel4"  method="post" enctype="multipart/form-data">
<?php $t4possiveism = (int)$madeira / $$t4m; $t4possiveismm = (int)$t4possiveism; ?>
<?php $t4possiveiso = (int)$ouro / $$t4o; $t4possiveisoo = (int)$t4possiveiso; ?>
<?php $t4possiveisf = (int)$ferro / $$t4f; $t4possiveisff = (int)$t4possiveisf; ?>
<?php $t4possiveisc = (int)$comida / $$t4c; $t4possiveiscc = (int)$t4possiveisc; ?>
<?php If ($t4possiveismm < $t4possiveisoo) { $possiveisgeralt4a = $t4possiveismm; } else { $possiveisgeralt4a = $t4possiveisoo; } ?>
<?php If ($t4possiveisff < $t4possiveiscc) { $possiveisgeralt4b = $t4possiveisff; } else { $possiveisgeralt4b = $t4possiveiscc; } ?>
<?php If ($possiveisgeralt4a < $possiveisgeralt4b) { $possiveisgeralt4c = $possiveisgeralt4a; } else { $possiveisgeralt4c = $possiveisgeralt4b; } ?>
<b>(Max: <?php echo $possiveisgeralt4c ?>)</b>
<?php If ($linhaaaacc->quartelnv < $$t4Rq) {
echo"Nível do quartel ainda<br>não alcançado(".$$t4Rq.")<br>";} else {
If ($linhaaaacc->cpmnv < $$t4Rcpm) {
echo"Nível do centro de pesquisas militares<br>ainda não alcançado(".$$t4Rcpm.")"; } else {
 If ($linhaD->t4 != 0) {
echo "Este quartel já possui<br>tropas deste tipo em produção!";
} else { echo '
<input type="number" name="text4" id="text4" value=""><br>
<input type="submit" name="sub4" id="sub4" value="Produzir tropas">';}}} ?>
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