<?php
include "../validar_session.php";


include "../Config/config_sistema.php";





// faz consulta no banco
$consulta = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");

$online = ("0");
$updates = mysql_query("update dados_usuarios set online = '$online' where Login = '$login_usuario'");





?>

<head>
<link rel="StyleSheet" href="style.css">
</head>

<script>
function abrir() {
    var el = document.getElementById('spoiler');
    if (el.style.display == 'none') {
        el.style.display = 'block';
    }else {
        el.style.display = 'none';
    }
}
</script>







<img src="../img/espadaslayer.png" onclick="abrir();">
<div id="spoiler" style="display:none;">


<table bgcolor="white" border="5">
<form action="madeiraup.php" target="iframerecursos" name="madeiraupform" id="madeiraupform"  method="post" enctype="multipart/form-data">
<tr>
<td>
Prod. de madeira: <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelmadeira;                   } ?>
</td>
<td>

<input type="submit" name="madeiraup" id="madeiraup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelmadeira + 1;                   } ?>"></input>



</td>
</tr>
</form>


<form action="ouroup.php" target="iframerecursos" name="ouroupform" id="ouroupform"  method="post" enctype="multipart/form-data">
<tr>
<td>
Prod. de ouro: <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelouro;                   } ?>
</td>
<td>
<input type="submit" name="ouroup" id="ouroup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelouro + 1;                   } ?>"></input>
</td>
</tr>
</form>
<form action="ferroup.php" target="iframerecursos" name="ferroupform" id="ferroupform"  method="post" enctype="multipart/form-data">

<tr>
<td>
Prod. de ferro: <?php             $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelferro;                   } ?>
</td>
<td>
<input type="submit" name="ferroup" id="ferroup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelferro + 1;                   } ?>"></input>
</td>
</form>
<form action="comidaup.php" target="iframerecursos" name="comidaupform" id="comidaupform"  method="post" enctype="multipart/form-data">

<tr>
<td>
Prod. de comida: <?php               $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelcomida;                   } ?>
</td>

<td>
<input type="submit" name="comidaup" id="comidaup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelcomida + 1;                   } ?>"></input>
</td>

</tr>

</form>
</table>
</div>
<div id="recursosframe" name="recursosframe">
<td>
<iframe name="iframerecursos" id="iframerecursos" style="background-image:url('../img/bg1.jpg')" scrolling="no" allowtransparency="true"></iframe>
</td>
</div>

</div>






















-------------------------------------




    <script type="text/javascript">
function showSpoiler(obj)
    {
    var inner = obj.parentNode.getElementsByTagName("div")[0];
    if (inner.style.display == "none")
        inner.style.display = "";
    else
        inner.style.display = "none";
    }
    </script>
<div class="spoiler">
<img src="../img/espadaslayer.png" onclick="showSpoiler(this);">
    <div class="inner" style="display:none;">
    This is a spoiler!
    </div>
</div>



<div class="spoiler">
<img src="../img/espadaslayer.png" onclick="showSpoiler(this);">
<div class="inner" style="display:none;">


<table border="5">
<td>
OHHHHHHH YEAHHHHHHHHHHHHHHHHHH
</td>
<td> LOL
</td>

</table>



</div>
</div>














<a href="javascript: for (sl=document.getElementsByName('speciallink'), ss=0; ss<sl.length; ss++) { sl[ss].style.display= (sl[ss].style.display=='none' ? '' : 'none'); void(null); }">Text to hide/show</a>






















<input class="spoilerbutton" value="Spoiler" onclick="n = this.parentNode.parentNode.lastChild;if(n.style.display == 'none') {n.style.display = 'block';} else {n.style.display = 'none';} return false;" type="button">
<div class="spoilerbody" style="display: block;">teste</div></div>







































<script>
function abrir() {
    var el = document.getElementById('spoiler');
    if (el.style.display == 'none') {
        el.style.display = 'block';
    }else {
        el.style.display = 'none';
    }
}
</script>

















<input type="button" value="ok" onclick="abrir();">
<div id="spoiler" style="display:none;">Conteudo da Div





































<div id="tableniveis1" name="tableniveis1">
<?php

$consulta3000999 = mysql_query("select * from dados_usuarios where Login = '$login_usuario'");
	$linha590 = mysql_num_rows($consulta3000999);

while($linha590 = mysql_fetch_object($consulta3000999)) {
if  ($linha590->vilas ==1) {

?>
<table bgcolor="white" border="5">
<form action="madeiraup.php" target="iframerecursos" name="madeiraupform" id="madeiraupform"  method="post" enctype="multipart/form-data">
<tr>
<td>
Prod. de madeira: <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelmadeira;                   } ?>
</td>
<td>

<input type="submit" name="madeiraup" id="madeiraup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelmadeira + 1;                   } ?>"></input>



</td>
</tr>
</form>


<form action="ouroup.php" target="iframerecursos" name="ouroupform" id="ouroupform"  method="post" enctype="multipart/form-data">
<tr>
<td>
Prod. de ouro: <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelouro;                   } ?>
</td>
<td>
<input type="submit" name="ouroup" id="ouroup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelouro + 1;                   } ?>"></input>
</td>
</tr>
</form>
<form action="ferroup.php" target="iframerecursos" name="ferroupform" id="ferroupform"  method="post" enctype="multipart/form-data">

<tr>
<td>
Prod. de ferro: <?php             $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelferro;                   } ?>
</td>
<td>
<input type="submit" name="ferroup" id="ferroup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelferro + 1;                   } ?>"></input>
</td>
</form>
<form action="comidaup.php" target="iframerecursos" name="comidaupform" id="comidaupform"  method="post" enctype="multipart/form-data">

<tr>
<td>
Prod. de comida: <?php               $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelcomida;                   } ?>
</td>

<td>
<input type="submit" name="comidaup" id="comidaup" value="Aumentar para o nível  <?php            $consulta30805 = mysql_query("select * from aldeias where dono = '$login_usuario'"); $linha598 = mysql_num_rows($consulta30805);  while($linha598 = mysql_fetch_object($consulta30805)) {echo $linha598->nivelcomida + 1;                   } ?>"></input>
</td>

</tr>

</form>
</table>
</div>
<div id="recursosframe" name="recursosframe">
<td>
<iframe name="iframerecursos" id="iframerecursos" style="background-image:url('../img/bg1.jpg')" scrolling="no" allowtransparency="true"></iframe>
</td>
</div>
</div>
</div>
<?php
}}




?>