<?php 
//Note : multiple inheritance is not supported in php and java only c++ and python will support multiple inheritance


class Car 
{
    public function display()
    {
        echo "This is audy A7"."<br>";
    }
}
class Company
{
    public function display1()
    {
        echo "A7 is a series of audy"."<br>";
    }

}
class Garage extends Car,Company
{
    public function display2()
    {
        echo "I seviced my audy in balaji automobiles Rajkot";
    }
}


$obj=new Garage;
$obj->display();
$obj->display1();
$obj->display2();
?>