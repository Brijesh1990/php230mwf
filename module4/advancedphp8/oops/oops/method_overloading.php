<?php 
/* Method overloading : when we used same function pass with different argument or parameters there we used method overloading

Note : in php method overloading is generate warning
*/

class A 
{
    public function display($a,$b)
    {

           $c=$a+$b;
           echo $c;
    }
}
class B extends A 
{
    public function display($a,$b,$d)
    {

        $c=$a*$b*$d;
        echo $c;
    }
}

$obj=new B;
$obj->display(10,20,30);
?>