<?php include '../auth/auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Pannel</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="../boot/bootstrap.min.css">
</head>
<body>

	<!-- Start top admin pannel -->
	<?php  
		 include 'admin_header.php';
	?>
	<!-- End top admin pannel -->

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-2 col-lg-2 col-12"></div>

				<!-- Register Form Start -->

		<div class="container">
		<div class="row">
			<div class="col-md-2 col-lg-2 col-12"></div>

				<!-- Register Form Start -->

			<div class="col-md-8 col-lg-8 col-12 "> 
				<div class="container bordered " >
						<div class="row">
							<br><br>
							<div class="col-md-12">
								<form class="inline-form font-weight-bold" method="post" action="edit.php">
						<div class="form-group">
							<br>
							<div class="form-heading">
								<h1 align="center"><b>Edit User Form</b></h1>
								</div>
								<!-- <<?php  
								//	if(isset($_SESSION['Sucess'])){
									//	echo $_SESSION['Sucess'];
								//	}
								?> 
 -->							<hr><br>
 						<?php  
 							$user_id = @$_GET['id'];
 							$edit = "SELECT * FROM register WHERE id ='$user_id' ";
 							$res = mysqli_query($con,$edit);
 							$rows = mysqli_fetch_array($res);
 						?>
 						<input type="hidden" name="user_id" value="<?php echo $user_id  ?>">
						<label for="fname">Full Name </label>
						<input type="text" name="fname" class="form-control" value="<?php echo $rows['name']  ?>" required>
					</div>
					<div class="form-group">
						<label for="lname">Email </label>
						<input type="email" name="email" class="form-control" value="<?php echo $rows['email']  ?>" required>
					</div>
					<div class="form-group">
						<label >Photo</label>
						<input type="file" name="pic" class="form-control" value="<?php echo $rows['picture']  ?>" >
					</div>
					<div class="form-group" >
						<label for="gender">Gender</label>
                          <select class="form-control" name="gender" value="<?php echo $rows['gender']  ?>" id="gender"  >
                          	<option active>Select</option>
                              <option >Male</option>
                              <option >Female</option>
                              <option >Other</option>
                          </select>
					</div>
					<div class="form-group">
						<label for="gender">Department</label>
                          <select class="form-control" name="depart" value="<?php echo $rows['depart']  ?>" id="depart" required="">
                          	<option active>Select Department</option>
                              <option >SEO</option>
                              <option >Web Developer</option>
                              <option >Coder</option>
                          </select>
					</div>
					<div class="form-group" >
						<label for="gender">Role</label>
                          <select class="form-control" name="role" value="<?php echo $rows['role']  ?>" id="role" required>
                          	<option active>Select Role</option>
                              <option value="admin" >Admin</option>
                              <option value="emp" >Employee</option>
                              
                          </select>
					</div>
					<div class="form-group">
						<label for="number">Phone Number </label>
						<input type="number" value="<?php echo $rows['number']  ?>" name="num" placeholder="+977" class="form-control" required>
					</div>
					
					<div class="form-group">
						<button class="btn btn-primary btn-block pt-auto" name="update">Update</button>
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

