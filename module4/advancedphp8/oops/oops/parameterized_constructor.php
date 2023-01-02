<?php 
class A 
{
    public function __construct($a,$b)
    {
        $c=$a+$b;
        echo "The additions is :".$c;
    }
}
$obj=new A(89,20);

?>