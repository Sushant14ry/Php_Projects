<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Websites</title>

		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">

  		<link rel="stylesheet" type="text/css" href="style.css">

		<!-- bootstrap CDN Link -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >

		<!-- Font Awesom CDN Link -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Js Cdn Link -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="dynamic.php">Sushant Chaudhary</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="dynamic.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Navigation Finished -->

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="4.jpg" class="d-block img-fluid w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="3.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="two.jpg" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	<!-- Carosol Finished -->

	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">About Us</h2>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="3.jpg" class="img-fluid about_img" alt="Responsive image" >
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="display-4">I am Sushant Chaudhary</h2>
					<p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<a href="#" class="btn btn-primary">Read More</a>
				
				</div>
		</div>
		</div>
		
	</section>

	<!-- About Section Finished -->

	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">Our Services</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card">
					  <img class="card-img-top" src="two.jpg" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">Shailesh Chaudhary</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">See Profile</a>
					  </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card" >
					  <img class="card-img-top" src="two.jpg" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">Sushant chaudhary</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">See Profile</a>
					  </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card">
					  <img class="card-img-top" src="two.jpg" alt="Card image">
					  <div class="card-body">
					    <h4 class="card-title">Aaditiya Chaudhary</h4>
					    <p class="card-text">Some example text.</p>
					    <a href="#" class="btn btn-primary">See Profile</a>
					  </div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!-- Our Services Section Finished -->

	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">Our Gallery</h2>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12">
					<img src="two.jpg" class="img-fluid pb-3">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<img src="two.jpg" class="img-fluid pb-3">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<img src="two.jpg" class="img-fluid pb-3">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<img src="two.jpg" class="img-fluid pb-3">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<img src="two.jpg" class="img-fluid pb-3">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<img src="two.jpg" class="img-fluid pb-3">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<img src="two.jpg" class="img-fluid pb-3">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<img src="two.jpg" class="img-fluid pb-3">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<img src="two.jpg" class="img-fluid pb-3">
				</div>


			</div>
		</div>

	</section>	

	<!-- Our Gallery Finished -->

	<section class="my-5">
		<div class="py-5">
			<h2 class="text-center">Contact Form</h2>
		</div>

		<div class="w-50 m-auto">
			<form action="insert.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" autocomplete="off">
				</div>	
				<div class="form-group">
					<label>Email-Id</label>
					<input type="email" name="email" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Mobile</label>
					<input type="text" name="mobile" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Comment</label>
					<textarea class="form-control" rows="5" name="comment"></textarea>
				</div>
				<button type="submit" name="save" class="btn btn-success">Submit</button>
			</form>
		</div>

	</section>	

	<!-- Contact form finished -->

	<footer>
		<div>
			<p class="p-3 bg-dark text-center text-white">Copy Right By Sushant Chaudhary</p>
		</div>
	</footer>

<?php
	include 'back.php';
?>


</body>
</html>