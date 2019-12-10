<?php 
include('db.php');
$id=$_GET['id'];
mysqli_query($conn,"DELETE from contact where id='".$id."'"); 
header("Location: adminmessagesdisplay.php");	


?>