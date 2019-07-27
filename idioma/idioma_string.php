<?php

if ($_COOKIE['idioma'] != "en" or "br") 

{

setcookie("idioma", "en", 0);
}

else

{

	

};





include "idioma_" . $_COOKIE['idioma'] . ".php";
?>

