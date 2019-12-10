<?php session_start();?>

<?php
 

include('db.php');
$msgg=@$_GET['msg'];
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
<title>FoodShala.in</title>
</head>

<body>
<?php echo $msgg;?>
  <div class="modal fade" id="myModal" >
    <div class="modal-dialog">
    
      <!-- Login Modal content-->
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
    
      <!-- Signup Modal content-->
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
      <a class="navbar-brand" href="#">Welcome to FoodShala</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">Home</a></li>
      <li><a href="index.php#about">About</a></li>
      <li><a href="menu.php">Menu</a></li>
      <li><a href="reservation.php">Reservation</a></li>
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


 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/slider.jpg" style="width:100%; height:500px">
      </div>
  </div>
</div>
<br>
    <div class="container" style="padding-top:50px;" id="about">
    <div class="row">
    <div class="col-lg-6">
    <h1>About Us</h1>
    <p>Locally Sourced and Made With Love.<br>
      Early 2019, and we are in the midst of introducing a set of new restaurant experiences to the North India. To help our guests getting more creative and productive days. To tune in the requirements of our modern life. But creating a long-time consistent (brand) experience is not an easy task.

    </p>
    </div>
    <div class="col-lg-3">
    <img src="img/breakfast.jpg" class="img-responsive">
    </div>
    <div class="col-lg-3">
    <img src="img/breakfast3.jpg" class="img-responsive">
    </div>
    <br/>
    <div class="col-lg-3" style="margin-top:5px">
    <img src="img/dessert3.jpg" class="img-responsive">
    </div><br>
    <div class="col-lg-3" style="margin-top:5px">
    <img src="img/drink2.jpeg" class="img-responsive">
    </div>
    </div>
    </div>

<div class="slider" style="margin-top:50px;">
<div class="container">

<div class="row">
<div class="col-lg-12">
<p align="center" style="font-size:40px"><b>Affordable Pricing</b>
</p>
</div>
</div>
</div>
</div>


<div class="container" style="margin-top:50px">
<div class="row">
<div class="col-lg-6">
<div class="border">
<h1 align="center" style="color:#003;">Have a look</h1>
<h1 align="center" style="color:#003;"> to our</h1>
<h1 align="center" style="color:#003; font-weight:bolder"><i> DISHES</i></h1>
</div>
</div>
<div class="col-lg-6">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>

    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">


 <div class="item">
        <img src="img/snacks2.jpg" style="width:100%;height:271px">
        
      </div>
      <div class="item active">
        <img src="img/breakfast3.jpg" style="width:100%; height:271px">
       
      </div>
      
 <div class="item">
        <img src="img/brunch1.jpeg" style="width:100%;height:271px">
      </div>
    
      <div class="item">
        <img src="img/dessert4.jpeg" style="width:100%;height:271px">
        
      </div>
      
      <div class="item">
        <img src="img/drink4.jpg" style="width:100%;height:271px">
        
      </div>
      
     
  
    </div>

    <!-- Left and right controls -->
  
  </div>
</div>

      

  </div>
</div>

<br>





</body>
</html>
