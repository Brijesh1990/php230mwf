<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='js/valid.js'></script>
</head>
<body>
    <center>
        <h1>Login Form</h1>
        <form method="post" action="welcome.php" name="frm" onsubmit="return validation(this.value)">
            <input type="text" name="email" placeholder="Email *">
            <br><br>
            <input type="passsword" name="pass" placeholder="Password *">
            <br><br>

            <input type="submit" name="sub" value="Login">
            
        </form>
    </center>
</body>
</html>