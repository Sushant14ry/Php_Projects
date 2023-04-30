<?php  
	session_start();
	
	if(!isset($_SESSION['username'])){
		header('location:http://localhost/Practice/CMS/admin/login.php');
}else{

?>

<?php
	include 'conect.php';
?>
	<?php include 'top_side_admin.php' ?>

			<!-- Sidebar End -->

			<!-- Run Insert Pannel Start -->
			<div class="col-md-8 col-lg-8 col-sm-8">
				<div class="mt-3 font-weight-bold">
				<form method="post" action="insert_post.php" enctype="multipart/form-data">
				   <div class="container ">
					<label>Post Title</label>
					<input type="text" class="col-md-12" name="title">
				</div>
				<div class="container mt-4">
					<label>Post Body</label>
					<textarea class="col-md-12" rows="8" name="body"></textarea>
				</div>
				<div class="container mt-3">
					<label>Picture</label>
					<input type="file" class="col-md-12" name="photo">
				</div>
				<div class="container mt-3">
					<label>Role</label>
					<select class="col-md-12 p-2" name="role">
						<option active>Select Role</option>
						<option value="0">Admin</option>
						<option value="1">User</option>
					</select>
				</div>


			 </div> <!-- colum inside Div -->

			</div>  <!-- End Insert Pannel -->

			<!-- Start Sidebar Insert Pannel -->

			<div class="col-md-2 col-lg-2 col-sm-2 font-weight-bold mt-4">
				
					<br>
					<div class="container" align="left"> 
					<a href="admin.php" class="btn btn-dark mt-3 mr-2">Close</a>
					<!-- <a href="#" class="btn btn-primary mt-3 ml-4 " name="pub">Publish</a> -->
					<!-- <input type="submit" name="submit" value="Publish" class="btn btn-primary mt-3 ml-4"> -->
					<input type="submit" class="btn btn-primary mt-3" name="submit" value="Publish Now">
				</div>
					<hr>

				<div class="container mt-2">
					<label>Author</label>
					<input type="text" class="col-md-12" name="author">
				</div>	
				<div class="container mt-4">
					<label>Meta Tags</label>
					<input type="text" class="col-md-12" name="meta">
				</div>
				<div class="container mt-4">
					<label>Meta Description</label>
					<textarea class="col-md-12" rows="4" name="des"></textarea>
				</div>

				<div class="container mt-2">
					<label>Location</label>
					<input type="text" class="col-md-12" name="loc">
					<input type="submit" name="submit" value="Search" class=" mt-2">
				</div>

					</form>
				</div>


			<!-- Start Sidebar Insert Pannel -->
			
		</div>  <!-- End Of Row -->
		
	</div>  <!-- End Of Container -->

		<!-- Footer Start -->
	 <div class="container-fluid fixed-bottom bg-dark text-white p-3">
        <h2 align="center">Copy Right 2020 @ By : Sushant Chaudhary</h2>
 	 </div>
<?php  ?>
  <!-- Footer End -->

</body>
</html>
<?php
	
	if(isset($_POST['submit'])){

	 	$title = $_POST['title'];
	 	$Post_body = $_POST['body'];
		$time = date('d/m/y');
	 	$role = $_POST['role'];
	 	$Author = $_POST['author'];
	 	$Meta_tag = $_POST['meta'];
	 	$Des = $_POST['des'];
	 	$Location = $_POST['loc'];
	 	@$file = $_FILES['photo'];

	if($title == '' or $Author == '' or $Post_body =='' ){
			echo "<script>alert('Any Field is Empty')</script>";
			exit();
		}

		$filename = $file['name'];
		$filepath = $file['tmp_name'];
		$file_error = $file['error'];

		if($file_error == 0){
			$des = 'upload/'.$filename;
			// echo $des;
			move_uploaded_file($filepath,$des);

			$post = "INSERT INTO post (title,body,picture,date,role,author,meta_tags,meta_des,Location) VALUES('$title','$Post_body','$des','$time','$role','$Author','$Meta_tag','$Des','$Location')";

			$run = mysqli_query($con,$post);

			if($run){
				echo "<script>alert('Post is Published')</script>";
			}else{
				echo "<script>alert('Failed to Published')</script>";
			}

		}

	}
}  // session Close

?>

