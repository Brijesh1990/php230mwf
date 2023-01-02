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
            <label>Select country </label>
            <select name="country">
                <option value="">-select country-</option>
                <?php 
                 $url="http://country.io/names.json";
                 $data=file_get_contents($url,True);
                 $cn=json_decode($data);
                 foreach($cn as $cn1)
                 {
                 ?>
                <option value="<?php echo $cn1;?>"><?php echo $cn1;?></option>

                <?php
                 }
                 ?>

            </select>

            <br><br>


            <select name="state">
                <option value="">-select state-</option>
                <?php 
                 $url="state_list_json.json";
                 $data=file_get_contents($url,True);
                 $st=json_decode($data);
                 foreach($st as $st1)
                 {
                 ?>
                <option value="<?php echo $st1;?>"><?php echo $st1;?></option>

                <?php
                 }
                 ?>

            </select>
        </form>
        </form>
    </center>
    
</body>
</html>