<?php
include "padrao.php"; 

?>

<html>
<body>
<?php
$inposition = "../img/v.png";
$acaminho = "../img/atk.gif";
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
?>
</body>
</html>