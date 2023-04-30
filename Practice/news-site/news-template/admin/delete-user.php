<?php
	include 'config.php';

  $del_id = $_GET['did'];

  $delete = "DELETE FROM user WHERE id = '$del_id' ";
  $run = mysqli_query($con,$delete) or die("Delete Query Failed");
  if($run){
  	header('location:http://localhost/Practice/news-site/news-template/admin/users.php');
  }else{
  	echo "Failed to Delete User";
  }

	
?>