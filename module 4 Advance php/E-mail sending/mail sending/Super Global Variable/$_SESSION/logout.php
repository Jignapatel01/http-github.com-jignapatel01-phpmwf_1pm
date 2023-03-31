<?php
session_start();
unset($_SESSION["mail"]);
session_destroy();
echo "<h3 style='color:green'; align='center'>logout successfully</h3>";
header("refresh:2,login.php");
?>