<?php
class A 
{
    public function display()
    {
        echo "I am brijesh"."<br>";
    }
} 
class B extends A 
{
    public function display1()
    {
        echo "I am Dixit"."<br>";
    }
}
$obj=new B;
$obj->display();
$obj->display1();
?>