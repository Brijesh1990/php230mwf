<?php 
$file=fopen("ajax.txt","w") or die("file does not exist");
// echo fgets($file);
//echo fgets($file,14);
$txt="ajax stands for asynchrounous javascript and xml";
fwrite($file,$txt);
fclose($file);
?>