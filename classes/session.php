
<?php
class session
{
   public function __construct()
    {
       session_start();
    }   
    public function creatLogin()
    {
		global $dbobject;
		$_SESSION[creatLogin]=$dbobject->loginDetail;
    }   
      
}
$session= new session();
?>
