<?php 
// inheritance : An inheritance is used to access one class property with another class i.e called inheritance.
// extends kyword used obne class property with another class
// types of inheritance
       // single inheritance
       // multilevel inheritance
       // multiple inheritance  
class A 
{
    public function display()
    {
        $name="Hi i am Brijesh";
        echo $name."<br>";
    }
}
class B extends A 
{
    public function display1()
    {
        $name="Hi i am Kishan";
        echo $name."<br>";
    }

} 

$obj=new B;
$obj->display();
$obj->display1();
?>