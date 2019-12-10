<?php 
include('db.php');
$id=$_GET['id'];
mysqli_query($conn,"DELETE from signup where id='".$id."'"); 
header("Location: adminsignupdisplay.php");	


?>