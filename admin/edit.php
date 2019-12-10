<?php 
include('db.php');

$id =$_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM admin_table WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$pname=$test['pname'] ;
				$price=$test['price'];
				$desc=$test['desc'];
if(isset($_POST['save']))
{	
	$pname_save = $_POST['pname'];
	$price_save = $_POST['price'];
	$desc_save = $_POST['desc'];	
	$res=mysqli_query($conn,"UPDATE  `food`.`admin_table` SET  `pname` =  '$pname_save',`price` =  '$price_save',`desc` =  '$desc_save' WHERE  `admin_table`.`id` =$id;")
				or die(mysqli_error()); 
	header("Location:../addproduct.php");			
}
?>
<?php include('header.php');?>
<div id="page-wrapper">
				<h3 class="title1">Edit Page</h3>
                <form method="post">
                <div class="row control-group">
                   <div class="form-group col-lg-8 col-xs-offset-2">
                     <label>Product Name</label>
                      <input type="text" name="pname"  value="<?php echo $pname ?>"/>
                   </div>
                </div>
                <div class="row control-group">
                   <div class="form-group col-lg-8 col-xs-offset-2">
                     <label>Product Price</label>
                      <input type="text" name="price"  value="<?php echo $price ?>"/>
                   </div>
                </div>
                <div class="row control-group">
                   <div class="form-group col-lg-8 col-xs-offset-2">
                     <label>Description</label>
                      <input type="text" name="desc"  value="<?php echo $desc ?>" >
                   </div>
                </div>
                <div class="row control-group">
                   <div class="form-group col-lg-8 col-xs-offset-2">
           
                     <input type="submit" value="save" name="save"/>
                   </div>
                </div>
                </form>
			</div>
	
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
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
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>