<?php
	include('config.php');

	$del_id = $_GET['id'];

	$delete_con="DELETE FROM `setting` WHERE id='$del_id' ";
	$run=mysqli_query($conn,$delete_con);
	header('location:show_setting.php');

?>