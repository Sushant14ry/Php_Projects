<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->
<div class="container">
	<div class="col-md-6 m-auto bg-secondary p-3">
		<h2 class="text-center font-weight-bolder">Add New Author</h2>
		<form action="#" method="post">
			<?php
				$edit_id=$_GET['id'];
				$show_cat="SELECT * FROM author WHERE id='$edit_id' ";
				$run_cat=mysqli_query($con,$show_cat);
				while($row=mysqli_fetch_assoc($run_cat)){

			?>
			<label>Author Name</label>
			<input type="text" class="form-control" value="<?php echo $row['name'] ?>" name="auth_name" required><br>
			<input type="submit" class="form-control bg-primary font-weight-bolder" name="save" value="Add Author">
		<?php } ?>
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
						$add_auth="UPDATE author SET name='$auth_name' WHERE id='$edit_id' ";
						$run_auth=mysqli_query($con,$add_auth);
						if($run_auth){
							?>
							<script>
								alert('Author Update Successfull.');
								window.location.href='manage_author.php';
							</script>
							<?php
						}else{
							?>
							<script>
								alert('Failed to Update Author.');
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

