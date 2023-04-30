<?php
	include 'connection.php';

	if(isset($_POST['sing_up'])){

		$first_name=htmlentities(mysqli_real_escape_string($con,$_POST['fist_name']));
		$last_name=htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
		$pass=htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
		$email=htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
		$country=htmlentities(mysqli_real_escape_string($con,$_POST['u_country']));
		$gender=htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
		$birthday=htmlentities(mysqli_real_escape_string($con,$_POST['u_birthdate']));
		$status="verified";
		$posts="no";
		$newgid=sprintf('%05d',rand(0,999999));
		$username=strtolower($first_name.' '. $last_name . ' ' .$newgid);

		$check_username_query="SELECT username FROM users WHERE user_email='$email' ";
		$run_username=mysqli_query($con,$check_username_query);

		if(strlen($pass) < 9){
			echo "<script>alert('Password must be 9 Characters') </script>";
			exit();
		}

		$check_email="SELECT * FROM users WHERE user_email='$email' ";
		$run_email= mysqli_query($con,$check_email);

		$check=mysqli_num_rows($run_email);
		if($check == 1){
			echo "<script>alert('Email Already Exist, Please Try Using Another Email.) </script>";
			echo "<script>window.open('singUp.php','_self') </script>";
			exit();

		}

		$rand=rand(1,3);
		if($rand == 1)
			$profile_pic="parents.jpg";
		elseif($rand == 2)
			$profile_pic="student.png";
		elseif($rand == 3)
			$profile_pic="user.jpg";

		$insert="INSERT INTO `users`(`fname`, `lname`, `username`, `desc_user`, `relationship`, `user_pas`, `user_email`, `user_country`, `user_gender`, `user_birthdate`, `user_image`, `user_cover`, `user_reg_date`, `status`, `post`, `recovey_account`) VALUES ('$first_name','$last_name','$username','Welcome to Nep Look','....','$pass','$email','$country','$gender','$birthday','$profile_pic','snow.jpg','NOW()','$status','$posts','i want to put ding in the Universe')";
		$query=mysqli_query($con,$insert);
			if($query){
				echo "<script>alert('Well Done $first_name , you are good to go. ') </script>";
				echo "<script>window.open('singin.php','_self') </script>";

			}else{
				echo "<script>alert('Registeration Failed,Please Try Again ! ') </script>";
				echo "<script>window.open('singUp.php','_self') </script>";

			}



	}

?>
