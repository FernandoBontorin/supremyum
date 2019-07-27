<?php
$consultaabc = mysql_query("select * from config where tempo");
while($linhaabc = mysql_fetch_object($consultaabc)) {
	echo "<b>Server Time: ".$linhaabc->tempo."!</b>";

}
?>