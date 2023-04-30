<!DOCTYPE html>
<html>
	<head>
		<title>Find Post</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="instagram.css">
	</head>
	<body>
		
		<div class=" container">
			<h2>View post</h2><hr><br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-9">
					<div class="row" id="comment_post">
						<div class="col-md-12 col-sm-12l ml-1" id="comment_border_post">
							<a href="profile.php" style="text-decoration: none;"><img src="profile/parents.jpg" id="profile_img_comment"></a>
							<a href="profile.php" style="text-decoration: none;"><h4 id="comment_user_name">Sushant Chaudhary</h4></a>
							<hr>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</p>
							<hr>
							<img src="post_img/snow.jpg" id="comment_img">
							<hr>
							<div id="user_foot_button">
								<a href="" class="btn btn-info">Like</a>
								<a href="" class="btn btn-warning">Share</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Show user comments -->
		<div class="container" >
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-7" id="show_user_comment">
					<a href="profile.php" style="text-decoration: none;"><img src="profile/parents.jpg" id="profile_img_comment"></a>
					<a href="profile.php" style="text-decoration: none;"><h4 id="comment_user_name">Sushant Chaudhary</h4></a>
					<hr>
					<p>Nice Pic,awesome Pic</p>
				</div>
				
			</div><br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-7" id="show_user_comment">
					<a href="profile.php" style="text-decoration: none;"><img src="profile/parents.jpg" id="profile_img_comment"></a>
					<a href="profile.php" style="text-decoration: none;"><h4 id="comment_user_name">Sushant Chaudhary</h4></a>
					<hr>
					<p>Nice Pic,awesome Pic</p>
				</div>
				
			</div><br>

		</div>
			<!-- User comment to the post -->
			<footer style="position: bottom fixed; margin-bottom: 3%;">
				<div class="container" id="footer_section">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-9">
						<div id="footer_section">
							<textarea class="form-control" id="single_comment"></textarea>
						</div>
						<button class="btn btn-info" id="comment_btn">Comment</button>
					</div>
				</div>
			</div>
			</footer>
			
		</body>
	</html>