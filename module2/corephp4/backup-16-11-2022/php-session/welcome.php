<?php 
session_start();
if(!isset($_SESSION["email"]))
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <h2>Welcome to : <?php echo rtrim($_SESSION["email"],"@gmail.com"); ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="logout.php" onclick="return confirm('Are you sure to logout!')">Logout Here !</a></h2>
</body>
</html>