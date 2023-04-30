 <?php
	include('data.php');

	session_start();

	if(!isset($_SESSION["stu_email"])){
		header('location:../login.php');
	}

  ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- external css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- font awesome css -->
	<!-- <link rel="stylesheet" type="text/css" href="css/all.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
	<style type="text/css">
		.fas{
			font-size: 1.5rem;
			margin-right: 12px;
		}
		.fab{
			font-size: 1.5rem;
			margin-right: 12px;
		}
		.plus{
			font-size: 4rem;
		}
	</style>
</head>
<body>
	<!--Start Top Navbar -->
	<nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
		<a href="admin_dash.php" class="navbar-brand col-sm-3 col-md-2 ml-5">E-Learning <small class="text-white">Admin Area</small></a>
		<h2 class="text-white mr-5">Hello <?php echo $_SESSION["stu_name"]; ?></h2>
	</nav>
	<!--End Top Navbar -->

	<div class="container-fluid mb-5" style="margin-top: 40px;">
		<div class="row">
			<!-- Start Side bar -->
			<div class="col-sm-3 col-md-2 bg-light sidebar d-print-none">
				<div class="sidebar-sticky">
					<ul class="nav flex-column font-weight-bold">
						<?php
							$user_email_id=$_SESSION["stu_email"];

							$edit_profile ="SELECT * FROM `singup` WHERE stu_email='$user_email_id' ";
							$run_profile=mysqli_query($con,$edit_profile);
							while($row=mysqli_fetch_assoc($run_profile)){

						?>	
						<li class="nav-item mt-5">
							<img src="<?php echo $row['stu_img']; ?>" width="200px" height="200px" style="border-radius: 50%;">
						</li>
					<?php } ?>
						<li class="nav-item mt-2">
							<a href="profile.php" class="nav-link bg-success text-white"><i class="fas fa-user-circle"></i>Profile</a>
						</li>
						<li class="nav-item">
							<a href="admin_dash.php" class="nav-link"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
						</li>
						<li class="nav-item">
							<a href="admin_course.php" class="nav-link"><i class="fab fa-discourse"></i></i>Courses</a>
						</li>
						<li class="nav-item">
							<a href="lesson.php" class="nav-link"><i class="fab fa-accessible-icon"></i>Lessons</a>
						</li>
						<li class="nav-item">
							<a href="students.php" class="nav-link"><i class="fas fa-user-graduate"></i>Students</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link"><i class="fab fa-sellsy"></i>Sell Report</a>
						</li>
						<li class="nav-item">
							<a href="payment_status.php" class="nav-link"><i class="fas fa-money-bill-wave-alt"></i>Payment Status</a>
						</li>
						<li class="nav-item">
							<a href="contact_us.php" class="nav-link"><i class="fas fa-money-bill-wave-alt"></i>Contact Us</a>
						</li>
						<li class="nav-item">
							<a href="feedback.php" class="nav-link"><i class="fas fa-comments"></i>Feedback</a>
						</li>
						<li class="nav-item">
							<a href="change_pass.php" class="nav-link"><i class="fas fa-lock-open"></i>Change Password</a>
						</li>
						
						<li class="nav-item">
							<a href="logout.php" class="nav-link bg-warning"><i class="fas fa-sign-out-alt"></i>LogOut</a>
						</li>
					</ul>
				</div>
			</div>
				<!-- End Side bar -->
				<!-- Start Center Section -->
				<div class="col-sm-9 mt-5">
				
		

