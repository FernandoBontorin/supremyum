<html>
<body>

<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

include "../engine/time.php";

?>







<br>
<br>
<br>
<center>

<a href="upnivelmadeirascript.php">
<?php



            $consulta308051 = mysql_query("select * from aldeias where dono = '$login_usuario'");
 $linha5981 = mysql_num_rows($consulta308051);
  while  ($linha5981 = mysql_fetch_object($consulta308051)) {
$aaa = $linha5981->nivelmadeira + 1;
echo "aumentar para o nivel " .$aaa;       
?>
</a>

<br>


<?php        
$consulta3208051 = mysql_query("select * from info where upmadeiramadeira");
 $linha59181 = mysql_num_rows($consulta3208051);
  while  ($linha59181 = mysql_fetch_object($consulta3208051)) {
$madeiranadb = $linha59181->upmadeiramadeira;


echo "custo " ;

}
}
?>
</center>
</body>
</html>