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
<body bgcolor="yellow">
    <?php 
    if(isset($_POST["log"]))
    {
       $em=$_POST["email"];
       $pwd=$_POST["pass"];
       if($em=='miten@gmail.com' && $pwd=='m12345')
       {
           echo "<h1 align='center' style='color:green'>You are Logged In Successfully</h1>";
           header("location:welcome.php");
       }
       else 
       {
        echo "<h1 align='center' style='color:red'>Your email and passsword are incorrect</h1>";
        header("refresh:3,login2.php");
       }
    }
    ?>
    <center>
        <form method="post">
        <h1>Login Form</h1>
        <label>Email *</label>
        <input type="text" name="email" placeholder="Email *" required><br><br>
        
        <label>Password *</label>
        <input type="password" name="pass" placeholder="Password *" required><br><br>
        
        <input type="submit" name="log" value="Login"><br><br>
    
</form>
    </center>
    
</body>
</html>