<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

$email = htmlspecialchars($_POST['email']);
;

// verifica o email
if($email == "") {
	echo "Digite seu email!";
	exit;
}


// faz consulta para atualizar os dados
$sql = "update dados_usuarios set Email = '$email' where Login = '$login_usuario'";
$consulta = mysql_query($sql);

// verifica se foi atualizado os dados
if($consulta) {
	$msg = urlencode("Dados atualizados com sucesso!");
	header("Location: dados_usuario.php?msg=$msg");
	exit;
} else {
	echo "<font color=red><b>
		  Não foi possivel atualizar os dados!<br>
		  Click <a href=dados_usuarios.php>aqui</a> para retornar!
		  </font></b>";
	exit;
}
?>