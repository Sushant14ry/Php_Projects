<!DOCTYPE html>
<html>
<head>
	<title>Find Post</title>
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
	<div class=" container">
			<h2>Found Post Results</h2><hr><br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-9">
					<div class="row" id="post_users">
						<div class="col-md-12 ml-1" id="user_border_post">
							<a href="profile.php" style="text-decoration: none;"><img src="profile/parents.jpg" id="profile_img_post"></a>
							<a href="profile.php" style="text-decoration: none;"><h2 id="post_user_name">Sushant Chaudhary</h2></a><br>
							<hr>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>
							<hr>
							<img src="post_img/snow.jpg" id="post_img"><br>
							<hr>
							<div id="user_foot_button">
								<a href="" class="btn btn-info">Like</a>
								<a href="cooment_post.php" class="btn btn-dark">Comment</a>
								<a href="cooment_post.php" class="btn btn-success">View Post</a>
								<a href="" class="btn btn-warning">Share</a>
							</div>
						</div><br>

						<div class="col-md-12 ml-1" id="user_border_post">
							<img src="profile/parents.jpg" id="profile_img_post">
							<h2 id="post_user_name">Sushant Chaudhary</h2><br>
							<hr>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>
							<hr>
							<img src="post_img/dd.jpg" id="post_img"><br>
							<hr>
							<div id="user_foot_button">
								<a href="" class="btn btn-info">Like</a>
								<a href="cooment_post.php" class="btn btn-dark">Comment</a>
								<a href="cooment_post.php" class="btn btn-success">View Post</a>
								<a href="" class="btn btn-warning">Share</a>
							</div>
						</div>

					</div>
				</div>

		</div>
	</div>

</body>
</html>