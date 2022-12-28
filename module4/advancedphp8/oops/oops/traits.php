<?php 
/* PHP only supports single inheritance: a child class can inherit only from one single parent.
So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

Traits are declared with the trait keyword:  */

trait A 
{
    public function test()
    {
        echo "This is kishan"."<br>";
    }
}
trait B 
{
    public function test1()
    {
        echo "This is Miten"."<br>";
    }   
}
trait C 
{
public function test2()
{
    echo "This is Ayush";
}
}

class D 
{
    use A,B,C;
}

$obj=new D;
$obj->test();
$obj->test1();
$obj->test2();


?>