<?php
include "padrao.php"; 

?>

<html>
<body>
<?php
$inposition = "../img/v.png";
$inpositiondef = "../img/vdef.png";
$acaminho = "../img/atk.gif";
$acaminhodef = "../img/def.gif";
include "../Config/tropasdados.php";
$count = 0;
$consultamov = mysql_query("select * from ataques where remetente = '$id'");
$linhamov = mysql_num_rows($consultamov);
while($linhamov = mysql_fetch_object($consultamov)) {

$count = $count + 1;


$consultat = mysql_query("select * from config where time");
$linhat = mysql_num_rows($consultat);
while($linhat = mysql_fetch_object($consultat)) {
$result1 = $linhamov->tempofinal - $linhat->time;
If ($result1 <= 0) {
$result = 0;} else {
$result = $result1;}
}
$povo = $linhamov->povorem;
$nomet1 = "t".$povo."1nome";
$nomet2 = "t".$povo."2nome";
$nomet3 = "t".$povo."3nome";
$nomet4 = "t".$povo."4nome";
$nomet5 = "t".$povo."5nome";
$nomet6 = "t".$povo."6nome";
$nomet7 = "t".$povo."7nome";
$nomet8 = "t".$povo."8nome";
$nomet9 = "t".$povo."9nome";


$iddest = $linhamov->destino;


$consultad = mysql_query("select * from aldeias where ID = '$iddest'");
$linhad = mysql_num_rows($consultad);
while($linhad = mysql_fetch_object($consultad)) {
$viladest = $linhad->nome;
$donodest = $linhad->dono;

 ?>

<form action="taction.php" target="_self" method="post" enctype="multipart/form-data">
<input type="hidden" name="type" value="atk">
<input type="hidden" value="<?php echo $linhamov->ID; ?>" name="id" id="id">
<center><table border='1' <?php if($result > 0){ echo"bgcolor='#FFD700'";} else { echo"bgcolor='#98FB98'";} ?> cellspacing="0">
<td align='center' colspan="1"><img src="<?php If($result > 0){ echo $acaminho; } else { echo $inposition;}?>" width="40" height="40"></td><td align='center' colspan="8"><b>(<?php echo $count; ?>)<?php If($result > 0){ echo"<font color='black'>Your troop movements</font>";} else { echo" <font color='green'>Troops in position</font>";}?></b></td></tr><tr>
<td align='center' colspan="9"><b>Dono:</b><?php echo $donodest." ";?><b>Aldeia:</b><?php echo "<a href='aldprof.php?idpver=".$iddest."'>".$viladest."</a>";?></td></tr><tr>
<td align='center' colspan="9"><b><?php If($result > 0){ echo"Time Remaining:".StoH($result); } else { echo"Attack!<input type='radio' value='atk' name='action' CHECKED>  Reinforce!<input type='radio' value='rfc' name='action'>  Return!<input type='radio' value='rtn' name='action'>";} ?></b></td></tr><tr>
<td align="center" colspan="9"><?php If($result > 0){} else { echo'<input type="submit" value="Go!">';}?></td></tr><tr>
<td align='center'><?php echo $$nomet1; ?></td><td align='center'><?php echo $$nomet2; ?></td><td align='center'><?php echo $$nomet3; ?></td><td align='center'><?php echo $$nomet4; ?></td><td align='center'><?php echo $$nomet5; ?></td><td align='center'><?php echo $$nomet6; ?></td><td align='center'><?php echo $$nomet7; ?></td><td align='center'><?php echo $$nomet8; ?></td><td align='center'><?php echo $$nomet9; ?></td></tr><tr>
<td align='center'><?php echo $linhamov->t1; ?></td><td align='center'><?php echo $linhamov->t2; ?></td><td align='center'><?php echo $linhamov->t3; ?></td><td align='center'><?php echo $linhamov->t4; ?></td><td align='center'><?php echo $linhamov->t5; ?></td><td align='center'><?php echo $linhamov->t6; ?></td><td align='center'><?php echo $linhamov->t7; ?></td><td align='center'><?php echo $linhamov->t8; ?></td><td align='center'><?php echo $linhamov->t9; ?></td></tr>
</table></center>
</form>






<?php
}}
$countret = 0;
echo"<br><br>";
$consultamovret = mysql_query("select * from retornos where idchegada = '$id'");
$linhamovret = mysql_num_rows($consultamovret);
while($linhamovret = mysql_fetch_object($consultamovret)) {
$countret = $countret + 1;
$idsaida = $linhamovret->idsaida;
$idret = $linhamovret->ID;

$consultad2 = mysql_query("select * from aldeias where ID = '$idsaida'");
$linhad2 = mysql_num_rows($consultad2);
while($linhad2 = mysql_fetch_object($consultad2)) {
$nomesaida = $linhad2->nome;
$donosaida = $linhad2->dono;

}

$consultat2 = mysql_query("select * from config where time");
$linhat2 = mysql_num_rows($consultat2);
while($linhat2 = mysql_fetch_object($consultat2)) {

$result2 = $linhamovret->tempofinal - $linhat2->time;
If ($result2 <= 0) { $result20 = 0;} else { $result20 = $result2;}
}


$povo = $linhamovret->povo;
$nomet1 = "t".$povo."1nome";
$nomet2 = "t".$povo."2nome";
$nomet3 = "t".$povo."3nome";
$nomet4 = "t".$povo."4nome";
$nomet5 = "t".$povo."5nome";
$nomet6 = "t".$povo."6nome";
$nomet7 = "t".$povo."7nome";
$nomet8 = "t".$povo."8nome";
$nomet9 = "t".$povo."9nome";
$style = "-webkit-transform: rotate(180deg);";
?>
<form action="tregroup.php" target="_self" method="post" enctype="multipart/form-data">
<input type="hidden" name="idret" value="<?php echo $idret; ?>">
<center><table border='1' <?php if($result20 > 0){ echo"bgcolor='#FFD700'";} else { echo"bgcolor='#98FB98'";} ?> cellspacing="0">
<td align='center' colspan="1"><img src="<?php If($result20 > 0){ echo $acaminho; } else { echo $inposition;} ?>" width="40" height="40" style="<?php If($result20 > 0){echo $style;}?>"></td><td align='center' colspan="8"><b>(<?php echo $countret; ?>)<?php If($result20 > 0){ echo"<font color='black'>Troops Returning</font>";} else { echo" <font color='green'>Troops Returned!</font>";}?></b></td></tr><tr>
<td align='center' colspan="9"><b>Returning From:</b><?php echo "<a href='aldprof.php?idpver=".$idsaida."'>".$nomesaida."</a>";?></td></tr><tr>
<td align='center' colspan="9"><b><?php If($result20 > 0){ echo"Time Remaining:".StoH($result20); } else {echo "<input type='submit' value='Regroup Troops!'>";} ?></b></td></tr><tr>
<td align='center'><?php echo $$nomet1; ?></td><td align='center'><?php echo $$nomet2; ?></td><td align='center'><?php echo $$nomet3; ?></td><td align='center'><?php echo $$nomet4; ?></td><td align='center'><?php echo $$nomet5; ?></td><td align='center'><?php echo $$nomet6; ?></td><td align='center'><?php echo $$nomet7; ?></td><td align='center'><?php echo $$nomet8; ?></td><td align='center'><?php echo $$nomet9; ?></td></tr><tr>
<td align='center'><?php echo $linhamovret->t1; ?></td><td align='center'><?php echo $linhamovret->t2; ?></td><td align='center'><?php echo $linhamovret->t3; ?></td><td align='center'><?php echo $linhamovret->t4; ?></td><td align='center'><?php echo $linhamovret->t5; ?></td><td align='center'><?php echo $linhamovret->t6; ?></td><td align='center'><?php echo $linhamovret->t7; ?></td><td align='center'><?php echo $linhamovret->t8; ?></td><td align='center'><?php echo $linhamovret->t9; ?></td></tr>
</table></center>
</form>



<?php
}


