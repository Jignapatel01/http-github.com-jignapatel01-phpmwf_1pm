<?php

class model
{
    public $connection;
    public function __Construct()
    {
        //database connection
        //Exception handling
        try
        {
            $this->connection=new mysqli("localhost","root","","mymvcapp");
           // echo "connection successfully";

        }
        catch(Exception $e)
        {
            die(mysqli_error());
        }
    }
    public function insertdata($data,$table)
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