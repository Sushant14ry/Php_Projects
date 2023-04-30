<?php
	include('data.php');
	include('top_admin.php');
?>

<div class="col-sm-6 mt-2 m-auto p-3 bg-secondary">
	<h3 class="text-center text-white bg-dark p-2">Change Password</h3>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<div class="form-group text-white mt-2">
			<label>Email ID</label>
			<input type="text" disabled class="form-control" value="<?php echo $_SESSION["stu_email"]  ?>">
		</div>
		<div class="form-group text-white">
			<label>Password</label>
			<input type="text" class="form-control"  placeholder="Enter Your Current Password" name="pass">
		</div>
		
		<div class="form-group text-white">
			<input type="submit" name="save" class="form-control btn btn-primary font-weight-bold">
	</form>
</div>

<?php
		
	$show_users="SELECT * FROM `singup` ";
	$run=mysqli_query($con,$show_users);
	$roww=mysqli_fetch_assoc($run);
	$Current_pass=$roww['stu_pass'];

	if(isset($_POST['save'])){

		$pass=$_POST['pass'];

		if($Current_pass==$pass){
		?>
		<script>
			window.location.href='conform_pass.php';
		</script>
		<?php
			// header('location:conform_pass.php');
		}else{
			 echo '<div class="alert alert-danger"> password not matched.</div>';
		}
	}

?>

