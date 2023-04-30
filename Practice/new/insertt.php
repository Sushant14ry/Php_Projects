<?php
	include 'conect.php';

	extract($_POST);

	if(isset($_POST['save'])){

		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$q = "INSERT INTO `incrud`(`username`, `password`) VALUES ('$user','$pass')";
		$result = mysqli_query($conn,$q);
		header('location:insert.php');
	}

?>