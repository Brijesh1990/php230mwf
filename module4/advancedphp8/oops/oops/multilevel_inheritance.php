<?php 
// a=>B=>C=>D multilevel inheritance
class Car 
{
    public function display()
    {
        echo "This is audy A7"."<br>";
    }
}
class Company extends Car 
{
    public function display1()
    {
        echo "A7 is a series of audy"."<br>";
    }

}
class Garage extends Company
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