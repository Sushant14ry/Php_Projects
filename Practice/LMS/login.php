<?php
  include('config.php');
  session_start();

  if(isset($_SESSION["stu_email"])){
    header('location:index.php');
  }
?>
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
			<div class="col-md-4">
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
				<form  action="" method="post">
					<label>Email ID</label>
					<input type="text" name="email" class="form-control"><br>
					<label>Password</label>
					<input type="password" name="pass" class="form-control"><br>
					<input type="submit" name="save" class="btn btn-primary font-weight-bold"  value="Login"> || <a href="register.php">Not Register Yet ?</a>
				</form>
				<?php
			          if(isset($_POST['save'])){

			            $email=$_POST['email'];
			            $pass=$_POST['pass'];

			           $check="SELECT id,email,fullname,password,mobile,role FROM register WHERE email='{$email}' AND password='{$pass}' ";
			            $run=mysqli_query($con,$check) or die('Query Failed');
			            if(mysqli_num_rows($run)>0){
			              while($row=mysqli_fetch_assoc($run)){
			                session_start();

			                $_SESSION["user_id"]=$row['id'];
			                $_SESSION["stu_name"]=$row['fullname'];
			                $_SESSION["stu_email"]=$row['email'];
			                $_SESSION["stu_pass"]=$row['password'];
			                $_SESSION["stu_mobile"]=$row['mobile'];
			                $_SESSION["stu_role"]=$row['role'];

			                header('location:index.php');

			              }

			            }else{
			              echo '<div class="alert alert-danger mt-2">Username and password are not matched.</div>';
			            }



			          }

			        ?>  
			</div>
		</div>
	</div>


</body>
</html>