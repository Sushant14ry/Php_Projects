<?php
	
	include '../conect.php';

	if(isset($_REQUEST['update'])){

		$user_id = $_GET['id'];

		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$gender = $_POST['gender'];
		$Depart = $_POST['depart'];
		$Role = $_POST['role'];
		$number = $_POST['num'];


		$photo = $_FILES['pic'];

		$photoname = $photo['name']; 
		$photopath = $photo['tmp_name']; 
		$photo_error = $photo['error']; 

		if($photo_error == 0){
			$des = 'photo/'.$photoname;
		
			move_uploaded_file($photopath, $des);
		}

		$update = "UPDATE register SET name ='$fname' ,email = '$email',picture ='$des',gender ='$gender',depart='$Depart',role='$Role',number='$number' WHERE id='$user_id' ";

		$run = mysqli_query($con,$update);

		if($run){
			
	 		echo "<script>
		alert('Update Sucessfull');
	</script>";

	header('location:admin_dash.php');

	 }else{
	 	echo "<script>
		alert('Update fail !');
	</script>";
	 }

	}
?>

