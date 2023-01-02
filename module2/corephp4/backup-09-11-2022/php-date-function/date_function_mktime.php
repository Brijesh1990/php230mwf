<?php 
// mktime() : This is a function i.e used to print future date | current | date | past date and time of systems

// mktime(date("h"),date("i"),date("s"),date("m"),date("d"),date("y"))


$today=mktime(0,0,0,date("m")-2,date("d")-28,date("y"));

// echo "Today is :".date("d/m/y",$today);

// echo "Tommarow is :".date("d/m/y",$today);

// echo "after 28 day and 2 months the date  is :".date("d/m/Y",$today);

echo "before 28 day and 2 months the date  is :".date("d/m/Y",$today);

?>