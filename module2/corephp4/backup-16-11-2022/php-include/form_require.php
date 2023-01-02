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
    // require : require is a function i.e used to reuse code one page to another page if require not get file extention its return fatal error and rest of code excuted is stopped.
    //  require("require.php");
    //  require("require.php");
    require_once("require.php");
     require_once("require.php");
    ?>
    <center>
        <form method="post">
            Enter a Number :<input type="text" name="num" placeholder="Enter Numbers" required>
            <br><br>
            <input type="submit" name="sub" value="Submit"> 
        </form>
    </center>
    
</body>
</html>