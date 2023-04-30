<?php
	
	

	$fist_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];

	$conn = mysqli_connect('localhost','root','','yahoo') or die("Connection Failed");

	$sql = "INSERT INTO students(first_name,last_name) VALUES('$fist_name','$last_name')";
	$result = mysqli_query($conn,$sql);

	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>