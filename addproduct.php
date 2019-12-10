<?php include('db.php');?>

<!DOCTYPE HTML>
<html>
<head>
<title>foodshala admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<script src="admin/js/jquery-1.11.1.min.js"></script>
<script src="admin/js/modernizr.custom.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="admin/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="admin/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<script src="admin/js/metisMenu.min.js"></script>
<script src="admin/js/custom.js"></script>
<link href="admin/css/custom.css" rel="stylesheet">
<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="admin/admin.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<li>
							<a href="addproduct.php"><i class="fa fa-cogs nav_icon"></i>Add product <span class="fa arrow"></span></a>
						</li>
						
						
						<li>
							<a href="admin/adminreservationsdisplay.php"><i class="fa fa-cogs nav_icon"></i>Reservation Record<span class="fa arrow"></span></a>
						</li>
						<li>
							<a href="admin/adminsignupdisplay.php"><i class="fa fa-cogs nav_icon"></i>Signup Record<span class="fa arrow"></span></a>
						</li>
					<li>
							<a href="admin/adminmessagesdisplay.php"><i class="fa fa-cogs nav_icon"></i>Messages <span class="fa arrow"></span></a>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</nav>
			</div>
		</div>
		<div class="sticky-header header-section ">
			<div class="header-left">
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<div class="logo">
					<a href="admin.php">
						<h1>FOOD</h1>
						<span style="font-size:22.5px;">SHALA</span>
					</a>
				</div><div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
					<div class="clearfix"> </div>
				</div>
				<div class="profile_details"><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> 
							</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1">Add Products</h3>
				 <div class="container-fluid">
        <div class="row">
               
<form method="post" action="process.php" enctype="multipart/form-data">
	
	<div class="row control-group">
  <div class="form-group col-lg-8 col-xs-offset-2">
       <label>Category</label>
      <select name="category" class="form-control">
      <option disabled selected>--Choose Category</option>
      <option value="breakfast">BreakFast</option>
      <option value="brunch">Brunch</option>
	   <option value="Lunch">Lunch</option>
       <option value="snacks">Snacks</option>
		  <option value="dinner">Dinner</option>
          <option value="Drinks">Drinks</option>
		  <option value="fastfood">Fast Food</option>
          <option value="desserts">Desserts</option>
	  </select>
  </div>
</div>
<div class="row control-group">
  <div class="form-group col-lg-8 col-xs-offset-2">
       <label>Product Name</label>
       <input type="text" class="form-control" name="pname">
  </div>
</div>
<div class="row control-group">
  <div class="form-group col-lg-8 col-xs-offset-2">
       <label>Product Price</label>
       <input type="text" class="form-control" name="price">
  </div>
</div>
<div class="row control-group">
  <div class="form-group col-lg-8 col-xs-offset-2">
       <label>Product Description</label>
       <textarea type="text" rows="5" class="form-control" name="desc"></textarea>
  </div>
</div>
<div class="row control-group">
  <div class="form-group col-lg-8 col-xs-offset-2">
       <label>Attach Product Image</label>
       <input type="file" class="form-control" name="path">
  </div>
</div>
<div class="row">
   <div class="form-group col-lg-8 col-xs-offset-2">
       <input type="submit" value="submit"  class="btn btn-default button">
    </div>
</div>
</form>
<div class="container-fluid">
<div class="col-lg-12">
<h2 align="center">The Uploaded Values Are:</h2><br>
<br><br>
<div class="table-responsive">
<table width="60%" align="center" class="table table-bordered">
<tr><th width="7%">id</th><th width="20%">Category</th><th width="20%">name</th><th width="10%">price</th>
<th width="30%">desc</th><th>path</th><th>delete</th><th>edit</th></tr>
<?php
$result=mysqli_query($conn,"SELECT * FROM admin_table");

while($test=mysqli_fetch_array($result))
{
	$id = $test['id'];
	 ?>
<tr>
<td><?php echo $test["id"];?></td>
<td><?php echo $test["category"];?></td>
<td><?php echo $test["pname"];?></td>
<td><?php echo $test["price"];?></td>
<td><?php echo $test["desc"];?></td>
<td><img src="<?php echo $test["path"];?>" height="200px" width="200px"
 alt="Img not found"></td>
<td><a href="admin/delete.php?id=<?php echo $test['id'];?>">Delete</a></td>
<td><a href="admin/edit.php?id=<?php echo $test['id'];?>">edit</a></td>
<?php }?>
</tr>
</table>
</div>
</div>
</div>
	</div>
		<script src="adminjs/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<script src="admin/js/jquery.nicescroll.js"></script>
	<script src="admin/js/scripts.js"></script>
   <script src="admin/js/bootstrap.js"> </script>
</body>
</html>