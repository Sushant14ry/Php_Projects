<?php
	include 'conect.php';
	
	$user_id = @$_GET['del'];

	$del = "DELETE FROM cms WHERE id = '$user_id' ";

	$run = mysqli_query($con,$del);

	if($run){
		echo "<script>alert('Delete Sucessfull')</script>";
		header('location:users.php');
	}else{
		echo "<script>alert('Delete Failed')</script>";
	}
?>