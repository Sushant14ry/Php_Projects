<?php include 'header.php' ;   ?>
	<div class="admin-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="admin-heading">Website Settings</h1>
				</div>
				<div class="col-md-offset-3 col-md-6">
			<?php
	            include 'config.php';

	            $sql = "SELECT * FROM settings";
	                  
	             $result = mysqli_query($conn,$sql) or die('Query Failed');
	                  if(mysqli_num_rows($result) > 0 ){
	                   while($rows = mysqli_fetch_assoc($result)){   

	       	 ?>

					<!-- Form Start -->
					<form action="save-setting.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="website name">Website name</label>
							<input type="text" name="website_name" value="<?php echo $rows['name'] ?>" class="form-control" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="website logo">Website Logo</label>
							<input type="file" name="logo">
							<img src="images/<?php echo $rows['logo']; ?>">
							<input type="hidden" name="old_logo" value="<?php echo $rows['logo'] ?>" >
						</div>
						<div class="form-group">
							<label for="website_Footer">Footer Description</label>
							<textarea name="web_footer" rows="5" class="form-control" required><?php echo $rows['foot_desc'] ?></textarea>
						</div>
						<input type="submit" class="btn btn-primary" name="submit
						" value="Save">
					</form>

					<!-- form Tag Close -->
				<?php  } } ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	<br>
