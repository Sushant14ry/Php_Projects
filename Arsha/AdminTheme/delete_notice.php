<?php
	include('config.php');

	$del_id = $_GET['id'];

	$delete_con="DELETE FROM `notice` WHERE id='$del_id' ";
	$run=mysqli_query($conn,$delete_con);
	header('location:notice.php');
?>