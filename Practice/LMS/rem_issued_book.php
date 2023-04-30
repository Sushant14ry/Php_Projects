<?php
	include('config.php');

	$del_id=$_GET['id'];
	$delte_author="DELETE FROM `issue_book` WHERE id='$del_id' ";
	$run_auth=mysqli_query($con,$delte_author);
	header('location:book_issued_detail.php');

?>