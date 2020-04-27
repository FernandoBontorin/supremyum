<?php

// faz conex�o com o servidor MySQL
$local_serve = "supremyum_db"; 	 // local do servidor
$usuario_serve = "root";		 // nome do usuario
$senha_serve = "syspass";			 	 // senha
$banco_de_dados = "cadastro"; 	 // nome do banco de dados

$conn = mysql_connect($local_serve,$usuario_serve,$senha_serve) or die ("Não foi possível conectar ao banco de dados(configuracoes)!");

// conecta-se ao banco de dados
$db = mysql_select_db($banco_de_dados,$conn) 
	or die ("N�o foi possivel conectar-se ao banco de dados!");
	
// dados do administrador s�o de estrema importancia que sem eles
// o adminstrador n�o tera acesso as paginas de administra��o
$login_admin = "admin";  			// nome do administrador
$senha_admin = "123890q";						// senha administrador
$email_admin = "marcotette@hotmail.com";  // email do administrador

$server_speed = "1";
$troop_speed ="4";
$maxnvedcentral = "20";
$atualizador = 1;
$verify = 0;


if($atualizador && file_exists("../Config/atualizador.php")){
	include_once "../Config/atualizador.php";
}




?>