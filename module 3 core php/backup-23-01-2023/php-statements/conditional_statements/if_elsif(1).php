<?php 
/* if elseif :  if is executed when condition is true else if is executed while checked multiple condition  elseif is false elase is executed
if(condition)
{
    statements;
}
elseif(condition)
{
    statements;
}
elseif(condition)
{
    statements;
}
else 
{
    statements;
}

*/

$a=50;
$b=50;
if($a>$b)
{
    echo "a is grter than b";
}
elseif($b>$a)
{
    echo "b is greter than a";
}
else 
{
    echo "a and b both are equals";
}

?>