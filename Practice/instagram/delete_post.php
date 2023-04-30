<?php
	include('connection.php');
	$del_post_id=$_GET['del_post'];

	$delete_post="DELETE FROM `posts` WHERE post_id='$del_post_id' ";
	$run_query=mysqli_query($conn,$delete_post);
	header("location:profile.php");

?>