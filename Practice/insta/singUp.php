<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>SingUp</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
	<style type="text/css">
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
		#Singup{
			width: 60%;
				border-radius: 30px;
		}

	</style>
<body>
	<div class="row">
		<div class="col-sm-12 ">
			<div class="well  mb-2 ">
				<center><h1 style="color: white;">Nep Look</h1></center>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="main_content">
				<div class="header">
					<h3 style="text-align: center;"><strong>Join The Nep Look</strong></h3><hr>
				</div>
				<div class="l_part">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" name="fist_name" class="form-control" placeholder="First Name" required>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" name="u_pass" class="form-control" placeholder="password" required>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="email" name="u_email" class="form-control" placeholder="Email Adress" required>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
							<select class="form-control" name="u_country" required>
								<option disabled>Select Your Country</option>
								<option>Nepal</option>
								<option>India</option>
								<option>Pakistan</option>
								<option>Bhutan</option>
								<option>Bangladesh</option>
								<option>France</option>
								<option>Germany</option>
							</select>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
							<select class="form-control input-md" name="u_gender" required>
								<option disabled>Select Your Gender</option>
								<option>Male</option>
								<option>Female</option>
								<option>Other</option>
							</select>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calender"></i></span>
							<input type="date" name="u_birthdate" class="form-control input-md" placeholder="" required>
						</div>
						<a href="singin.php" style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip" title="singin">Already Have an Account</a><br><br>
						<center><button id="Singup" class="btn btn-info btn-lg" name="sing_up">SingUp</button></center>
						<?php include('insert_user.php');  ?>
						
					</form>
				</div>
			</div>
			
		</div>
	</div>

</body>
</html>
