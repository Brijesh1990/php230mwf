<?php
session_start(); 
if(isset($_POST["log"]))
{
    $em=$_POST["email"];
    $pass=$_POST["pass"];
    if($em=='ayush@gmail.com' && $pass=='ayu123')
    {
        $_SESSION["email"]=$_POST["email"];
        echo "<h3 align='center' style='color:green'>You are Logged in successfully</h3>";
        header('refresh:3,welcome.php');
    }
    else 
    {
        echo "<h3 align='center' style='color:red'>Your email and password are Incorrect<h3>";
        header('refresh:3,login.php');
    }
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
    <center>
        <form method="post">
            Enter email :<input type="text" name="email" placeholder="Email *" required>
            <br><br>
            Enter password :<input type="password" name="pass" placeholder="Password *" required>
            <br><br>
            <input type="submit" name="log" value="Login">
        </form>
    </center>
</body>
</html>
