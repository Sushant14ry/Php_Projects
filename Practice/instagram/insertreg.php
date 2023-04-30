<?php
	require('connection.php');
	if(isset($_POST['register'])){

		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$birthday=$_POST['birthday'];
		$gender=$_POST['gender'];
		$pass=$_POST['pass'];

		// $register="INSERT INTO `register`(`fname`, `lname`, `mobile`, `email`, `birthday`, `gender`, `password`) VALUES ('$fname','$lname','$mobile','$email','$birthday','$gender','$pass')";

		$register="INSERT INTO `register`(`fname`, `lname`, `mobile`, `email`, `birthday`, `gender`, `password`, `bio`, `relationship`, `address`, `reg_date`) VALUES ('$fname','$lname','$mobile','$email','$birthday','$gender','$pass','','single','',NOW())";
		$run=mysqli_query($conn,$register);
		if($run){
			echo "<script>alert('Wellcome Now, You are a member of Neplook.')</script>";
			header("location:login.php");
		}else{
			echo "<script>alert('Please Try, Once Again.')</script>";	
		}	
	}
?>