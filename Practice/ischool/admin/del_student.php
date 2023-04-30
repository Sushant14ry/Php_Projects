<?php
	include('data.php');

	$del_stu_id=$_GET['del_stud'];

	$delete_student="DELETE FROM `singup` WHERE stu_id='$del_stu_id' ";
	$run=mysqli_query($con,$delete_student);
	header('location:students.php');

?>