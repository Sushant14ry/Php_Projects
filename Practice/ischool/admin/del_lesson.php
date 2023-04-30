<?php
	include('data.php');
	$delete_course_id=$_GET['del_course'];

	$delete_course="DELETE FROM `lesson` WHERE lesson_id='$delete_course_id' ";
	$run_del=mysqli_query($con,$delete_course);
	
	header('location:admin_course.php');
?>