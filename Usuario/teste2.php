<?php
include"padrao.php";
?>
<center>
<?php
$consulta = mysql_query("select * from dados_usuarios");
while($linhas = mysql_fetch_object($consulta)) {
echo $linhas->Login.'<hr>';
}
?>