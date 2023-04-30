<?php
	include('data.php');
	include('top_admin.php');
?>

<div class="col-sm-6 mt-2 m-auto p-3 bg-secondary">
	<h3 class="text-center text-white bg-dark p-2">Add New Courses</h3>
	<form action="admin_add_course.php" method="post" enctype="multipart/form-data">
		<div class="form-group text-white mt-2">
			<label>Course Name</label>
			<input type="text" class="form-control"  placeholder="Write Your Course Name" name="course_name">
		</div>
		<div class="form-group text-white">
			<label>Course Description</label>
			<input type="text" class="form-control"  placeholder="Write Your Course Description" name="course_desc">
		</div>
		<div class="form-group text-white">
			<label>Course Author</label>
			<input type="text" class="form-control" placeholder="Write Your Course Author" name="course_author">
		</div>
		<div class="form-group text-white">
			<label>Course Original Price</label>
			<input type="text" class="form-control"  placeholder="Write Your Course Original Price" name="course_oprice">
		</div>
		<div class="form-group text-white">
			<label>Course Sellig Price</label>
			<input type="text" class="form-control"  placeholder="Write Your Course Sellig Price" name="course_sprice">
		</div>
		<div class="form-group text-white">
			<label>Course Picture</label>
			<input type="file" name="course_img" class="form-control-file">
		</div>
		<div class="form-group text-white">
			<input type="submit" name="save" class="form-control btn btn-primary font-weight-bold">
	</form>
</div>
<?php
	include('foot.php');
?>

<?php
	
	if(isset($_POST['save'])){

		$course_name=$_POST['course_name'];
		$course_desc=$_POST['course_desc'];
		$course_author=$_POST['course_author'];
		$course_oprice=$_POST['course_oprice'];
		$course_sprice=$_POST['course_sprice'];
		$course_img= $_FILES['course_img']['name'];
		$course_img_tmp= $_FILES['course_img']['tmp_name'];
		$destination='images/'.$course_img;
		move_uploaded_file($course_img_tmp, $destination);		
        $add_course="INSERT INTO `courses`(`c_name`, `c_desc`, `c_author`, `c_oprice`, `c_sprice`, `c_img`) VALUES ('$course_name','$course_desc','$course_author','$course_oprice','$course_sprice','$destination')";
        $run_course=mysqli_query($con,$add_course);

        	?>
				<script>
					alert('Course Added Successfull.');
					window.location.href='admin_course.php';
				</script>
			<?php

	}

?>
