<?php 
// one class property only access by its one child class i.e called single inhritance
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
        echo "A7 is a series of audy";
    }

}

$obj=new Company;
$obj->display();
$obj->display1();
?>