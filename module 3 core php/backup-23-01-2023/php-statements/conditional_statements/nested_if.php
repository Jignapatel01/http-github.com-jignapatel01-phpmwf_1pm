<?php 
// if used by another if it is called nested i condition or condition within another condition is called nested if condition

/*
if(condition)
{
    if(condition)
    {
        statements;
    }
}
else 
{
    statements;
}

*/

$a=5;
$b=2;
if($a>$b)
{
   if($a!=0 && $b!=0)
    {
     echo "a is greter than b and both are positive numbers";
}
}
else 
{
    echo "a is less than b";
}

?>