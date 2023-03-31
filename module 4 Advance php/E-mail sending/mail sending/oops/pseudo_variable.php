<?php 
//pseudo variable : pseudo variable is used to access globally variables inside of member functions using $this  variables is called pseudo variables.


//$this 

// class Test 
// {
//     public $name="Hi sudesh how are you";
//     public function display()
//     {
//         // echo $name;
//         echo $this->name;
//     }
// }
// $obj=new Test;
// $obj->display();




class Test 
{
    //public $name="Hi sudesh how are you";
    public function display($nm)
    {
        // echo $name;
        $this->name=$nm;
        echo $nm;
    }
}
$obj=new Test;
$obj->display("brijesh");

?>