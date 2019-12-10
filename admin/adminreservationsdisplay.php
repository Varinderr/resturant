<?php include('db.php');?>
<?php include('header.php');?>
		<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1">users</h3>
				 <div class="container-fluid">
        <div class="row">
               
<form method="post" action="admingalleryprocess.php" enctype="multipart/form-data">
</form>
<div class="container-fluid">
<div class="col-lg-12">
<h2 align="center">The Uploaded Values Are:</h2><br>
<br><br>
<div class="table-responsive">
<table width="60%" align="center" class="table table-bordered">
<tr><th >id</th><th>First name</th><th>Last Name</th><th>date</th><th>time</th><th>Mobile</th><th>email</th><th>delete</th></tr>
<?php
$result=mysqli_query($conn,"SELECT * FROM reservation");

while($test=mysqli_fetch_array($result))
{
	$id = $test['id'];
	 ?>
<tr>
<td><?php echo $test["id"];?></td>
<td><?php echo $test["fname"];?></td>
<td><?php echo $test["lname"];?></td>
	<td><?php echo $test["rdate"];?></td>
	<td><?php echo $test["time"];?></td>
<td><?php echo $test["mobile"];?></td>
	<td><?php echo $test["email"];?></td>
	<td><a href="deletereservations.php?id=<?php echo $test['id'];?>">Delete</a></td>
<?php }?>
</tr>
</table>
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