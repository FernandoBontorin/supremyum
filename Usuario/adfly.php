<?php
include "../Config/config_sistema.php";
If ($adfly == 1) {
echo '
<script type="text/javascript"> 
    var adfly_id = 1162868; 
    var adfly_advert = "int"; 
    var exclude_domains = ["example.com", "yoursite.com"]; 
</script> 
<script src="http://cdn.adf.ly/js/link-converter.js"></script>  ';
} else {echo '';} 
?>