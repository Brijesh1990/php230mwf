<?php 
$file=fopen("jquery.txt","w") or die("file does not exist");
$path="jquery.txt";
$rm=unlink($path);
if($rm)
{
    echo "File removed succefully";
}
?>