<?php 
$file=fopen("javascript.txt","r") or die("file does not exist");
if($file)
{
    echo "file opened successfuly";
}

else 
{
    echo "somthing went wrong";
}
?>