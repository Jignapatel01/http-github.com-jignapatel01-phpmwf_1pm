<?php 
class A 
{
    public $a=10;
    public  $b=20;
    public function test()
    {
       return $this->a+$this->b;
       
    }
}
$obj=new A;
echo "additions of numbers is :".$obj->test();
?>