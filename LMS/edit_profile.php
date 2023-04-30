<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->

<div class="container mb-3">
	<div class="row">
		<div class="col-md-6 m-auto">
			<h2 class="text-center "> Edit Profile Detail</h2>
			<form action="#" method="post">
				<?php
					$user_id=$_SESSION["user_id"];

					$edit_profile="SELECT * FROM register WHERE id='$user_id' ";
					$run_profile=mysqli_query($con,$edit_profile);
					while($row=mysqli_fetch_assoc($run_profile)){
				?>
				<label>Name</label>
				<input type="text" class="form-control" value="<?php echo $row['fullname'] ?>" name="name"><br>
				<label>Email</label>
				<input type="email" class="form-control" value="<?php echo $row['email'] ?>" name="email"><br>
				<label>Mobile</label>
				<input type="text" class="form-control" value="<?php echo $row['mobile'] ?>" name="mobile"><br>
				<input type="submit" class="form-control btn btn-primary font-weight-bolder" name="save" value="Update Profile">
			<?php } ?>

			</form>
		</div>
		<?php

			if(isset($_POST['save'])){

				$name=$_POST['name'];
				$email=$_POST['email'];
				$mobile=$_POST['mobile'];

				$check_user="SELECT * FROM register WHERE email='$email' OR mobile='$mobile'  ";
				$run_check_user=mysqli_query($con,$check_user);
				if($result=mysqli_fetch_assoc($run_check_user)){
					?>
						<script>
							alert('Email And Mobile Number is Aready Exist.');
						</script>
					<?php	
				}else{
					$update_profile="UPDATE register SET fullname='$name',email='$email' ,mobile='$mobile' WHERE id='$user_id'  ";
					$run_up_profile=mysqli_query($con,$update_profile);
					if($run_up_profile){
						?>
						<script>
							alert('Profile Update Successfull.');
						</script>
						<?php  
					}else{
						?>
						<script>
							alert('Failed to Profile Update.');
						</script>
						<?php 
					}
				}
			}
		
		?>
	</div>
</div>



<!-- Start Footer Section -->
<?php
	include('foot.php');

?>
<!-- Start Footer Section -->