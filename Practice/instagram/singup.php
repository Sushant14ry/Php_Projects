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
					<h2 align="center">Register Form</h2><hr>
					<form action="insertreg.php" method="post">
						<label>First name</label>
						<input type="text" name="fname" class="form-control" required><br>
						<label>Last name</label>
						<input type="text" name="lname" class="form-control" required><br>
						<label>Mobile Number</label>
						<input type="text" name="mobile" class="form-control" required><br>
						<label>Email Id</label>
						<input type="email" name="email" class="form-control" required><br>
						<label>Date Of birth</label>
						<input type="date" name="birthday" class="form-control" required><br>
						<label>Gender</label>
						<select class="form-control" name="gender" required>
							<option disabled selected="">Select Gender</option>
							<option>Male</option>
							<option>Female</option>
						</select><br>
						<label>Password</label>
						<input type="text" name="pass" class="form-control" required><br>
						<button class="form-control btn btn-success" name="register" id="regbtn">Register</button>
						<!-- <a href="#" class="form-control btn btn-success" name="register" id="regbtn">Register</a><br> -->
						<a href="login.php" id="already">I have Already an Account</a>
					
					</form>
				</div>
		</div>
		<footer>
			<p>All Right Reseved by Sushant Chaudhary 2020</p>
		</footer>
	</body>
</html>
