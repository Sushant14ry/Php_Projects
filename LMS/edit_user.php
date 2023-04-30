<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->
<div class="col-md-4 m-auto">
	<h2 class="text-center">Update Users</h2>
	<form action="#" method="post">
		<?php
			$user_id=$_GET['id'];
			$show_user="SELECT * FROM register WHERE id='$user_id' ";
			$run_show_user=mysqli_query($con,$show_user);
			while($ress=mysqli_fetch_assoc($run_show_user)){

		?>
		<label>Full Name</label>
		<input type="text" name="fullname" value="<?php echo $ress['fullname'] ?>" class="form-control" required><br>
		<label>Email ID</label>
		<input type="text" name="email" value="<?php echo $ress['email'] ?>" class="form-control" required><br>
		<label>Mobile Number</label>
		<input type="text" name="mobile" value="<?php echo $ress['mobile'] ?>" class="form-control" required><br>
		<input type="submit" name="save" class="btn btn-primary font-weight-bold mb-4"  value="Update User"><br>
	<?php } ?>
	</form>
	<?php
		
		if(isset($_POST['save'])){
			$fullname=$_POST['fullname'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];

			$check_email="SELECT * FROM register WHERE email='$email' OR mobile='$mobile' ";
			$run_email=mysqli_query($con,$check_email);
			if($rows=mysqli_fetch_assoc($run_email)){
			?>
				<script>
				alert("Email Id is Already Exists ! Please Use Another Email Id");
				</script>   
			<?php
		}else{
			$Register="UPDATE register SET fullname='$fullname',email='$email',mobile='$mobile' ";
			$run_reg=mysqli_query($con,$Register);
			if($run_reg){
			?>
			<script>
				alert('Update Successfull');
			</script>
			<?php
			}else{
			?>
			<script>
				alert('Update Failed !!');
			</script>
			<?php
			}
			}
			
			}
			?>
</div>



<!-- Start Footer Section -->
<?php
	include('foot.php');

?>
<!-- Start Footer Section -->
