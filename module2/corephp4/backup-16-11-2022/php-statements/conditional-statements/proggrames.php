<?php 
// W.A.P to print odd or even numbers take input from user
if(isset($_POST["sub"]))
{
    $n=$_POST["number"];
    if($n%2==0)
    {
        echo "<h2 align='center'>This is a Even number</h2>";
    }
    else 
    {
        
        echo "<h2 align='center'>This is a Odd number</h2>";
    }
}
?>
<center>
<form method="post">
Enter numbers :<input type="text" name="number" placeholder="Enter Numbers"><br><br>
<input type="submit" name="sub" value="check">
</form>
</center>

<!-- 
WAP to print a square of numbers take input from users
WAP to print a area of circle  take input from users
WAP to print your name take input from users
WAP to print swap two numbers without using third variable take input from users
WAP to print to check a year is leap year or not take input from users
WAP to print only even numbers
WAP to print odd or even numbers take input from user
 -->