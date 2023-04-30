<?php
	include 'config.php';

	$post_id = $_GET['id'];
	$cat_id = $_GET['catid'];

	$img = "SELECT * FROM post";
	$res = mysqli_query($conn,$img) or die("Query Failed : Select");
	$row = mysqli_fetch_assoc($res);
	
	unlink("upload/".$row['post_img']); //kisi vi file ko folder se delete karna chahate hai

	$sql = "DELETE FROM post WHERE post_id= '{$post_id}';";
	$sql .="UPDATE category SET post = post - 1 WHERE category_id = '{$cat_id}'";

	if(mysqli_multi_query($conn,$sql)){
		header("location:http://localhost/Practice/news-template/admin/post.php");
	}else{
		echo "Query Failed";
	}


?>