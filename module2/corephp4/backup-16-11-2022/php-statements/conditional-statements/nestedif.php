<?php
/* 
nested if: nested if is used condition within another condition there we used nested if
syntax : if(condition)
            {
                if(condition)
                {
                statements;
            }
        }

*/

$a=90;
$b=80;
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