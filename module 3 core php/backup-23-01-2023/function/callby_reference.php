<?php 
function nm(&$fnm) //&$fnm is a refrence variable
{
    echo "My firstName is :Brijesh"."<br>";
}
$lnm="My lastnam is :Pandey";
nm($fnm);
echo $lnm;

?>