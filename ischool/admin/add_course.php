<?php
	include('top_admin.php');
?>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<h2>Add New Course</h2>
			<form action="add_course.php" method="post" enctype="multipart/form-data">
				<label style="color: black !important;">name</label>
				<input type="text" class="form-control" name="name"><br>
				<label style="color: black !important;">desc</label>
				<input type="text" class="form-control" name="desc"><br>
				<label style="color: black !important;">author</label>
				<input type="text" class="form-control" name="author"><br>
				<label style="color: black !important;">oprice</label>
				<input type="text" class="form-control" name="oprice"><br>
				<label style="color: black !important;">sprice</label>
				<input type="text" class="form-control" name="sprice"><br>
				<label style="color: black !important;">image</label>
				<input type="file" class="form-control" name="image"><br>
				<input type="submit" name="save" class="form-control btn btn-primary" value="submit">

			</form>
		</div>
	</div>
</div>
<?php
	include('foot.php');

?>

<?php
	include('data.php');
	if(isset($_POST['save'])){

		$name=$_POST['name'];
		$desc=$_POST['desc'];
		$author=$_POST['author'];
		$oprice=$_POST['oprice'];
		$sprice=$_POST['sprice'];
		$image=$_FILES['image']['name'];
		$image_tmp=$_FILES['image']['tmp_name'];

		$img_fol='images/'.$image;
		move_uploaded_file($image_tmp, $img_fol);

		$insert="INSERT INTO `courses`(`c_name`, `c_desc`, `c_author`, `c_oprice`, `c_sprice`, `c_img`) VALUES ('$name','$desc','$author','$oprice','$sprice','$img_fol')";
		$run=mysqli_query($con,$insert);




	}
?>