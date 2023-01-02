<?php 
/* Method overriding : when we used same function pass with same argument or parameters there we used method overriding

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
    public function display($a,$b)
    {

        $c=$a*$b;
        echo $c;
    }
}

$obj=new B;
$obj->display(10,20);
?>