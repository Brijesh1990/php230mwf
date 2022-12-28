<?php 
interface A 
{
    public function display1(); // declare a function
}
interface B 
{
    public function display2(); // declare a function
}
interface C
{
    public function display3(); // declare a function
}

class D implements A,B,C 
{
    public function display1()
{
    echo "Hello Miten"."<br>";
}

public function display2()
{
    echo "Hello Kishan"."<br>";
}

public function display3()
{
    echo "Hello Ayush"."<br>";
}
}

$obj=new D;
$obj->display1();
$obj->display2();
$obj->display3();
?>