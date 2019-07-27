<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="cadastro.css" rel="stylesheet" type="text/css" />

</head>

<body>



	<?php
// inclui o arquivo de configuração do sistema
include "../validar_session.php";

include "../Config/config_sistema.php";




$consulta13 = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
while($linha7 = mysql_fetch_object($consulta13)) {
	

$civilizacao=($linha7->povo);

?>

<?php
	}


// recebe dados do formulario
$nome = htmlspecialchars($_POST['nomecolo']);
$pop = $_POST['pop'];
$localizacao = $_POST['loca'];
$dono = $login_usuario;
$pontosdeprevisao = ('0');
$madeira = ('500');
$ouro = ('500');
$ferro = ('500');
$comida = ('700');
$capacidade = ('1000');
$lealdade = ('100');
$madeiraproducao  =('50');
$ouroproducao  =('50');
$ferroproducao  =('50');
$comidaproducao  =('70');



$madeiradb = $madeiraproducao * $server_speed;
$ourodb = $ouroproducao * $server_speed;
$ferrodb = $ferroproducao * $server_speed;
$comidadb = $comidaproducao * $server_speed;





// verifica se o usuario digitou o login
if($nome == "") {
	echo "Write your village name!";
	exit;
} else {
	// se o usuario digitou o login ele verifica
	// se esta disponivel
	$consulta = mysql_query("select * from aldeias where nome = '$nome'");
	$linha = mysql_num_rows($consulta);
	if($linha != 0) {
		echo "That name already exists!<br>
			  Choose another!";
		exit;
	}
}

If($localizacao=="-x+y") {
$reg = "2";
$x = rand(-5,0);
$y = rand(0,5);
}

If($localizacao=="-x-y") {
$reg = "3";
$x = rand(-5,0);
$y = rand(-5,0);
}

If($localizacao=="+x+y") {
$reg = "1";
$x = rand(0,5);
$y = rand(0,5);
}

If($localizacao=="+x-y") {
$reg = "4";
$x = rand(0,5);
$y = rand(-5,0);
}

$xy = '' .$x .$y;
echo$dono;


// faz consulta no banco para inserir os dados do usuario
$sql = ("UPDATE dados_usuarios SET vilas = 1 WHERE Login = '$dono' ");


$consulta78 = mysql_query($sql);




// faz consulta no banco para inserir os dados do usuario
$sql = "insert into aldeias (ID,dono,nome,povo,pontosdeprevisao,madeira,ouro,ferro,comida,capacidade,lealdade,x,y,xy,reg,madeirahora,ourohora,ferrohora,comidahora) values ('','$dono','$nome','$civilizacao','$pontosdeprevisao','$madeira','$ouro','$ferro','$comida','$capacidade','$lealdade','$x','$y','$xy','$reg','$madeiradb','$ourodb','$ferrodb','$comidadb')";
$sqlM = "insert into mapaview (id,dono,x,y) values ('','$dono','$x','$y')";
$consulta78 = mysql_query($sql);
$consulta79 = mysql_query($sqlM);


// verifica se o usuario foi cadastrado
if($consulta78) {
	echo "<font color=green><b>
		  Village created!  <b><a href='quartelativar.php'>Continue</a></b><br>
		  
		  </font></b>";
	exit;
} else {
	echo "Error<br>
		 Report that bug!<br>
		  Click <a href=index.php>here</a> to back to home page.";
	exit;
}

?>


</body>
</html>
