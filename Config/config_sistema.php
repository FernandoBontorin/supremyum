<?php


// faz conex�o com o servidor MySQL
$local_serve = "dbmy0061.whservidor.com"; 	 // local do servidor
$usuario_serve = "koyotegame";		 // nome do usuario
$senha_serve = "koyote157";			 	 // senha
$banco_de_dados = "koyotegame"; 	 // nome do banco de dados

$conn = @mysql_connect($local_serve,$usuario_serve,$senha_serve) or die ("O servidor n�o responde!");

// conecta-se ao banco de dados
$db = @mysql_select_db($banco_de_dados,$conn) 
	or die ("N�o foi possivel conectar-se ao banco de dados!");
	
// dados do administrador s�o de estrema importancia que sem eles
// o adminstrador n�o tera acesso as paginas de administra��o
$login_admin = "admin";  			// nome do administrador
$senha_admin = "123890q";						// senha administrador
$email_admin = "marcotette@hotmail.com";  // email do administrador


?>

<?php






$server_speed = "1";
$troop_speed ="1";
$maxnvedcentral = "20";






?>