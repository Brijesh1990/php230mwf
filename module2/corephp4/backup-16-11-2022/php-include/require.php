<?php
error_reporting(0);
$n=$_POST["num"];
if(isset($_POST["sub"]))
{ 
if($n%2==0)
{
    echo "<h1 align='center'>Numbers is Even</h1>";
}
else 
{
    echo "<h1 align='center'>Numbers is Odd</h1>";

}
}

?>