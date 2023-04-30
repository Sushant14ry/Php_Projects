<?php
	include 'conect.php';

	$del_id = $_GET['del'];

	$delete = "DELETE FROM enquiry WHERE id = '$del_id' ";
	$run = mysqli_query($con,$delete);

	if($run){
		echo "<script>alert('Delete Sucessfull')</script>";
		header('location:http://localhost/Practice/CMSS/admin%20pannel/query.php?query=query');
	}else{
		echo "<script>alert('Fail to Delete')</script>";
	}
?>