<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->
<div class="container">
	<div class="col-md-6 m-auto bg-secondary p-3">
		<h2 class="text-center font-weight-bolder">Add New Author</h2>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
			<label>Author Name</label>
			<input type="text" class="form-control" name="auth_name" required><br>
			<input type="submit" class="form-control bg-primary font-weight-bolder" name="save" value="Add Author">
		</form>
		<?php
			if(isset($_POST['save'])){

				$auth_name=$_POST['auth_name'];

				$check_cat="SELECT * FROM author WHERE name='$auth_name' ";
				$check_run=mysqli_query($con,$check_cat);
				if($check_run=mysqli_fetch_assoc($check_run)){
						?>
						<script>
							alert('Author Already Exist.');
						</script>
						<?php
				}else{					
						$add_auth="INSERT INTO author(name) VALUES('$auth_name')";
						$run_auth=mysqli_query($con,$add_auth);
						if($run_auth){
							?>
							<script>
								alert('Author Added Successfull.');
								window.location.href='manage_author.php';
							</script>
							<?php
						}else{
							?>
							<script>
								alert('Failed to Add Author.');
							</script>
							<?php
						}

				}
				
				

			}
		?>
	</div>
</div><br>


<!-- Start Footer Section -->
<?php
	include('foot.php');

?>
<!-- Start Footer Section -->

