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

	<!-- Start admin pannel -->
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
					<a style="text-decoration: none" href="admin.php" target="_blank" class="list-group-item">Dashboard </a>
					<a style="text-decoration: none"  href="insert.php"  class="list-group-item">Insert Post</a></li>
					<a style="text-decoration: none"  href="#"  class="list-group-item">Pages</a>
					<a style="text-decoration: none"  href="#"  class="list-group-item">Users</a>
					<a style="text-decoration: none"  href="#"  class="list-group-item">Setting</a>
					</ul>
					
				</div>
			</div>
			<!-- Sidebar End -->

			<!-- Run Admin Pannel Start -->
			<div class="col-md-10 col-lg-10 col-sm-10">
				<div class="container mt-2">
					<table class="table table-striped text-center">
						<tr>
							<th>ID</th>
							<th>Tittle</th>
							<th>Author</th>
							<th>Date</th>
							<th>Photo</th>
							<th>Description</th>
							<th>Operation</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Hlo</td>
							<td>Sushant</td>
							<td>123</td>
							<td>Photo.jpg</td>
							<td>kjsdnzkjfsbkjzkjfnajkz</td>
							<td>
							<a href="" class="btn btn-primary font-weight-bold m-2">Edit</a>
							<a href="" class="btn btn-warning font-weight-bold m-2">Delete</a>
							</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Hlo</td>
							<td>Sushant</td>
							<td>123</td>
							<td>Photo.jpg</td>
							<td>kjsdnzkjfsbkjzkjfnajkz</td>
							<td>
							<a href="" class="btn btn-primary font-weight-bold m-2">Edit</a>
							<a href="" class="btn btn-warning font-weight-bold m-2">Delete</a>
							</td>
						</tr>

						<tr>
							<td>1</td>
							<td>Hlo</td>
							<td>Sushant</td>
							<td>123</td>
							<td>Photo.jpg</td>
							<td>kjsdnzkjfsbkjzkjfnajkz</td>
							<td>
							<a href="" class="btn btn-primary font-weight-bold m-2">Edit</a>
							<a href="" class="btn btn-warning font-weight-bold m-2">Delete</a>
							</td>
						</tr>

					</table>
				</div>
			</div>

			<!-- Run Admin Pannel End -->
			
		</div>  <!-- End Of Row -->
		
	</div>  <!-- End Of Container -->

	<!-- Footer Start -->
	 <div class="container-fluid fixed-bottom bg-dark text-white p-3">
        <h2 align="center">Copy Right 2020 @ By : Sushant Chaudhary</h2>
  </div>

  <!-- Footer End -->

</body>
</html>


<?php


?>