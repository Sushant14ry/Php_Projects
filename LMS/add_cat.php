<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->
<div class="container">
	<div class="col-md-6 m-auto bg-secondary p-3">
		<h2 class="text-center font-weight-bolder">Add New Categories</h2>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
			<label>Categories Name</label>
			<input type="text" class="form-control" name="cat_name" required><br>
			<input type="submit" class="form-control bg-primary font-weight-bolder" name="save" value="Add Categories">
		</form>
		<?php
			if(isset($_POST['save'])){

				$cat_name=$_POST['cat_name'];

				$check_cat="SELECT * FROM categories WHERE name='$cat_name' ";
				$check_run=mysqli_query($con,$check_cat);
				if($check_run=mysqli_fetch_assoc($check_run)){
						?>
						<script>
							alert('Categories Already Exist.');
						</script>
						<?php
				}else{					
						$add_cat="INSERT INTO categories(name) VALUES('$cat_name')";
						$run_cat=mysqli_query($con,$add_cat);
						if($run_cat){
							?>
							<script>
								alert('Categories Added Successfull.');
								window.location.href='manage_cat.php';
							</script>
							<?php
						}else{
							?>
							<script>
								alert('Failed to Add Categories.');
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

