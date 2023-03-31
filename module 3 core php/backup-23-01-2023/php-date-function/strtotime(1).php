<?php 
/* strtotime : this function is used to convert any string into date formate*/
echo "Tommarow a date is :".date("d/m/Y",strtotime("+1day"))."<br>";
echo "after one week a date is :".date("d/m/Y",strtotime("+7day"))."<br>";
echo "after 7 month a date is :".date("d/m/Y",strtotime("+7month"))."<br>";

?>