$countref = 0;
echo"<br><br>";
$consultamovref = mysql_query("select * from reforcos where remetente = '$id'");
$linhamovref = mysql_num_rows($consultamovref);
while($linhamovref = mysql_fetch_object($consultamovref)) {
$countref = $countref + 1;
$idsaida = $linhamovref->remetente;
$destino = $linhamovref->destino;
$idref = $linhamovref->ID;

$consultad3 = mysql_query("select * from aldeias where ID = '$destino'");
$linhad3 = mysql_num_rows($consultad3);
while($linhad3 = mysql_fetch_object($consultad3)) {
$nomedest = $linhad3->nome;
$donodest = $linhad3->dono;

}



$povo = $linhamovref->povorem;
$nomet1 = "t".$povo."1nome";
$nomet2 = "t".$povo."2nome";
$nomet3 = "t".$povo."3nome";
$nomet4 = "t".$povo."4nome";
$nomet5 = "t".$povo."5nome";
$nomet6 = "t".$povo."6nome";
$nomet7 = "t".$povo."7nome";
$nomet8 = "t".$povo."8nome";
$nomet9 = "t".$povo."9nome";
$style = "-webkit-transform: rotate(180deg);";
?>
<form action="taction.php" target="_self" method="post" enctype="multipart/form-data">
<input type="hidden" name="type" value="rfc">
<input type="hidden" name="idref" value="<?php echo $idref; ?>">
<input type="hidden" value='rtn' name='action'>
<center><table border='1' bgcolor='#98FB98' cellspacing="0">
<td align='center' colspan="1"><img src="../img/infant.png" width="40" height="40"></td><td align='center' colspan="8"><b>(<?php echo $countref; ?>)<font color='green'>Troops reinforcing another village</font></b></td></tr><tr>
<td align='center' colspan="9"><b>Reinforcing:</b><?php echo "<a href='aldprof.php?idpver=".$destino."'>".$nomedest."</a>";?></td></tr><tr>
<td align='center' colspan="9"><b><input type='Submit' value='Return Troops!'></b></td></tr><tr>
<td align='center'><?php echo $$nomet1; ?></td><td align='center'><?php echo $$nomet2; ?></td><td align='center'><?php echo $$nomet3; ?></td><td align='center'><?php echo $$nomet4; ?></td><td align='center'><?php echo $$nomet5; ?></td><td align='center'><?php echo $$nomet6; ?></td><td align='center'><?php echo $$nomet7; ?></td><td align='center'><?php echo $$nomet8; ?></td><td align='center'><?php echo $$nomet9; ?></td></tr><tr>
<td align='center'><?php echo $linhamovref->t1; ?></td><td align='center'><?php echo $linhamovref->t2; ?></td><td align='center'><?php echo $linhamovref->t3; ?></td><td align='center'><?php echo $linhamovref->t4; ?></td><td align='center'><?php echo $linhamovref->t5; ?></td><td align='center'><?php echo $linhamovref->t6; ?></td><td align='center'><?php echo $linhamovref->t7; ?></td><td align='center'><?php echo $linhamovref->t8; ?></td><td align='center'><?php echo $linhamovref->t9; ?></td></tr>
</table></center>
</form>

<?php
}

