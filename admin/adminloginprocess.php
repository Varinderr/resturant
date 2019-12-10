<?php
$username=$_POST['username'];
$password=$_POST['password'];

if ($username=="varinder" and $password=="varinder123")
{ 
   	header('location:admin.php');
}
else
{
	$msg="Login Failed...!!!!";
	header('location:index.php?msg='.$msg);
}
?>