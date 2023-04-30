<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- external css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- font awesome css -->
	<!-- <link rel="stylesheet" type="text/css" href="css/all.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<!--Start Top Navbar -->
	<nav class="navbar navbar-dark  p-0 shadow" style="background-color: #225470;">
		<a href="admin_dash.php" class="navbar-brand col-sm-3 col-md-2 ml-5">Library Management System(LMS)</a>
		<h2 class="text-white mr-5"><span><a href="#" style="text-decoration: none;">Admin</a></span> || <span><a href="#" style="text-decoration: none;">Register</a></span></h2>
	</nav>
	<div class="container-fluid mt-5">
		<div class="bg-warning">
			<marquee><h2>This is Library Management System, Library Opens at 8:00 AM and Close at 8:00 PM</h2> </marquee>
		</div>
	</div>
	<!--End Top Navbar -->


	<div class="container mt-3">
		<div class="row">
			<div class="col-md-4 mt-5">
				<h2>Library Timing</h2>
				<ul class="l_table ml-5" style="margin-left: 10%;">
					<li>Opening: 8:00 AM</li>
					<li>Closing: 8:00 PM</li>
					<li>(Sunday Off)</li>
				</ul>
				<h2>What We Provide ?</h2>
				<ul class="l_table ml-5" style="margin-left: 10%;">
						<li>Full Furniture</li>
						<li>Free Wifi</li>
						<li>News Papers</li>
						<li>Discussion Room</li>
						<li>RO Water</li>
						<li>Peacefull Enviroment</li>
				</ul >
			</div>
			<div class="col-md-8">
				<h2 class="text-center">User Login Form</h2>
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					<label>Full Name</label>
					<input type="text" name="fullname" class="form-control" required><br>
					<label>Email ID</label>
					<input type="text" name="email" class="form-control" required><br>
					<label>Mobile Number</label>
					<input type="text" name="mobile" class="form-control" required><br>
					<label>Password</label>
					<input type="Password" name="pass" class="form-control" required><br>
					<input type="submit" name="save" class="btn btn-primary font-weight-bold"  value="SingUP"> || <a href="login.php">Already Have an Account !!</a>
				</form>
				<?php
					include('config.php');

					if(isset($_POST['save'])){
						$fullname=$_POST['fullname'];
						$email=$_POST['email'];
						$mobile=$_POST['mobile'];
						$pass=$_POST['pass'];

						$check_email="SELECT* FROM register WHERE email='$email' ";
						$run_email=mysqli_query($con,$check_email);
						if($rows=mysqli_fetch_assoc($run_email)){
							 ?>
						      <script>
						       alert("Email Id is Already Exists ! Please Use Another Email Id");
						    </script>
						      <?php
						  }else{
						  		$Register="INSERT INTO register(fullname,email,mobile,password,role) VALUES('$fullname','$email','$mobile','$pass',0) ";
								$run_reg=mysqli_query($con,$Register);
								if($run_reg){
									?>
									<script>
										alert('Registeration Successfull');
										window.location.href='login.php';
									</script>
									<?php
								}else{
									?>
									<script>
										alert('Registeration Failed !!');
									</script>
									<?php
								}
						  }

						
					}

				?>
			</div>
		</div>
	</div>


</body>
</html>