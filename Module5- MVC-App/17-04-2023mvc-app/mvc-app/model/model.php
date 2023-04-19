<?php 
class Model 
{
    public $connection="";
    public function __construct()
    {
        // database connections
        //exception handeling
        try 
        {
        $this->connection=new mysqli("localhost","root","","mvcmyapp");
        // echo "connection successfully";
        }
        catch(Exception $e)
        {
            die(mysqli_error());
        }
    }
    //create a member function for insert data 
    public function insertalladata($data,$table)
    {
        $column=array_keys($data);
        $column1=implode(",",$column);

        $value=array_values($data);
        $value1=implode("','",$value);

        $insert="insert into $table($column1)values('$value1')";
        $exe=mysqli_query($this->connection,$insert);
        return $exe;
    }
}

?>