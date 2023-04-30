<?php
	include('data.php');
	include('top_admin.php');
	

?>

<div class="col-sm-6 mt-2 m-auto p-3 bg-secondary">
	<h3 class="text-center text-white bg-dark p-2">Update Courses</h3>
	<form action="#" method="post" enctype="multipart/form-data">
			<?php
				$de_id=$_GET['cid'];

				$c_update="SELECT * FROM `courses` WHERE id='$de_id' ";
				$c_update_run=mysqli_query($con,$c_update);
				if(mysqli_num_rows($c_update_run)>0){
				while($row=mysqli_fetch_assoc($c_update_run)){

						if(isset($_POST['save'])){

						$course_name=$_POST['course_name'];
						$course_desc=$_POST['course_desc'];
						$course_author=$_POST['course_author'];
						$course_oprice=$_POST['course_oprice'];
						$course_sprice=$_POST['course_sprice'];

				        $add_course="UPDATE courses SET c_name='$course_name',c_desc='$course_desc',c_author='$course_author',c_oprice='$course_oprice',c_sprice='$course_sprice' WHERE id=$de_id ";
				        $run_course=mysqli_query($con,$add_course);
				        if($run_course){
				        	?>
				        		<script>
				        			alert('Success');
				        		</script>
				        	<?php
				        }else{
				        	?>
				        		<script>
				        			alert('Fail');
				        		</script>
				        	<?php
				        }
				        header('location:admin_course.php');

					}

			?>

		<div class="form-group text-white mt-2">
			<label>Course Name</label>
			<input type="hidden" class="form-control" value="<?php echo $row['id']; ?>"  placeholder="Write Your Course Name" name="course_name">
			<input type="text" class="form-control" value="<?php echo $row['c_name']; ?>"  placeholder="Write Your Course Name" name="course_name">
		</div>
		<div class="form-group text-white">
			<label>Course Description</label>
			<input type="text" class="form-control" value="<?php echo $row['c_desc']; ?>"  placeholder="Write Your Course Description" name="course_desc">
		</div>
		<div class="form-group text-white">
			<label>Course Author</label>
			<input type="text" class="form-control" value="<?php echo $row['c_author']; ?>" placeholder="Write Your Course Author" name="course_author">
		</div>
		<div class="form-group text-white">
			<label>Course Original Price</label>
			<input type="text" class="form-control" value="<?php echo $row['c_oprice']; ?>"  placeholder="Write Your Course Original Price" name="course_oprice">
		</div>
		<div class="form-group text-white">
			<label>Course Sellig Price</label>
			<input type="text" class="form-control" value="<?php echo $row['c_sprice']; ?>"  placeholder="Write Your Course Sellig Price" name="course_sprice">
		</div>
		<div class="form-group text-white">
			<label>Course Picture</label>
			<img src="<?php echo $row['c_img']; ?>" width="120px">
			<input type="file" name="course_img" value="" class="form-control-file">
		</div>
		<div class="form-group text-white">
			<input type="submit" name="save" value="Update" class="form-control btn btn-primary font-weight-bold">
	
	<?php 	
			}
		} 
	?>
	</form>
</div>
<?php
	include('foot.php');

?>

