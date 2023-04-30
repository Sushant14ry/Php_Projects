<?php
	include 'conect.php';
	
	$del_id = @$_GET['id'];

	$del = "DELETE FROM post WHERE id = '$del_id' ";

	$run = mysqli_query($con,$del);

	if($run){
		echo "<script>alert('Delete Sucessfull')</script>";
		header('location:admin_index.php');
	}else{
		echo "<script>alert('Delete Failed')</script>";
	}
?>