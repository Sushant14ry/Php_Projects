<?php

	include '../conect.php';
	
	$del_rep = $_GET['delr'];

	$delete_reply = "DELETE FROM task_reply WHERE r_id='$del_rep' ";
	$run = mysqli_query($con,$delete_reply);

	if($run){
		echo "Delete Sucess";
		header("location:view_msg.php");
	}else{
		echo "Delete Failed";
	}

?>