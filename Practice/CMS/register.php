

<?php
	include 'conect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="boot/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-lg-2 col-12"></div>

				<!-- Register Form Start -->

			<div class="col-md-8 col-lg-8 col-12 "> 
				<div class="container bordered " style="padding: 20px;">
						<div class="row">
							<br><br>
							<div class="col-md-12">
								<form class="inline-form font-weight-bold" method="post" action="register.php">
						<div class="form-group">
							<br>
							<div class="form-heading">
								<h1 align="center"><b>Registeration Form</b></h1>
							</div><hr><br>
						<label for="fname">Full Name </label>
						<input type="text" name="fname" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="lname">Username </label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password">Password </label>
						<input type="password" name="pass" class="form-control" required>
					</div>
					<div class="form-group">
						<label >Photo</label>
						<input type="file" name="Photo" class="form-control"  required>
					</div>
					<div class="form-group">
						<label for="gender">Gender</label>
                          <select class="form-control" name="gender"  >
                          	<option active>Select</option>
                              <option >Male</option>
                              <option >Female</option>
                              <option >Other</option>
                          </select>
					</div>
					<div class="form-group">
						<label for="number">Phone Number </label>
						<input type="number" name="num" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="remember" > <input type="checkbox" id="remember">  Remember me </label>
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

		$fullname = $_POST['fname'];
		$username = $_POST['user'];
		$password = md5($_POST['pass']);
		$gender = $_POST['gender'];
	 	$number = $_POST['num'];
	 	$Photo = $_FILES['Photo'];


	 	$filename = $Photo['name'];
	 	$filepath = $Photo['tmp_name'];
	 	$fileError = $Photo['Error'];

	 	if($fileError == 0){
	 		$des = 'userload/'.$filename;

	 		move_uploaded_file($filepath, $des);
	 	}


	 $insert = "INSERT INTO cms(fullname,username,password,picture,gender,number) VALUES('$fullname','$username','$password','$des','$gender','$number')";
	 $run = mysqli_query ($con,$insert);

	 if($run){
	 		echo "<script>
		alert('Registeration is Sucessfull');
	</script>";
	 }else{
	 	echo "<script>
		alert('Registeration is fail !');
	</script>";
	 }

	}


?>


