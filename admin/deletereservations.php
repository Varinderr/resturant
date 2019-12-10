<?php 
include('db.php');
$id=$_GET['id'];
mysqli_query($conn,"DELETE from reservation where id='".$id."'"); 
header("Location: adminreservationsdisplay.php");	


?>