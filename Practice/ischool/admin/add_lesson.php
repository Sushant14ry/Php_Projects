<?php
	include('data.php');
	include('top_admin.php');
?>

<div class="col-sm-6 mt-2 m-auto p-3 bg-secondary">
	<h3 class="text-center text-white bg-dark p-2">Add New Lersson</h3>
	<form action="#" method="post" enctype="multipart/form-data">
		<div class="form-group text-white mt-2">
			<label>Lesson Name</label>
			<input type="text" class="form-control"  placeholder="Write Your Lesson Name" name="lesson_name">
		</div>
		<div class="form-group text-white">
			<label>Lesson Description</label>
			<input type="text" class="form-control"  placeholder="Write Your Lesson Description" name="lesson_desc">
		</div>
		
		<div class="form-group text-white">
			<label>Lesson Duration</label>
			<input type="text" class="form-control"  placeholder="Write Your Course Sellig Price" name="lesson_dur">
		</div>
		<div class="form-group text-white">
			<label>Lesson video</label>
			<input type="file" name="lesson_vid" class="form-control-file">
		</div>
		<div class="form-group text-white">
			<input type="submit" name="save" class="form-control btn btn-primary font-weight-bold">
	</form>
</div>
<?php
	include('foot.php');

?>

<?php
	$ids=$_GET['id'];
	if(isset($_POST['save'])){

		$lesson_name=$_POST['lesson_name'];
		$lesson_desc=$_POST['lesson_desc'];
		$lesson_dur=$_POST['lesson_dur'];

		$lesson_vid=$_FILES['lesson_vid']['name'];
		$lesson_vid_tmp=$_FILES['lesson_vid']['tmp_name'];

		$Description="course_vid/".$lesson_vid;
		move_uploaded_file($lesson_vid_tmp, $Description);

		$insert_lession="INSERT INTO lesson(lesson_name,lesson_desc,course_id,lession_duration,lesson_vid) VALUES('$lesson_name','$lesson_desc','$ids','$lesson_dur','$lesson_vid')";
		$run_lesson=mysqli_query($con,$insert_lession);

		if($run_lesson){
			echo "upload";
		}else{
			echo "Filed";
		}
	}

?>