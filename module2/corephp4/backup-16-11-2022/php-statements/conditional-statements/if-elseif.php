<?php
/* 
if elseif: if  executed when condition is true elseif is checked condition multiple times when condition is true it executed otherwise else is executed 
   syntax : if(condition)
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

$a=80;
$b=80;
if($a>$b)
{
    echo "a is greter than b";
}
elseif($b>$a)
{
    echo "b is greter than a";
}
else 
{
    echo "a and b both are same";
}
?>