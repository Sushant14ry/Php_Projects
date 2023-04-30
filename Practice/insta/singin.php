
<!DOCTYPE html>
<html>
<head>
	<title>SingIn</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main_content{
			width: 50%;
			height: 95%;
			margin: 10px auto;
			background-color: #fff;
			border: 2px solid #e6e6e6;
			padding: 40px 50px;
		}
		.header{
			border: 0px solid #000;
			margin-bottom: 5px;
		}
		.well{
		background-color: #187FAB; 
		}
		#Singin{
			width: 60%;
			border-radius: 30px;
		}
		.overlap-text{
			position: relative;
		}
		.overlap-text a{
			position: absolute;
			top: 8px;
			right: 10px;
			font-size: 14px;
			text-decoration: none;
			

		}
</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well p-4 mb-2 ">
				<center><h1 style="color: white;">Nep Look</h1></center>
			</div>
		</div>
	</div>
<!-- -------------------------- -->
	<div class="row">
		<div class="col-sm-12">
			<div class="main_content">
				<div class="header">
					<h3 style="text-align: center;">Login to Nep Look</h3>
				</div>
				<div class="l_part">
					<form action="" method="post">
						<input type="email" name="email" placeholder="Email Adress" required class="form-control input-md"><br>
						<div class="overlap-text">
							<input type="password" name="pass" placeholder="Enter password" required class="form-control input-md" ><br>
							<a style="text-decoration: none; float: right;color: #187FAB;" data-toggle="tooltip" title="Reset password" href="forgot_password.php">Forgot Password ?</a>
						</div>
						<a style="text-decoration: none; float: right;color: #187FAB;" data-toggle="tooltip" title="Reset password" href="singUp.php">Don't Have an Account</a><br><br>

						<center><button id="Singin" class="btn btn-info btn-lg" name="login">Login</button></center>
						<?php  include('login.php'); ?>
				
					</form>
				</div>
				
			</div>
		</div>
	</div>




</body>
</html>