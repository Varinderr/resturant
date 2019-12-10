<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><?php
include("db.php");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$rdate=$_POST['rdate'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$time=$_POST['time'];
$query=mysqli_query($conn,"insert into reservation 
(fname,lname,rdate,email,mobile,time)
 values('$fname','$lname','$rdate','$email','$mobile','$time')") 
 or die(mysql_error());
 $msg="Your Table Reserved Successfully";
 header('location:reservation.php?msg='.$msg);

?>

</body>
</html>