$countcm = 0;
echo"<br><br>";
$consultamovcm = mysql_query("select * from ataques where destino = '$id'");
$linhamovcm = mysql_num_rows($consultamovcm);
while($linhamovcm = mysql_fetch_object($consultamovcm)) {
$countcm = $countcm + 1;
$idsaidacm = $linhamovcm->remetente;
$destinocm = $linhamovcm->destino;
$idcm = $linhamovcm->ID;

$consultat4 = mysql_query("select * from config where time");
$linhat4 = mysql_num_rows($consultat4);
while($linhat4 = mysql_fetch_object($consultat4)) {
$result4 = $linhamovcm->tempofinal - $linhat4->time;
If ($result4 <= 0) {
$result44 = 0;} else {
$result44 = $result4;}
}

@$consultad4 = mysql_query("select * from aldeias where ID = '$idsaidacm'");
$linhad4 = mysql_num_rows($consultad4);
while($linhad4 = mysql_fetch_object($consultad4)) {
$nomesaida = $linhad4->nome;
$donosaida = $linhad4->dono;}



$povo = $linhamovcm->povorem;
$nomet1 = "t".$povo."1nome";
$nomet2 = "t".$povo."2nome";
$nomet3 = "t".$povo."3nome";
$nomet4 = "t".$povo."4nome";
$nomet5 = "t".$povo."5nome";
$nomet6 = "t".$povo."6nome";
$nomet7 = "t".$povo."7nome";
$nomet8 = "t".$povo."8nome";
$nomet9 = "t".$povo."9nome";

If ($result44 > 0) {
$cmt1 = "?";
$cmt2 = "?";
$cmt3 = "?";
$cmt4 = "?";
$cmt5 = "?";
$cmt6 = "?";
$cmt7 = "?";
$cmt8 = "?";
$cmt9 = "?";
} else {
$cmt1 = $linhamovcm->t1;
$cmt2 = $linhamovcm->t2;
$cmt3 = $linhamovcm->t3;
$cmt4 = $linhamovcm->t4;
$cmt5 = $linhamovcm->t5;
$cmt6 = $linhamovcm->t6;
$cmt7 = $linhamovcm->t7;
$cmt8 = $linhamovcm->t8;
$cmt9 = $linhamovcm->t9;
}
?>


<form action="tmovdef.php" target="_self" method="post" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $linhamovcm->ID; ?>" name="iddef" id="iddef">
<center><table border='1' <?php if($result44 > 0){ echo"bgcolor='#FFD700'";} else { echo"bgcolor='#CD5C5C'";} ?> cellspacing="0">
<td align='center' colspan="1"><img src="<?php If($result44 > 0){ echo $acaminhodef; } else { echo $inpositiondef;}?>" width="40" height="40"></td><td align='center' colspan="8"><b>(<?php echo $countcm; ?>)<?php If($result44 > 0){ echo"<font color='black'>Foreign troops coming</font>";} else { echo" <font color='black'>Foreign troops in your village</font>";}?></b></td></tr><tr>
<td align='center' colspan="9"><b>Attacker:</b><?php echo $donosaida." ";?><b>Village:</b><?php echo "<a href='aldprof.php?idpver=".$idsaidacm."'>".$nomesaida."</a>";?></td></tr><tr>
<td align='center' colspan="9"><b><?php If($result44 > 0){ echo"Time Remaining:".StoH($result44); } else { echo"Attack!<input type='radio' value='atk' name='action' CHECKED>";} ?></b></td></tr><tr>
<td align="center" colspan="9"><?php If($result44 > 0){} else { echo'<input type="submit" value="Go!">';}?></td></tr><tr>
<td align='center'><?php echo $$nomet1; ?></td><td align='center'><?php echo $$nomet2; ?></td><td align='center'><?php echo $$nomet3; ?></td><td align='center'><?php echo $$nomet4; ?></td><td align='center'><?php echo $$nomet5; ?></td><td align='center'><?php echo $$nomet6; ?></td><td align='center'><?php echo $$nomet7; ?></td><td align='center'><?php echo $$nomet8; ?></td><td align='center'><?php echo $$nomet9; ?></td></tr><tr>
<td align='center'><?php echo $cmt1;?></td><td align='center'><?php echo $cmt2;?></td><td align='center'><?php echo $cmt3;?></td><td align='center'><?php echo $cmt4;?></td><td align='center'><?php echo $cmt5;?></td><td align='center'><?php echo $cmt6;?></td><td align='center'><?php echo $cmt7;?></td><td align='center'><?php echo $cmt8;?></td><td align='center'><?php echo $cmt9;?></td></tr>
</table></center>
</form>
<?php
}
?>
</body>
</html>