<?php
	include('connection.php');


?>
<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-target=""  data-toggle="collapsed" aria-expanded='false'>
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="home.php" class="navbar-brand">Nep Look</a>
			</div>
			<div class="collapse navbar-collapse" id="#bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<?php
					$users=$_SESSION['user_email'];
					$get_user="SELECT * FROM users WHERE user_email='$users' ";
					$run_user=mysqli_query($con,$get_user);
					$row=mysqli_fetch_array($run_user);

					$user_id=$row['user_id'];
					$user_name=$row['username'];
					$first_name=$row['fname'];
					$last_name=$row['lname'];
					$desc_user=$row['desc_user'];
					$relation_status=$row['relationship'];
					$userpass=$row['user_pas'];
					$user_email=$row['user_email'];
					$user_country=$row['user_country'];
					$user_gender=$row['user_gender'];
					$user_birthday=$row['user_birthdate'];
					$user_image=$row['user_image'];
					$user_cover=$row['user_cover'];
					$recovery_account=$row['recovey_account'];
					$register_date=$row['user_reg_date'];
					$user_posts="SELECT * FROM posts WHERE user_id='$user_id' ";
					$run_post=mysqli_query($con,$user_posts);
					$posts=mysqli_num_rows($run_post);
					?>

					<li><a href="profile.php?<?php echo 'u_id=$user_id' ?>"><?php echo "$first_name"; ?></a></li>
					<li><a href="home.php">Home</a></li>
					<li><a href="home.php">Find People</a></li>
					<li><a href="home.php">Messages</a></li>
					<?php
						ech


					?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span><i class="glyphicon glyphicon-chevron-down"></i></span></a>
					<ul class="dropdown-menu">
						<li>
							<a href="my_post.php?u_id=$user_id">My Post <span class="badge badge-secondary"> $posts</span></a>
						</li>
						<li>
							<a href="edit_profile.php?u_id=$user_id">Edit Account</a>
						</li>
						<li role="seperator" class="divider"></li>
						<li>
							<a href="logout.php">Logout</a>
						</li>
					</ul>
				  </li>
				</ul>
				
			</div>
		</div>
		
	</nav>

</body>
</html>