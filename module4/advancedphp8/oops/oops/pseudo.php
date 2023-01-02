<?php 
// pseudo variable : A pseudo variable is used to called direct inside of method or globally access any avaribles in its method.
// A pseudo variable is used with $this symbol.

class Name 
{
    public $name="Hi miten";
    public function test()
    { 
           //echo $nm;
           echo $this->name;
    }
}

$obj=new Name;
$obj->test();
?>