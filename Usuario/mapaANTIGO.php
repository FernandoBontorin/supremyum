<?php
include "../validar_session.php";
include "../Config/config_sistema.php";
include "menu1.php";
?>



<html>
<head>


<style type="text/css">
<!--
#mapa table {
	font-size: 30;
	text-align: center;
	width: 100%;
	height: 100%;
}
-->
</style>
</head>
<body>


<div id="mapa" name="mapa">
<form action="mapa2.php" name="mapalink" id="mapalink"  method="post" enctype="multipart/form-data">
<table border="1">
<td>y/x</td><td>-5</td><td>-4</td><td>-3</td><td>-2</td><td>-1</td><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td>
<tr>
<td>5</td><td><?php $xy = '-55'; include "mapfinder.php"; ?></td><td><?php $xy = '-45'; include "mapfinder.php"; ?></td><td><?php $xy = '-35'; include "mapfinder.php"; ?></td><td><?php $xy = '-25'; include "mapfinder.php"; ?></td><td><?php $xy = '-15'; include "mapfinder.php"; ?></td><td><?php $xy = '05'; include "mapfinder.php"; ?></td><td><?php $xy = '15'; include "mapfinder.php"; ?></td><td><?php $xy = '25'; include "mapfinder.php"; ?></td><td><?php $xy = '35'; include "mapfinder.php"; ?></td><td><?php $xy = '45'; include "mapfinder.php"; ?></td><td><?php $xy = '55'; include "mapfinder.php"; ?></td>
<tr>
<td>4</td><td><?php $xy = '-54'; include "mapfinder.php"; ?></td><td><?php $xy = '-44'; include "mapfinder.php"; ?></td><td><?php $xy = '-34'; include "mapfinder.php"; ?></td><td><?php $xy = '-24'; include "mapfinder.php"; ?></td><td><?php $xy = '-14'; include "mapfinder.php"; ?></td><td><?php $xy = '04'; include "mapfinder.php"; ?></td><td><?php $xy = '14'; include "mapfinder.php"; ?></td><td><?php $xy = '24'; include "mapfinder.php"; ?></td><td><?php $xy = '34'; include "mapfinder.php"; ?></td><td><?php $xy = '44'; include "mapfinder.php"; ?></td><td><?php $xy = '54'; include "mapfinder.php"; ?></td>
<tr>
<td>3</td><td><?php $xy = '-53'; include "mapfinder.php"; ?></td><td><?php $xy = '-43'; include "mapfinder.php"; ?></td><td><?php $xy = '-33'; include "mapfinder.php"; ?></td><td><?php $xy = '-23'; include "mapfinder.php"; ?></td><td><?php $xy = '-13'; include "mapfinder.php"; ?></td><td><?php $xy = '03'; include "mapfinder.php"; ?></td><td><?php $xy = '13'; include "mapfinder.php"; ?></td><td><?php $xy = '23'; include "mapfinder.php"; ?></td><td><?php $xy = '33'; include "mapfinder.php"; ?></td><td><?php $xy = '43'; include "mapfinder.php"; ?></td><td><?php $xy = '53'; include "mapfinder.php"; ?></td>
<tr>
<td>2</td><td><?php $xy = '-52'; include "mapfinder.php"; ?></td><td><?php $xy = '-42'; include "mapfinder.php"; ?></td><td><?php $xy = '-32'; include "mapfinder.php"; ?></td><td><?php $xy = '-22'; include "mapfinder.php"; ?></td><td><?php $xy = '-12'; include "mapfinder.php"; ?></td><td><?php $xy = '02'; include "mapfinder.php"; ?></td><td><?php $xy = '12'; include "mapfinder.php"; ?></td><td><?php $xy = '22'; include "mapfinder.php"; ?></td><td><?php $xy = '32'; include "mapfinder.php"; ?></td><td><?php $xy = '42'; include "mapfinder.php"; ?></td><td><?php $xy = '52'; include "mapfinder.php"; ?></td>
<tr>
<td>1</td><td><?php $xy = '-51'; include "mapfinder.php"; ?></td><td><?php $xy = '-41'; include "mapfinder.php"; ?></td><td><?php $xy = '-31'; include "mapfinder.php"; ?></td><td><?php $xy = '-21'; include "mapfinder.php"; ?></td><td><?php $xy = '-11'; include "mapfinder.php"; ?></td><td><?php $xy = '01'; include "mapfinder.php"; ?></td><td><?php $xy = '11'; include "mapfinder.php"; ?></td><td><?php $xy = '21'; include "mapfinder.php"; ?></td><td><?php $xy = '31'; include "mapfinder.php"; ?></td><td><?php $xy = '41'; include "mapfinder.php"; ?></td><td><?php $xy = '51'; include "mapfinder.php"; ?></td>
<tr>
<td>0</td><td><?php $xy = '-50'; include "mapfinder.php"; ?></td><td><?php $xy = '-40'; include "mapfinder.php"; ?></td><td><?php $xy = '-30'; include "mapfinder.php"; ?></td><td><?php $xy = '-20'; include "mapfinder.php"; ?></td><td><?php $xy = '-10'; include "mapfinder.php"; ?></td><td><?php $xy = '00'; include "mapfinder.php"; ?></td><td><?php $xy = '10'; include "mapfinder.php"; ?></td><td><?php $xy = '20'; include "mapfinder.php"; ?></td><td><?php $xy = '30'; include "mapfinder.php"; ?></td><td><?php $xy = '40'; include "mapfinder.php"; ?></td><td><?php $xy = '50'; include "mapfinder.php"; ?></td>
<tr>
<td>-1</td><td><?php $xy = '-5-1'; include "mapfinder.php"; ?></td><td><?php $xy = '-4-1'; include "mapfinder.php"; ?></td><td><?php $xy = '-3-1'; include "mapfinder.php"; ?></td><td><?php $xy = '-2-1'; include "mapfinder.php"; ?></td><td><?php $xy = '-1-1'; include "mapfinder.php"; ?></td><td><?php $xy = '0-1'; include "mapfinder.php"; ?></td><td><?php $xy = '1-1'; include "mapfinder.php"; ?></td><td><?php $xy = '2-1'; include "mapfinder.php"; ?></td><td><?php $xy = '3-1'; include "mapfinder.php"; ?></td><td><?php $xy = '4-1'; include "mapfinder.php"; ?></td><td><?php $xy = '5-1'; include "mapfinder.php"; ?></td>
<tr>
<td>-2</td><td><?php $xy = '-5-2'; include "mapfinder.php"; ?></td><td><?php $xy = '-4-2'; include "mapfinder.php"; ?></td><td><?php $xy = '-3-2'; include "mapfinder.php"; ?></td><td><?php $xy = '-2-2'; include "mapfinder.php"; ?></td><td><?php $xy = '-1-2'; include "mapfinder.php"; ?></td><td><?php $xy = '0-2'; include "mapfinder.php"; ?></td><td><?php $xy = '1-2'; include "mapfinder.php"; ?></td><td><?php $xy = '2-2'; include "mapfinder.php"; ?></td><td><?php $xy = '3-2'; include "mapfinder.php"; ?></td><td><?php $xy = '4-2'; include "mapfinder.php"; ?></td><td><?php $xy = '5-2'; include "mapfinder.php"; ?></td>
<tr>
<td>-3</td><td><?php $xy = '-5-3'; include "mapfinder.php"; ?></td><td><?php $xy = '-4-3'; include "mapfinder.php"; ?></td><td><?php $xy = '-3-3'; include "mapfinder.php"; ?></td><td><?php $xy = '-2-3'; include "mapfinder.php"; ?></td><td><?php $xy = '-1-3'; include "mapfinder.php"; ?></td><td><?php $xy = '0-3'; include "mapfinder.php"; ?></td><td><?php $xy = '1-3'; include "mapfinder.php"; ?></td><td><?php $xy = '2-3'; include "mapfinder.php"; ?></td><td><?php $xy = '3-3'; include "mapfinder.php"; ?></td><td><?php $xy = '4-3'; include "mapfinder.php"; ?></td><td><?php $xy = '5-3'; include "mapfinder.php"; ?></td>
<tr>
<td>-4</td><td><?php $xy = '-5-4'; include "mapfinder.php"; ?></td><td><?php $xy = '-4-4'; include "mapfinder.php"; ?></td><td><?php $xy = '-3-4'; include "mapfinder.php"; ?></td><td><?php $xy = '-2-4'; include "mapfinder.php"; ?></td><td><?php $xy = '-1-4'; include "mapfinder.php"; ?></td><td><?php $xy = '0-4'; include "mapfinder.php"; ?></td><td><?php $xy = '1-4'; include "mapfinder.php"; ?></td><td><?php $xy = '2-4'; include "mapfinder.php"; ?></td><td><?php $xy = '3-4'; include "mapfinder.php"; ?></td><td><?php $xy = '4-4'; include "mapfinder.php"; ?></td><td><?php $xy = '5-4'; include "mapfinder.php"; ?></td>
<tr>
<td>-5</td><td><?php $xy = '-5-5'; include "mapfinder.php"; ?></td><td><?php $xy = '-4-5'; include "mapfinder.php"; ?></td><td><?php $xy = '-3-5'; include "mapfinder.php"; ?></td><td><?php $xy = '-2-5'; include "mapfinder.php"; ?></td><td><?php $xy = '-1-5'; include "mapfinder.php"; ?></td><td><?php $xy = '0-5'; include "mapfinder.php"; ?></td><td><?php $xy = '1-5'; include "mapfinder.php"; ?></td><td><?php $xy = '2-5'; include "mapfinder.php"; ?></td><td><?php $xy = '3-5'; include "mapfinder.php"; ?></td><td><?php $xy = '4-5'; include "mapfinder.php"; ?></td><td><?php $xy = '5-5'; include "mapfinder.php"; ?></td>
</table>
</form>
</div>
<br>
<br>
<br>
0 = Nenhuma vila no local
<br>
# = Vila no local

</body>
</html>