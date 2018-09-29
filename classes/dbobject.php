<?php

class dbobject
{
      public $username;
      public $email;
      public $password;
      public $smtp;
	  public $page;
      public $loginDetail;
	  
	  
	   public function getUserdata()
    {
          global $database; global $session;
        $this->smtp=$database->query("SELECT * FROM `login` WHERE `username`= '".$this->username."'");
		$this->loginDetail=mysqli_fetch_array($this->smtp);
	   $session->creatLogin();
    }
    public function create()
    {
          global $database;
        $result=$database->query("INSERT INTO `login`(`username`, `password`, `email`) VALUES ('".$this->username."', '".$this->password."', '".$this->email."')");
		
         
    }  
	public function auth()
    {
          global $database;
        $this->smtp=$database->query("SELECT * FROM `login` WHERE `username`= '".$this->username."' AND `password`='".$this->password."'");
		return $database->count();
		return $database->sessionpart();
	   
    }  
	
	 function redirect()
    {
         echo"<script>location.href='".$this->page."';</script>";
         
    }  
	 
}
$dbobject= new dbobject();


?>