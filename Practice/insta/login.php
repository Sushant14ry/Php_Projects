<?php
	session_start();

	include('connection.php');

	if(isset($_POST['login'])){

		$email=htmlentities(mysqli_real_escape_string($con,$_POST['email']));
		$pass=htmlentities(mysqli_real_escape_string($con,$_POST['pass']));

		$select_user="SELECT * FROM users WHERE user_email='$email' AND user_pas='$pass' AND status='verified' ";
		$query=mysqli_query($con,$select_user);
		$check_user=mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['USER_ID']='yes';
			$_SESSION['user_email']= $email;

			echo "<script>window.open('home.php','_self') </script>";
		}else{
			echo "<script>alert('Email and Password is incorrect')</script>";
		}


	}

?>
