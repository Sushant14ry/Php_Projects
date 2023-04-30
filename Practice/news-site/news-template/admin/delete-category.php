<?php
	
	include 'config.php';

	$del_id = $_GET['ud'];

	$delete = "DELETE FROM category WHERE cid = '$del_id' ";
	$run = mysqli_query($con,$delete) or die("Delete Query Failed");

	if($run){
       header('location:http://localhost/Practice/news-site/news-template/admin/category.php');
     }
?>