<?php
include("db.php");
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$food=$_POST['food'];
$query=mysqli_query($conn,"insert into signup 
(name,email,password,address,contact,food)
 values('$name','$email','$pass','$address','$contact','$food')") 
 or die(mysql_error());
 header('location:index.php');
?>
