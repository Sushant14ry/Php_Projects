<?php
	session_start();
	require('connection.php');

	if(isset($_GET['token'])){
		$token=$_GET['token'];

		$update="UPDATE users SET status='active' where token='$token' ";
		$result=mysqli_query($con,$update);

		if($result){
			if(isset($_SESSION['msg'])){
				$_SESSION['msg']="Account Update Succesfully";
				header("location:login.php");
			}else{
				$_SESSION['msg']="You are Logged Out";
				header("location:login.php");
			}
		}

	}

?>