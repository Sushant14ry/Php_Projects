<?php
	include('config.php');

	$del_id=$_GET['id'];
	$delte_author="DELETE FROM `register` WHERE id='$del_id' ";
	$run_auth=mysqli_query($con,$delte_author);
	header('location:users.php');

?>