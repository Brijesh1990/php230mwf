<?php 
session_start();
unset($_SESSION["email"]);
session_destroy();
echo "<h3 align='center' style='color:red'>You are successfully logout<h3>";
header('refresh:3,login.php');

?>