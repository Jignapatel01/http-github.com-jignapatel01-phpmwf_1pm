<?php 
$arr1=array(0=>"brijesh",1=>"rajesh",2=>"yash",3=>"dixit");
asort($arr1);
foreach($arr1 as $value)
{
    echo "My name is :".$value."<br>";
}
?>