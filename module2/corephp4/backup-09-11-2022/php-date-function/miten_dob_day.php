<?php 
// mktime() : This is a function i.e used to print future date | current | date | past date and time of systems

// mktime(date("h"),date("i"),date("s"),date("m"),date("d"),date("y"))


//Kishan
echo "The day on 17/03/1997 :".date("l",mktime(0,0,0,3,17,1997))."<br>";

//Miten
echo "The day on 17/03/1992 :".date("l",mktime(0,0,0,4,13,1992))."<br>";

// KOMAL BIRTHDAY

echo "The day on 08/02/1995 :".date("l",mktime(0,0,0,2,8,1995))."<br>";

// bRIJESH BIRTHDAY

echo "The day on 04/07/1990 :".date("l",mktime(0,0,0,7,4,1990))."<br>";

?>