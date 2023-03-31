<?php 
// $date=mktime(date("h"),date("i"),date("s"),date("m"),date("d")-29,date("y"));
// echo "29 days before a date is :".date("d/m/Y",$date);

$date=mktime(date("h"),date("i"),date("s"),date("m")-2,date("d")-29,date("y")-2);
echo "29 days before 2 months 2 years a date is :".date("d/m/Y",$date);

?>