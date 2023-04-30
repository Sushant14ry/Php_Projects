<?php
	include('connection.php');
	
	session_start();
	if(!isset($_SESSION['USER_ID'])){
		header("location:login.php");
	}

		$fname='';
		$lname='';
		$bio='';
		$gender='';
		$address='';
		$relation='';
		$birthday='';
		$number='';
		$email='';

	$user_id=$_SESSION['USER_ID'];
	if(isset($_POST['save_profile'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$bio=$_POST['bio'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$relation=$_POST['relation'];
		$birthday=$_POST['birthday'];
		$number=$_POST['number'];
		$email=$_POST['email'];

		$update_profile="UPDATE `register` SET fname='$fname',lname='$lname',mobile='$number',email='$email',birthday='$birthday',bio='$bio',gender='$gender',relationship='$relation',address='$address' WHERE  user_id='$user_id' ";
		$run_update=mysqli_query($conn,$update_profile);

		if($run_update){
			?>
			<script>
				alert('update Successfull');
			</script>
			<?php
		}else{
			?>
			<script>
				alert('update failed');
			</script>
			<?php
		}
	}
?>	
<!DOCTYPE html>
<html>
	<head>
		<title>Edit profile</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="instagram.css">
	</head>
		<style type="text/css">
		#topbar li{
			list-style: none;
			display:inline-block;
			font-size: 30px;
			padding: 8px;
			font-weight: bold;
			margin-bottom: 10px;
		}
		#topbar li a{
		color: black;
		}
	</style>
	
	<body>
			<!-- topbar -->
		<div class="container">
			<div class="row">
				<div class="col-md-12 bg-info" id="topbar">
					<li><a href="home.php" style="text-decoration: none;">Home</a></li>
					<li><a href="profile.php" style="text-decoration: none;">Profile</a></li>
					<li><a href="find_people.php" style="text-decoration: none;">Find Friends</a></li>
					<li><a href="message.php" style="text-decoration: none;">Message</a></li>
				</div>
			</div>
		</div><br>
		<!-- End top bar -->
		<div class="container">
			<div class="row">
				<?php
					$bio="SELECT * FROM register";
					$run_bio=mysqli_query($conn,$bio);
					$row=mysqli_fetch_assoc($run_bio);
				?>
				<div class="col-md-8 m-auto">
					<h1 id="edit_profile">Edit Your Profile</h1><hr>
					<form action="edit_profile.php" method="post">
						<label>First Name</label>
						<input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>"><br>
						<label>Last Name</label>
						<input type="text" class="form-control" name="lname" value="<?php echo $row['lname'];?>"><br>
						<label>Write Bio</label>
						<textarea name="bio" class="form-control"><?php echo $row['bio']; ?></textarea><br>
						<label>Relationship</label>
						<select class="form-control" name="relation">
							<option disabled>Select Your Relationship</option>
							<option>Single</option>
							<option>Married</option>
							<option>Widow</option>
							<option>Fall In Love</option>
							<option>It's Complicated</option>
						</select><br>
						<label>Address</label>
						<input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br>
						<label>Number</label>
						<input type="text" name="number" value="<?php echo $row['mobile']; ?>"><br><br>
						<label>Email ID</label>
						<input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
						<label>Register Date</label>
						<p class="form-control"><?php echo $row['reg_date']; ?></p><br>
						<label>Gender</label>
						<select class="form-control" name="gender">
							<option disabled>Select Your Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Call Girl</option>
							<option>Lasbian</option>
							<option>Other</option>
						</select><br>
						<label>Date Of Birth</label>
						<input type="date" class="form-control" name="birthday" value="<?php echo $row['birthday']; ?>">
						<button class="btn btn-success" name="save_profile" id="save_profile">Save Profile</button>
					</form>
				</div>
		
			</div>
		</div>
	</body>
</html>