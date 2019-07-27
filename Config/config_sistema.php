<?php


// faz conexão com o servidor MySQL
$local_serve = "127.0.0.1"; 	 // local do servidor
$usuario_serve = "root";		 // nome do usuario
$senha_serve = "123890q";			 	 // senha
$banco_de_dados = "cadastro"; 	 // nome do banco de dados

$conn = @mysql_connect($local_serve,$usuario_serve,$senha_serve) or die ("O servidor não responde!");

// conecta-se ao banco de dados
$db = @mysql_select_db($banco_de_dados,$conn) 
	or die ("Não foi possivel conectar-se ao banco de dados!");
	
// dados do administrador são de estrema importancia que sem eles
// o adminstrador não tera acesso as paginas de administração
$login_admin = "admin";  			// nome do administrador
$senha_admin = "123890q";						// senha administrador
$email_admin = "marcotette@hotmail.com";  // email do administrador


?>

<?php






$server_speed = "1";
$troop_speed ="1";
$maxnvedcentral = "20";
$adfly = "1";






?>