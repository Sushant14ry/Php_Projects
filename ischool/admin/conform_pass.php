<?php
	include('data.php');
	include('top_admin.php');
?>

<div class="col-sm-6 mt-2 m-auto p-3 bg-secondary">
	<h3 class="text-center text-white bg-dark p-2">New Password</h3>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<div class="form-group text-white">
			<label>New Password</label>
			<input type="text" class="form-control"  placeholder="Enter New Password" name="new_pass">
		</div>
		
		<div class="form-group text-white">
			<input type="submit" name="save" class="form-control btn btn-primary font-weight-bold">
	</form>
</div>

<?php
	$user_email=$_SESSION["stu_email"];
	
	if(isset($_POST['save'])){

		$new_pass=$_POST['new_pass'];

		$change_pass="UPDATE singup SET stu_pass='$new_pass' WHERE stu_email='{$user_email}' ";
		$save_pass=mysqli_query($con,$change_pass);

		?>
		<script>
			alert('Password Successfull Changed');
			window.location.href='admin_dash.php';
		</script>
		<?php

		


	}

?>