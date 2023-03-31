<?php 
// array within another array there we used multidimentional array
$arr=array("technical"=>array("php","python","java"),"non-technical"=>array("wd","seo","st"));
print_r($arr);
print_r($arr["technical"][2]);
print_r($arr["non-technical"][1]);
?>