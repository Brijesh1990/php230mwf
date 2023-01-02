<?php 
// $sal=1500;
// $fullday=1;
// $half=0.5;
// $day=1.5;
// echo $earn=$sal*$day;
$price=4500;
//$halfday=0.5;
$checkindate=mktime(0,0,0,date("m"),date("d"),date("y"));;
$checkoutdate=mktime(0,0,0,date("m"),date("d")+4,date("y"));;
$diff=($checkoutdate-$checkindate)/86400;
echo "Total numbers of stay day is ".$diff."<br>";
echo "Total bill is :".$diff*$price;

?>