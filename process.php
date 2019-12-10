<?php 
include('db.php');
$id=$_REQUEST["id"];
$pname=$_POST["pname"];
$price=$_POST["price"];
$desc=$_POST["desc"];
$category=$_POST["category"];
$file=$_FILES["path"]["name"];
$path="uploads/".$file;
move_uploaded_file($_FILES["path"]["tmp_name"],$path);
mysqli_query($conn,"insert into admin_table values('$id','$category','$pname','$price','$desc','$path')")or die(mysql_error());
header("location:addproduct.php");
?>
