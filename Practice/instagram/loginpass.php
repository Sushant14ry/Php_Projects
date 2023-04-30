<?php
	session_start();

	include('connection.php');

	if(isset($_POST['login'])){

		$username=htmlentities(mysqli_real_escape_string($conn,$_POST['username']));
		$password=htmlentities(mysqli_real_escape_string($conn,$_POST['pass']));

		$select_user="SELECT * FROM register WHERE email='$username' AND password='$password' ";
		$query=mysqli_query($conn,$select_user);
		$check_user=mysqli_num_rows($query);
		$row=mysqli_fetch_assoc($query);

		if($check_user == 1){
			$_SESSION['USER_ID']=$row['user_id'];
			$_SESSION['user_email']= $email;

			echo "<script>window.open('home.php','_self') </script>";
		}else{
			echo "<script>alert('Email and Password is incorrect')</script>";
			echo "<script>window.open('login.php','_self') </script>";
		}


	}

?>
