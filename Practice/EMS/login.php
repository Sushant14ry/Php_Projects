
<?php  
	include 'conect.php';
?>
<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="boot/bootstrap.min.css">
</head>
<body>
		<header>
	<nav class="navbar navbar-inverse bg-dark fixed-top p-3">
      <div class="container-fluid">
        <div class="navbar-header left" style="text-decoration: none;">
          <a href="#"><h2>EMS</h2></a>
         
        </div>
  <!-- Brand Name End -->

  <!-- Navbar Menu -->    
      <ul class="nav nav-navbar justify-content-end right">
        <li class="nav-item"><a class="nav-link" href="#">Gmail</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
      </ul>
  </div>
</nav>
	</header>
	<br><br>

<!-- Top Menu Bar Close -->

	<div class="container">
		<div class="row">
			<div class="col-md-2 col-lg-2 col-12"></div>

				<!-- Register Form Start -->
				<!-- Register Form Start -->

			<div class="col-md-8 col-lg-8 col-12 "> 
				<div class="container bordered " style="padding: 20px;">
						<div class="row">
							<br><br>
							<div class="col-md-12">
								<form class="inline-form font-weight-bold" method="post" action="login.php">
						<div class="form-group">
							<br>
							<div class="form-heading">
								<h1 align="center"><b>Login Form</b></h1>
								</div>
								<hr><br>
								<?php

					if(isset($_SESSION['error'])){
						echo $_SESSION['error'];
						unset($_SESSION['error']);
					}			
					if(isset($_SESSION['Success'])){
						echo $_SESSION['Success'];
						unset($_SESSION['Success']);
					}
					
								  ?>
					<div class="form-group">
						<label for="lname">Email </label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password">Password </label>
						<input type="password" name="pass" class="form-control" required>
					</div>
					
					
					<div class="form-group">
						<button class="btn btn-primary btn-block pt-auto" name="submit">Login</button>
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
	if(isset($_POST['email'])){

		$email = $_POST['email'];
		$password = $_POST['pass'];

		$checked = " SELECT * FROM register WHERE email = '$email' AND password ='$password' ";
		$run = mysqli_query($con,$checked);
		$row = mysqli_fetch_array($run);

		if(mysqli_num_rows($run) > 0){

			$session_id = session_id();
			$_SESSION['auth'] = $session_id;
			$_SESSION['user_id'] = $row['id'];

			$role = $row['role'];

			if($role == 'admin'){
				header('location:admin/admin_dash.php');
			$_SESSION['Success'] = "Login Successfull";
			// echo "Login Success";
			}elseif($role == 'emp'){
				header('location:emp/emp_dash.php');
			}else{
				$_SESSION['error'] = "Login Failed";
			header('location:login.php');
		}  	 // admin and employee login clos

		} 	 // mysqli_num_rows close
	}			//  isset condition close
?>