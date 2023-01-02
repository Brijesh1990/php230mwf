<?php 
// what is object : An object is instances of class.
//object will called through new keyword 
class A 
{
    public function display()
    {
        $name="Hi i am brijesh";
        echo $name;
    }
}

$obj=new A; //new A is an object of class A
$obj->display();



?>