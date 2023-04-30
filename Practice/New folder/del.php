<?php
	include'config.php';

	$std =$_GET['id'];
	$sql= "DELETE FROM simple WHERE id='$std' ";
	$query=mysqli_query($con,$sql);


	header("location:http://localhost/Practice/New%20folder/index.php");
?>