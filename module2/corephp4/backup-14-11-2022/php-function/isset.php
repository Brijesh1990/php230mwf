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

    <?php 
    if(isset($_POST["sub"]))
    {
        $nm=$_POST["unm"];
        echo "<h3 align='center'>Your name is :$nm</h3>";
    }
    ?>

    <center>
        <form method="post">
            Enter Your Name :<input type="text" name="unm" placeholder="Enter your name *" required>
            <br><br>
            <input type="submit" name="sub" value="check >>">
        </form>
    </center>
    
</body>
</html>