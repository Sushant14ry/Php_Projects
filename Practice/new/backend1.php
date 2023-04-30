<?php
	include 'conect.php';

	extract($_POST);

	if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile'])){

		$query = "INSERT INTO `crudtable`(`fname`, `lname`, `email`, `mobile`) VALUES('$firstname','$lastname','$email','$mobile')";
		$result = mysqli_query($conn,$query);

		if($result){
			echo "t";
		}else{
			echo "F";
		}


	}
?>