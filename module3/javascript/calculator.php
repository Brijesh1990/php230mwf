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
  function abc()
  {
    var a=parseInt(prompt("Enter a values :"));
    var b=parseInt(prompt("Enter b values :"));
    var c=a+b;
    alert("Additions of numbers is :"+c);

  }

  function subs()
  {
    var a=parseInt(prompt("Enter a values :"));
    var b=parseInt(prompt("Enter b values :"));
    var c=a-b;
    alert("Substractions of numbers is :"+c);

  }

  function dv()
  {
    var a=parseInt(prompt("Enter a values :"));
    var b=parseInt(prompt("Enter b values :"));
    var c=a/b;
    alert("Divisions of numbers is :"+c);

  }

</script>
</head>
<body>

    <button type="button" onclick="abc()">Click for Additions</button>
    <button type="button" onclick="subs()">Click for Substractions</button>
    <button type="button" onclick="dv()">Click for Divisions</button>
</body>
</html>