<?php 
require_once("model/model.php");
class controller extends model 
{
    public function __construct()
    {

        // $name="Hello world";
        // echo $name;
        // WAP ot print name take input from user
        if(isset($_POST["sub"]))
        {
            $nm=$_POST["nm"];
            echo "<h2 align='center' style='color:red'>Your name is :".$nm."<h2>";
        }
    }
}
$obj=new controller;
?>