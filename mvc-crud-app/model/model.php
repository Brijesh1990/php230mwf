<?php 
class model
{
    public $connection="";
    public function __construct()
    {
        // database connect here
        try 
        {
           $this->connection=new mysqli("localhost","root","","mvcappdb");
        //    echo "conection succefully";
        }
        catch(Exceptions $e)
        {
            die(mysqli_error($this->connection,$e));

        }
    }

    //create a member function for select all data
    public function selectalldata($table)
    {
        $select="select * from $table";
        $execute=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($execute))
        {
            $arr[]=$fetch;
        }
        return $arr;
    } 

    // create a member function for insert all data
    public function insertalldata($table,$data)
    {

        $column=array_keys($data);
        $column1=implode(",",$column);
        
        $value=array_values($data);
        $value1=implode("','",$value);

        $insert="insert into $table($column1) values('$value1')";
        $execute=mysqli_query($this->connection,$insert);
        return $execute;
    }

} 
?>