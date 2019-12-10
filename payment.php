<?php session_start();?>

<?php
 

include('db.php');
if(@$_POST['login'])
 
{   
 
 $u = $_POST['email'];
 
 $p = $_POST['password'];
 $query="SELECT * from signup WHERE email='".$u."' AND password = '".$p."'";
 $result = mysqli_query($conn,$query);
	$res=mysqli_fetch_assoc($result);
 $rows =  mysqli_num_rows($result); 
 
 if($rows>0)
 
 {
 
 $_SESSION['luser'] = $u;
 $_SESSION['fname']=$res['name'];
 header('Location: reservation.php');
 
 }
 
 else
 
 {
 
 $err= "<font color='red'>Invalid user login </font>";
 
 }
 
}
 
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.3.6-dist/font-awesome/css/font-awesome.min.css">
<script src="bootstrap-3.3.6-dist/js/jquery-1.12.4.min.js">
</script>
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js">
</script>
<style>
.navbar-inverse {
    background-color: #000;
    border-color: #000;
	
}
.navbar-inverse .navbar-nav>li>a {
    color: #fff;
}
.navbar-inverse .navbar-nav>li>a:hover {
    color: #000;
	background-color:#fff;
}
.slider{
	background-image:url(images/restaurant.jpg);
	background-attachment:fixed;
	background-size:cover;
	padding:200px;
	color:#FFF;

}
 
.border{
	border:3px solid #003;
	padding:40px;
	border-radius:5px;
}
</style>
<meta charset="utf-8">
<title>FoodShala</title>
</head>

<body>
  <div class="modal fade" id="myModal" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
         
          <form method="post">
          <div class="form-group">
          <input type="text" placeholder="enter email"  name="email" class="form-control">
          </div>
          <div class="form-group">
          <input type="password" placeholder="enter password" name="password" class="form-control">
          </div>
         
        </div>
        <div class="modal-footer">
           <input type="submit" class="btn btn-default" name="login" value="Login">
        </div>
         </form>
      </div>
      </div>
      </div>
      
        <div class="modal fade" id="myfile" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign up</h4>
        </div>
        <div class="modal-body">
         
          <form method="post" action="signupprocess.php">
          <div class="form-group">
          <input type="text" placeholder="name" name="name" class="form-control">
          </div>
          <div class="form-group">
          <input type="text" placeholder="enter email"  name="email" class="form-control">
          </div>
          <div class="form-group">
          <input type="password" placeholder="enter password" name="password" class="form-control">
          </div>
          
          <div class="form-group">
          <input type="text" placeholder="contact" name="contact" class="form-control">
          </div>
          
          <div class="form-group">
          <input type="radio" name="food" value="Veg">&nbsp;Veg
                    <input type="radio" name="food" value="Non-Veg">&nbsp;Non-Veg

          </div>
         <div class="form-group">
          <textarea ="address" placeholder="address"  class="form-control" name="address"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-default" value="Signup">
        </div>
        </form>
      </div>
      </div>
      </div>
      

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Restaurant</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">Home</a></li>
      <li><a href="index.php#about">About</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="reservation.php">Reservation</a></li>
      <li><a href="contact.php">Contact</a></li>
      <?php if(!@$_SESSION['luser']): ?>  
      <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
      <li><a href="#" data-toggle="modal" data-target="#myfile">Sign up</a></li>
      <?php else:?>
       <li><a href="logout.php" >Logout</a></li>
			  <li><a href="#" ><?php echo @$_SESSION['fname'];?></a></li>
		<?php endif; ?>
    </ul>
   
   </div>
 </div>
</nav>
<br><br><br>
<div class="row">
<div class="col-lg-offset-3 col-lg-5">
<div style="margin-top:50px; ">
<div class="ab">
<h1 align="center">Your Order</h1>
<h1 align="center"> Booked </h1>
<h1 align="center">Successfully</h1>
</div>
</div>
</div>
</div>
<br><br><br>
</body>
</html>
