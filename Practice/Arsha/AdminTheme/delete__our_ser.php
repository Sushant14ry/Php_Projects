<?php
	include('config.php');

	$del_id = $_GET['id'];

	$delete_con="DELETE FROM `our_service` WHERE id='$del_id' ";
	$run=mysqli_query($conn,$delete_con);
	header('location:our_services.php');

?>