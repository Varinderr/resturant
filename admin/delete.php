<?php 
include('db.php');
$id=$_GET['id'];
mysqli_query($conn,"DELETE from admin_table where id='".$id."'"); 
header("Location: ../addproduct.php");	


?>