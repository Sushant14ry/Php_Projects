<!DOCTYPE html>
<html>
<head>
	<title>CMS Admin Pannel</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="boot/bootstrap.min.css">
</head>
<body>

	<!-- Start  admin pannel -->
	<div class="container-fluid bg-dark p-3 text-white">

		<h2 style="float: left;">Welcome To Admin Pannel</h2>
		<p align="right" style="font-size: 16px;font-weight: bold;"><a href="" class="btn btn-warning font-weight-bold">Logout</a></p>
	</div>
	<!-- End admin pannel -->


	<div class="container-fluid">
		<div class="row">
			<!-- Side bar Start -->
			<div class="col-md-2 col-lg-2 col-sm-2">
				<div class="container mt-2 ">
					<ul class="list-group text-center text-dark font-weight-bold">
					<a style="text-decoration: none" href="index.php" target="_blank"  class="list-group-item">Visit Website </a>
					<a style="text-decoration: none" href="admin.php" class="list-group-item">Dashboard </a>
					<a style="text-decoration: none"  href="insert.php"  class="list-group-item">Insert Post</a></li>
					<a style="text-decoration: none"  href="#"  class="list-group-item">Pages</a>
					<a style="text-decoration: none"  href="#"  class="list-group-item">Users</a>
					<a style="text-decoration: none"  href="#"  class="list-group-item">Setting</a>
					</ul>
					
				</div>
			</div>
			<!-- Sidebar End -->

			<!-- Run Insert Pannel Start -->
			<div class="col-md-8 col-lg-8 col-sm-8">
				<div class="mt-3 font-weight-bold">
					<div class="container ">
					<label>Post Title</label>
					<input type="text" class="col-md-12" name="">
				</div>
				<div class="container mt-4">
					<label>Post Body</label>
					<textarea class="col-md-12" rows="8"></textarea>
				</div>
				<div class="container mt-3">
					<label>Picture</label>
					<input type="file" class="col-md-12" name="">
				</div>
				<div class="container mt-3">
					<label>Role</label>
					<select class="col-md-12 p-2">
						<option active>Select Role</option>
						<option value="0">Admin</option>
						<option value="1">User</option>
					</select>
				</div>
			 </div> <!-- colum inside Div -->

			</div>  <!-- End Insert Pannel -->

			<!-- Start Sidebar Insert Pannel -->

			<div class="col-md-2 col-lg-2 col-sm-2 font-weight-bold mt-4">
				<div class="container pt-2" align="left"> 
					<a href="admin.php" class="btn btn-dark mt-3 mr-2">Close</a>
					<a href="#" class="btn btn-primary mt-3 ml-4 ">Publish</a>
				</div>
					<br>
					<hr>
				<div class="container mt-2">
					<label>Author</label>
					<input type="text" class="col-md-12" name="">
				</div>	
				<div class="container mt-4">
					<label>Meta Tags</label>
					<input type="text" class="col-md-12" name="">
				</div>
				<div class="container mt-4">
					<label>Meta Description</label>
					<textarea class="col-md-12" rows="4"></textarea>
				</div>

				<div class="container mt-2">
					<label>Location</label>
					<input type="text" class="col-md-12" name="">
					<input type="submit" name="submit" value="Search" class=" mt-2">
				</div>

			</div>

			<!-- Start Sidebar Insert Pannel -->
			
		</div>  <!-- End Of Row -->
		
	</div>  <!-- End Of Container -->

		<!-- Footer Start -->
	 <div class="container-fluid fixed-bottom bg-dark text-white p-3">
        <h2 align="center">Copy Right 2020 @ By : Sushant Chaudhary</h2>
  </div>
<?php  ?>
  <!-- Footer End -->

</body>
</html>

