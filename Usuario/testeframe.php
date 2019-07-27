<?php
include "../validar_session.php";
include "../Config/config_sistema.php";
echo "tarefas em segundo plano\n";
for ($i=0; $i <50; $i++)
{
    echo "operação $i\n";
    sleep(1);
}
?>
<div display="none">
$testee = 1;
while($testee <= 10) {
$lool = mysql_query("update teste set aa = '$testee' where lol = '1' ");
echo $testee;
$testee = $testee + 1;
sleep(1);
}




$consultaq = mysql_query("select * from teste where lol = '1'");
</div>