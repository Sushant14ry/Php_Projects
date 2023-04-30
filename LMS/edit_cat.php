<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->
<div class="container">
	<div class="col-md-6 m-auto bg-secondary p-3">
		<h2 class="text-center font-weight-bolder">Update Categories</h2>
		<form action="#" method="post">
			<?php
				$edit_id=$_GET['id'];
				$show_cat="SELECT * FROM categories WHERE id='$edit_id' ";
				$run_cat=mysqli_query($con,$show_cat);
				while($row=mysqli_fetch_assoc($run_cat)){

			?>
			<label>Categories Name</label>
			<input type="text" class="form-control" value="<?php echo $row['names'] ?>" name="cat_name" required><br>
			<input type="submit" class="form-control bg-primary font-weight-bolder" name="save" value="Update Categories">
		<?php } ?>
		</form>
		<?php
			if(isset($_POST['save'])){

				$cat_name=$_POST['cat_name'];

				$check_cat="SELECT * FROM categories WHERE names='$cat_name' ";
				$check_run=mysqli_query($con,$check_cat);
				if($check_run=mysqli_fetch_assoc($check_run)){
						?>
						<script>
							alert('Categories Already Exist.');
						</script>
						<?php
				}else{					
						$add_cat="UPDATE categories SET names='$cat_name' WHERE id='$edit_id' ";
						$run_cat=mysqli_query($con,$add_cat);
						if($run_cat){
							?>
							<script>
								alert('Categories Update Successfull.');
								window.location.href='manage_cat.php';
							</script>
							<?php
						}else{
							?>
							<script>
								alert('Failed to Update Categories.');
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

