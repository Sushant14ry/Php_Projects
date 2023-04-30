<?php
	include 'back.php';

	if(isset($_POST['save'])){
		$user = $_POST['user'];
		$email = $_POST['email'];
		$number = $_POST['mobile'];
		$comment = $_POST['comment'];

		$insert = "INSERT INTO web(username,email,number,comment) VALUES('$user','$email','$number','$comment')";
	$quary = mysqli_query($con,$insert);
	}

	
?>