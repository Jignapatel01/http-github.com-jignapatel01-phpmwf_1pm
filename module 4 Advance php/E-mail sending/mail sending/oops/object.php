<?php 
// object : An object is instance of class i.e called object
// object is intialised same name of class with new keyword
if(isset($_POST["sub"]))
{
class A 
{
    public function display()
    {
        $result=$_POST["result"];
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];

        if($result==1)
        {
            $n3=$n1+$n2;
            echo "<h3 align='center'>The additions of numbers is :$n3</h3>";
        }
        else if($result==2)
        {
            $n3=$n1-$n2;
            echo "<h3 align='center'>The substractions of numbers is :$n3</h3>";
            
        }
        
        else if($result==3)
        {
            $n3=$n1*$n2;
            echo "<h3 align='center'>The Multiplications of numbers is :$n3</h3>";
            
        }

        else 
        {
         
            echo "<h3 align='center'>Somthing went wrong</h3>";
         
        }
    }
}
$obj=new A;  //new A is an object of class A 
$obj->display();
}
?>
<center>
<form method="post">
    
    <h3>Note : select 1 for additions <br>2 for substraction  <br>3 for multiplications</h3>   
   
    Select Numbers : <select name="result">
    <option value="">-select Numbers-</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
    <br><br>
    Enter your N1 number:<input type="text" name="n1" placeholder="N1 *" required>
    <br><br>
    
    Enter your N2 number:<input type="text" name="n2" placeholder="N2 *" required>
    <br><br>
    <input type="submit" name="sub" value="Submit">
</form>
</center>
