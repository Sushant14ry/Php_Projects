<?php include '../auth/auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Pannel</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="../boot/bootstrap.min.css">
</head>
<body>

	<!-- Start top admin pannel -->
	<?php  
		 include 'admin_header.php';
	?>
	<!-- End top admin pannel -->

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-2 col-lg-2 col-12"></div>

				<!-- Register Form Start -->

		<div class="container">
		<div class="row">
			<div class="col-md-2 col-lg-2 col-12"></div>

				<!-- Register Form Start -->

			<div class="col-md-8 col-lg-8 col-12  "> 
				<div class="container  " >
						<div class="row">
							<br><br>
							<div class="col-md-12">
								<form class="inline-form font-weight-bold" method="post" action="insert_user.php">
						<div class="form-group">
							<br>
							<div class="form-heading">
								<h1 align="center"><b>Registeration Form</b></h1>
								</div>
								<!-- <<?php  
								//	if(isset($_SESSION['Sucess'])){
									//	echo $_SESSION['Sucess'];
								//	}
								?> 
 -->							<hr><br>
						<label for="fname">Full Name </label>
						<input type="text" name="fname" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="lname">Email </label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password">Password </label>
						<input type="password" name="pass" class="form-control" id="pass" required>
					</div>
					<div class="form-group">
						<label >Photo</label>
						<input type="file" name="pic" class="form-control" >
					</div>
					<div class="form-group" >
						<label for="gender">Gender</label>
                          <select class="form-control" name="gender" id="gender"  >
                          
                              <option >Male</option>
                              <option >Female</option>
                              <option >Other</option>
                          </select>
					</div>
					<div class="form-group">
						<label for="gender">Department</label>
                          <select class="form-control" name="depart" id="depart" required="">
                          	
                              <option >SEO</option>
                              <option >Web Developer</option>
                              <option >Coder</option>
                          </select>
					</div>
					<div class="form-group" >
						<label for="gender">Role</label>
                          <select class="form-control" name="role" id="role" required>
                          
                              <option value="admin" >Admin</option>
                              <option value="emp" >Employee</option>
                              
                          </select>
					</div>
					<div class="form-group">
						<label for="number">Phone Number </label>
						<input type="number" name="num" placeholder="+977" class="form-control" required>
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary btn-block pt-auto" name="submit">SingUp</button>
					</div>

					   </form>
					</div>
					</div>
				</div>
			</div>   <!-- Register Form Close -->

			<div class="col-md-2 col-lg-2 col-12"></div>

		</div>
	</div>
	
</body>
</html>

<?php
	if(isset($_POST['submit'])){

		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$gender = $_POST['gender'];
		$Depart = $_POST['depart'];
		@$Role = $_POST['role'];
		$created = date('y-m-d');
		$number = $_POST['num'];


		@$photo = $_FILES['pic'];

		$photoname = $photo['name']; 
		$photopath = $photo['tmp_name']; 
		$photo_error = $photo['error']; 

		if($photo_error == 0){
			$des = 'photo/'.$photoname;
			// echo $des;
			move_uploaded_file($photopath, $des);
		}

		$insert = "INSERT INTO register(name,email,password,picture,gender,depart,role,number,created) VALUES('$fname','$email','$password','$des','$gender','$Depart','$Role','$number','$created')";

		$run = mysqli_query($con,$insert);

		if($run){
			// $_SESSION['Sucess'] = "Data is Inserted Sucessfully";
	 		echo "<script>
		alert('Registeration is Sucessfull');
		window.open('admin_dash.php');
	</script>";

	 }else{
	 	echo "<script>
		alert('Registeration is fail !');
	</script>";
	 }

	}

?>

