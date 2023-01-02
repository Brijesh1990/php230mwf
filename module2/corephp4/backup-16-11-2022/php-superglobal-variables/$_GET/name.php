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
      if(isset($_GET["sub"]))
      {
        $name=$_GET["name"];

        echo "<h1 align='center'>My name is :$name</h1>";
      }

    ?>
    <center>
    <form method="get">
       Enter Name :<input type="text" name="name" placeholder="Enter Name *" required>
       <br><br>
       <input type="submit" name="sub" value="Check >>">
    </form>
    </center>
    
</body>
</html>