<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script>
        function test()
        {
            document.getElementById("para").style="color:red; font-size:40px;transition:1s ease all";
        }
    </script>
</head>
<body>

    <p id="para">Hi brijesh</p>
    <button type="button" onclick="test()">Click here</button>
    
</body>
</html>