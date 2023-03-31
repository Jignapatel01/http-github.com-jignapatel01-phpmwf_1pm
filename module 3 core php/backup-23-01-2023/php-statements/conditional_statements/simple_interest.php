<?php 
// isset() : insset() is a default function of php i.e used to check your data on server is set or not
if(isset($_POST["claculate_si"]))
{
    $p=$_POST["pname"];
    $n=$_POST["year"];
    $r=$_POST["roi"];
    $si=$p*$n*$r/100;
    echo "<h2> simple interest is :".$si."<h2>";

}


?>