
<!DOCTYPE HTML>
<html>
<head>
<title>foodshala admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords"  />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
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
							<a href="admin.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						<li>
							<a href="../addproduct.php"><i class="fa fa-cogs nav_icon"></i>Add product <span class="fa arrow"></span></a>
						</li>
						
						
						<li>
							<a href="adminreservationsdisplay.php"><i class="fa fa-cogs nav_icon"></i>Reservation Record<span class="fa arrow"></span></a>
						</li>
						<li>
							<a href="adminsignupdisplay.php"><i class="fa fa-cogs nav_icon"></i>Signup Record <span class="fa arrow"></span></a>
						</li>
						
						<li>
							<a href="adminmessagesdisplay.php"><i class="fa fa-cogs nav_icon"></i>Messages <span class="fa arrow"></span></a>
							
						</li>
						</li>
						
					</ul>
					<div class="clearfix"> </div>
				</nav>
			</div>
		</div>
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="admin.php">
						<h1>food</h1>
						<span style="font-size:22.5px;">shala</span>
					</a>
				</div>
				<!--//logo-->
				
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						
							<ul class="dropdown-menu">
							</ul>
						</li>
						
							<ul class="dropdown-menu">
								
							</ul>
						</li>	
						
						
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">
               
					
								<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> 
							</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
</body>
</html>