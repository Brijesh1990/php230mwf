<?php 
class  A 
{
    public function display()
    {
        echo "Ayush"."<br>";
    }

}
class B extends A
{
    public function __construct()
    {
        echo "Kishan"."<br>";
    }
}

$obj=new B;
$obj->display();

?>