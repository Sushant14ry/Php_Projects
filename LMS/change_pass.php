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
				<label>Old Password</label>
				<input type="text" class="form-control" name="old_pass" required><br>
				<label>New Password</label>
				<input type="text" class="form-control" name="new_pass" required><br>
				<input type="submit" class="form-control btn btn-primary font-weight-bolder" name="save" value="Update Profile">
			<?php } ?>

			</form>
		</div>
		<?php

			$user_id=$_SESSION["user_id"];
			$user_pass=$_SESSION["stu_pass"];

			if(isset($_POST['save'])){

				$old_pass=$_POST['old_pass'];
				$new_pass=$_POST['new_pass'];

				$update_profile="UPDATE register SET password='$new_pass' WHERE password='$old_pass' AND id='$user_id' ";
				$run_up_profile=mysqli_query($con,$update_profile);
					if($run_up_profile){
						?>
						<script>
							alert('Password Change Successfull.');
							window.location.href='index.php';
						</script>
						<?php  
					}else{
						?>
						<script>
							alert('Old Password Not Matched.');
						</script>
						<?php 
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