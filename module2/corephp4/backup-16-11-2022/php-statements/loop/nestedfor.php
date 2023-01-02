<?php 
// for : for executed while condition is true 

    //   for(initialization; condition; increment/decrement)
    //   {
    //     statement;
    //   }

    $i=10;
    for($i=1;$i<=10;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo $j;
        }
        echo "<br>";

    }
?>