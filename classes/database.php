
<?php
class database
{
    private $connection; 
       
    public function __construct()
    {
        $this->connection=mysqli_connect("localhost","root","","myproject");
    }   
    public function query($sql)
    {
       return  mysqli_query($this->connection,$sql);
    }
	public function count()
    {
          global $dbobject;
       return mysqli_num_rows($dbobject->smtp); 
         
	   
    }  
      
}
$database= new database();
?>
<?php
/*
class database
{
      public $connection;  
       
    public function connect()
    {
        $this->connection=mysqli_connect("localhost","root","","myproject");
        
        return $this->connection;
   
    }
    public function query($sql)
    {
        
       return  mysqli_query($con,$sql);
    }
      
}
$database= new database();

*/
?>