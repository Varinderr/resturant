<?php
include("db.php");

$foodname=$_POST['foodname'];
$price=$_POST['price'];

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$mode=$_POST['mode'];
$query=mysqli_query($conn,"insert into userinfo 
(foodname,price,name,email,address,contact,mode)
 values('$foodname','$price','$name','$email','$address','$contact','$mode')") 
 or die(mysql_error());
 header('location:payment.php');
?>
