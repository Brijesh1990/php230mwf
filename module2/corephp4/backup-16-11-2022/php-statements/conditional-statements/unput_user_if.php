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
        $a=$_POST["a"];
        $b=$_POST["b"];
        if($a>$b)
        {
            echo "<h3 align='center'>a is greter than b</h3>";
        }
      }

     ?>

    <center>
        <form method="post">
            Enter a value <input type="text" name="a" placeholder="Enter a value" required><br><br>
            Enter b value <input type="text" name="b" placeholder="Enter b value" required><br><br>
            <input type="submit" name="sub" value="Submit"><br><br>
        </form>
    </center>
    
</body>
</html>