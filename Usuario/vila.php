<?php
include "../validar_session.php";
include "../Config/config_sistema.php";
// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
$online = ("0");
$updates = mysql_query("update dados_usuarios set online = '$online' where Login = '$login_usuario'");
?>


<html>
<head>
<style type="text/css">
<!--

-->
</style>
</head>
<body>
<?php
include "checkedificios.php";
?>
<div id="edificiosvila" name="edificiosvila">
<form action="predio.php" name="prediolink" id="prediolink"  method="post" enctype="multipart/form-data">
<table border="10" cellPadding="0" cellSpacing="0">
<td>
<table border="0"  cellPadding="0" cellSpacing="0">
<td><?php echo '<img src="../img/'.$slot1.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot2.'.bmp" >' ; ?></td><td><?php echo '<img src="../img/'.$slot3.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot4.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot5.'.bmp ">' ; ?></td>
<tr>
<td><?php echo '<img src="../img/'.$slot6.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot7.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot8.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot9.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot10.'.bmp ">' ; ?></td>
<tr>
<td><?php echo '<img src="../img/'.$slot11.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot12.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot13.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot14.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot15.'.bmp ">' ; ?></td>
<tr>
<td><?php echo '<img src="../img/'.$slot16.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot17.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot18.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot19.'.bmp ">' ; ?></td><td><?php echo '<img src="../img/'.$slot20.'.bmp ">' ; ?></td>
</table>
</td>
</table>
</form>




</div>
</body>
</html>