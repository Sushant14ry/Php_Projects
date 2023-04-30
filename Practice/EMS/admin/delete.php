<?php
		include '../conect.php';

	$del_id = $_GET['id'];

	$delete = "DELETE FROM register WHERE id = '$del_id' ";
	$run = mysqli_query($con,$delete);

	if($run){
		header('location:admin_dash.php');
	}else{
		echo "Delete Failed";
	}

?>