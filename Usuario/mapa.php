<html>
<head>
<style type="text/css">
<!--
table {
	font-size: 30;
	text-align: center;
	width: 100%;
	height: 100%;
}
-->
</style>
</head>
<body>

<?php
include "../validar_session.php";

include "../Config/config_sistema.php";

include "menu1.php";


?>

<form action="mapa2.php" name="mapalink" id="mapalink"  method="post" enctype="multipart/form-data">
<table border="1">
<td>y/x</td><td>-5</td><td>-4</td><td>-3</td><td>-2</td><td>-1</td><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td>
<tr>
<td>5</td><td><?php $xy = '-55'; include "mapfinder.php"; ?></td><td><?php $xy = '-45'; include "mapfinder.php"; ?></td><td><?php $xy = '-35'; include "mapfinder.php"; ?></td><td><?php $xy = '-25'; include "mapfinder.php"; ?></td><td><?php $xy = '-15'; include "mapfinder.php"; ?></td><td><?php $xy = '05'; include "mapfinder.php"; ?></td><td><?php $xy = '15'; include "mapfinder.php"; ?></td><td><?php $xy = '25'; include "mapfinder.php"; ?></td><td><?php $xy = '35'; include "mapfinder.php"; ?></td><td><?php $xy = '45'; include "mapfinder.php"; ?></td><td><?php $xy = '55'; include "mapfinder.php"; ?></td>
<tr>
<td>4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
<tr>
<td>3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
<tr>
<td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
<tr>
<td>1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
<tr>
<td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
<tr>
<td>-1</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
<tr>
<td>-2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
<tr>
<td>-3</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
<tr>
<td>-4</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
<tr>
<td>-5</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
</table>
</form>

<br>
<br>
<br>
0 = Nenhuma vila no local
<br>
# = Vila no local

</body>
</html>