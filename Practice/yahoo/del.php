<?php

	$conn = mysqli_connect('localhost','root','','yahoo') or die("Connection Failed");

	$std =$_POST['id'];

	$sql = "DELETE FROM `students` WHERE id = '$std' ";
	$ress = mysqli_query($conn,$sql);
	if($ress){
		echo 1;
	}else{
		echo 0;
	}
?>