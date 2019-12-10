<?php include('db.php');?>

<?php include('header.php');?>
		<div id="page-wrapper">
			<div class="main-page">
				
				 <div class="container-fluid">
        <div class="row">
               

<div class="container-fluid">
<div class="col-lg-12">
<h2 align="center">Messages Records:</h2><br>
<br><br>
<div class="table-responsive">
<table width="60%" align="center" class="table table-bordered">
<tr><th >id</th><th>name</th><th>email</th><th>Contact</th><th>message</th><th>delete</th></tr>
<?php
$result=mysqli_query($conn,"SELECT * FROM contact");

while($test=mysqli_fetch_array($result))
{
	$id = $test['id'];
	 ?>
<tr>
<td><?php echo $test["id"];?></td>
<td><?php echo $test["name"];?></td>
	
	<td><?php echo $test["email"];?></td>
    <td><?php echo $test["contact"];?></td>
	<td><?php echo $test["msg"];?></td>


	<td><a href="deletemessages.php?id=<?php echo $test['id'];?>">Delete</a></td>
<?php }?>
</tr>
</table>
</div>
</div>
</div>
	</div>
	<!-- Classie -->
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
	<!--scrolling js-->
	<script src="admin/js/jquery.nicescroll.js"></script>
	<script src="admin/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="admin/js/bootstrap.js"> </script>
</body>
</html>