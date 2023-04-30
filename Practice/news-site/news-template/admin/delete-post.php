<?php
	include 'config.php';

	$del_id = $_GET['p_del'];

	$delete = "DELETE FROM post WHERE p_id = '$del_id' ";
	$run = mysqli_query($con,$delete) or die("Query failed to Delete");

	if($run){
		header("location:http://localhost/Practice/news-site/news-template/admin/post.php");
	}
?>