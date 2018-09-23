<?php
require("init.php");

if(isset($_POST['submit']))
{
$dbobject->username=trim($_POST['username']);
$dbobject->email=trim($_POST['email']);
$dbobject->password=trim($_POST['password']);
$dbobject->create();
$dbobject->redirect("index.php");
}
if(isset($_POST['login']))
{
$dbobject->username=trim($_POST['username']);
$dbobject->password=trim($_POST['password']);
$dbobject->fetch();
$dbobject->loginredirect("pagelogin.php");
}
?>

<html>
<head><title>Register page </title></head>
<body>


<form  action="" Method="POST">
<p>Register page</p>
username  : <input type="text" name="username"><br><br>
Email  : <input type="text" name="email"><br><br>
password  :<input type="password" name="password"><br><br>
<button type="submit" name="submit">Submit</button>
</form>

<form  action="" Method="POST">
<p>Login page</p>
username  : <input type="text" name="username"><br><br>
password  :<input type="password" name="password"><br><br>
<button type="submit" name="login">Submit</button>
</form>
</body>

</html>