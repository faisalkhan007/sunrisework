<?php

class dbobject
{
      public $username;
      public $email;
      public $password;
	  
    function create()
    {
          global $database;
        $result=$database->query("INSERT INTO `login`(`username`, `password`, `email`) VALUES ('".$this->username."', '".$this->password."', '".$this->email."')");
         
    }  
	function fetch()
    {
          global $database;
        $result=$database->query("SELECT * FROM `login` WHERE `username`= '".$this->username."' AND `password`='".$this->password."'");
         
    }  
	 function redirect($page)
    {
         echo"<script>location.href='".$page."';</script>";
         
    }  
	function loginredirect($page)
    {
         echo"<script>location.href='".$page."';</script>";
         
    }  
}
$dbobject= new dbobject();


?>