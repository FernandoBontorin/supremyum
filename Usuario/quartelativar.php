<?php
include "../validar_session.php";


include "../Config/config_sistema.php";

?>

<?php
echo'<html><head><meta http-equiv="refresh" content="1; url=home.php" /></head></html>';

$consulta3000s = mysql_query("select * from aldeias where dono = '$login_usuario'");
	$linha5s = mysql_num_rows($consulta3000s);
while($linha5s = mysql_fetch_object($consulta3000s)) {

If ($linha5s->quartelvalid == 1) {
echo "Este quartel já foi ativado!";
} else {

$idvillage = $linha5s->ID;
$sql5 = "insert into fila (aldeiaid, dono) values ('$idvillage','$login_usuario')";
$consulta786 = mysql_query($sql5);

$sql55 = "insert into tropas (IDaldeia, dono) values ('$idvillage','$login_usuario')";
$consulta785 = mysql_query($sql55);

$attquartelvalid = mysql_query("UPDATE aldeias SET quartelvalid = 1 WHERE dono = '$login_usuario'");


// verifica se o usuario foi cadastrado
if($consulta785) {
	echo "<font color=green><b>
		  Finished... Now you can play! <b><a href='home.php'>Back</a></b><br>
		  
		  </font></b>";
	exit;
} else {
	echo "Aldeia não ativada!<br>
		 Reporte esse bug!<br>";
	exit;
}}}