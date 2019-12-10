<?php 
$conn=mysqli_connect("localhost","root","","food");
if(!$conn)
{
	die("connection in error:".mysqli_connect_error());
}	
?>