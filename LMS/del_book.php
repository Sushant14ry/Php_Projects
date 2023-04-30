<?php
	include('config.php');

	$del_id=$_GET['id'];
	$delte_author="DELETE FROM `book` WHERE book_id='$del_id' ";
	$run_auth=mysqli_query($con,$delte_author);
	header('location:manage_book.php');

?>