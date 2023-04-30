<?php
	include('connection.php');
	
	session_start();
	if(!isset($_SESSION['USER_ID'])){
		header("location:login.php");
	}

	$user_id=$_SESSION['USER_ID'];
	if(isset($_POST['save'])){
		$content=$_POST['content'];
		$file=$_FILES['image'];

		 $file_name=$_FILES['image']['name'];
		 $file_size=$_FILES['image']['size'];
		 $file_tmp=$_FILES['image']['tmp_name'];
		 $file_type=$_FILES['image']['type'];

		 $rand_name =rand(1,999999).$file_name;
		 $destination="post_img/".$rand_name;


		 if(move_uploaded_file($file_tmp,$destination)){
		 		
		 }else{
		 	echo "could not upload the file";
		 }

		 $post_insert="INSERT INTO `posts`(`user_id`, `post`, `image`, `post_date`) VALUES ('$user_id','$content','$destination',NOW())";
		 $run_post=mysqli_query($conn,$post_insert);	
		 header("location:profile.php");

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profile.php</title>
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
			<!-- Cover Page -->
			<div class="row">
				<div class="col-md-12" id="cover_img">
					<img src="post_img/dd.jpg" id="cover_img" >
				</div>
			</div><br>
			<!-- about and post -->
			<div class="row p-3">
				<?php
					$about="SELECT * FROM register";
					$about_run=mysqli_query($conn,$about);
					$roww=mysqli_fetch_assoc($about_run);
				?>
				<div class="col-md-3" id="about_us">
					<br>
					<h1>About Us</h1><hr>
					<h3><strong><?php echo $roww['fname'].' '.$roww['lname']; ?></strong></h3>
					<p>Welcome to nep look</p>
					<p><strong>RelationShip:- </strong><?php echo $roww['relationship'] ; ?></p>
					<p><strong>Lives in :- </strong><?php echo $roww['address'] ; ?></p>
					<p><strong>Registe Date:- </strong>2020-9-11</p>
					<p><strong>Gender:- </strong><?php echo $roww['gender'] ; ?></p>
					<p><strong>Date of Birth:- </strong><?php echo $roww['birthday'] ; ?></p>
					<a href="edit_profile.php?edit_prof=<?php echo $user_id ?>" class="btn btn-success p-2 mb-3">Edit Profile</a>
				</div>
			
				<div class="col-md-9">
					<div class="container">
						<div class="col-md-12 p-3" style="border: 2px solid grey">
							<form action="" method="post" enctype="multipart/form-data">
								<textarea class="form-control" name="content" placeholder="What' on your Mind" rows="6" required></textarea>
								<!-- <textarea class="form-control" name="content" placeholder="What' on your Mind" rows="6"></textarea> -->
								<div id="share_post">
									<label class="btn btn-info">Select Image
										<input type="file" name="image" size="30" required>
										<!-- <input type="file" name="image" size="30"> -->
									</label>
									<label>
										<button class="btn btn-success" name="save" id="posts">Post</button>
									</label>
									
								</div>
							</form>
						</div><hr>
					</div>
					<?php
						$show_post="SELECT p.post_id,p.post,p.image,p.post_date,r.fname,r.lname  FROM posts p JOIN register r WHERE p.user_id=r.user_id ORDER by p.post_id DESC";
						$run_post=mysqli_query($conn,$show_post);
						while($rows=mysqli_fetch_assoc($run_post)){
					?>
					<div class="row" id="post_users">
						<div class="col-md-12 ml-1" id="user_border_post">
							<img src="profile/parents.jpg" id="profile_img_post">
							<h2 id="post_user_name"><?php echo $rows['fname'].' '.$rows['lname']; ?><a href="delete_post.php?del_post=<?php echo $rows['post_id'] ; ?>" class="btn btn-danger" style="margin-left: 30%;">Delete</a></h2>

							<br>
							<hr>
							<p><?php echo $rows['post'] ; ?></p>
							<hr>
							<img src="<?php echo $rows['image'] ; ?>" id="post_img"><br>
							<hr>
							<div id="user_foot_button">
								<a href="" class="btn btn-info">Like</a>
								<a href="cooment_post.phpcooment_post.php" class="btn btn-dark">Comment</a>
								<a href="cooment_post.php" class="btn btn-success">View Post</a>
								<a href="" class="btn btn-warning">Share</a>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			
		</div>
	</body>
</html>