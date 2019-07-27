<?php
$consultaabc = mysql_query("select * from config where tempo");
while($linhaabc = mysql_fetch_object($consultaabc)) {
	echo "<b>Server Time: ".$linhaabc->tempo."!</b>";

$server_time = $linhaabc->tempo;

}
?>


<?php
date_default_timezone_set('UTC');
$today = date("H:i:s");
echo 'UTC Time:  ' .$today;
?>