<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->

<div class="container mb-3">
	<div class="row">
		<div class="col-md-6 m-auto">
			<h2 class="text-center font-weight-bolder ">View Profile</h2>
			<form action="#" method="post">
				<?php
					$user_id=$_SESSION["user_id"];

					$edit_profile="SELECT * FROM register WHERE id='$user_id' ";
					$run_profile=mysqli_query($con,$edit_profile);
					while($row=mysqli_fetch_assoc($run_profile)){
				?>
				<label>Name</label>
				<input type="text"  disabled class="form-control" value="<?php echo $row['fullname'] ?>" name="name"><br>
				<label>Email</label>
				<input type="email" disabled  class="form-control" value="<?php echo $row['email'] ?>" name="email"><br>
				<label>Mobile</label>
				<input type="text" disabled class="form-control" value="<?php echo $row['mobile'] ?>" name="mobile"><br>
				<a href="edit_profile.php" class="btn btn-primary form-control font-weight-bolder">Edit Profile</a>
			<?php } ?>

			</form>
		</div>
	</div>
</div>



<!-- Start Footer Section -->
<?php
	include('foot.php');

?>
<!-- Start Footer Section -->