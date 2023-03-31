<?php 

// echo time(); // unix timestamp() global time
date_default_timezone_set("Asia/karachi");
$time=time();
echo $time."<br>";
// echo date("d/m/Y",$time);
echo date("d/m/Y h:i:s a",$time);
?>