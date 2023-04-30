
<!DOCTYPE html>
<html>
	<head>
		<title>Neplook Dashoard</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="insta_login.css">
		
	</head>
	<body>
		<div class="container-fluid">
			<div id="top">
				<h2>Welcome To Nep Look</h2>
			</div>
			<div class="row">
				<div class="col-md-6 m-auto" id="register">
					<h2 align="center">Login Form</h2><hr>
					<form action="loginpass.php" method="post">
						<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" placeholder="Enter your Email id" class="form-control" required><br>
						<label>Password</label>
						<input type="Password" name="pass" placeholder="Enter your Password" class="form-control" required><br>
						<button class="form-control btn btn-success" name="login" id="regbtn">Login</button>
						<!-- <a href=""class="form-control btn btn-success" id="regbtn" >Login</a><br> -->
						<a href="forgot.php" id="forgot">Forgot password ? </a><br><br><br>
						<a href="singup.php" id="already">I Don't have an Account ? </a>
					</div>
					</form>
				</div>
		</div>
		<footer style="position: bottom fixed;">
			<p>All Right Reseved by Sushant Chaudhary 2020</p>
		</footer>
	</body>
</html>