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
		 		echo "Succesfully upload";
		 }else{
		 	echo "could not upload the file";
		 }

		 $post_insert="INSERT INTO `posts`(`user_id`, `post`, `image`, `post_date`) VALUES ('$user_id','$content','$destination',NOW())";
		 $run_post=mysqli_query($conn,$post_insert);
		 header("location:home.php");	

	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Nep Look Home Page</title>
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
					<li><a href="logout.php" style="text-decoration: none; color: yellow;margin-left: 400%;">LogOut</a></li>
				</div>
			</div>
		</div><br>
		<!-- End top bar -->
		<!-- share post container -->
		<div class="container">
			<div class="col-md-8 m-auto">
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

		<!-- Post News feed  -->

		<div class=" container">
			<h2 id="news_feed">News Feed</h2><br>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-9">
					<?php
						$show_post="SELECT p.post,p.image,p.post_date,r.fname,r.lname  FROM posts p JOIN register r WHERE p.user_id=r.user_id ORDER by RAND()  ";
						$run_post=mysqli_query($conn,$show_post);
						while($rows=mysqli_fetch_assoc($run_post)){

					?>
					<div class="row" id="post_users">
						<div class="col-md-12 ml-1" id="user_border_post">
							<a href="profile.php" style="text-decoration: none;"><img src="profile/parents.jpg" id="profile_img_post"></a>
							<a href="profile.php" style="text-decoration: none;"><h2 id="post_user_name"><?php echo $rows['fname'].' '.$rows['lname']; ?></h2></a><br>
							<hr>
							<p><?php echo $rows['post'] ; ?></p>
							<hr>
							<img src="<?php echo $rows['image'] ; ?>" id="post_img"><br>
							<hr>
							<div id="user_foot_button">
								<a href="" class="btn btn-info">Like</a>
								<a href="cooment_post.php" class="btn btn-dark">Comment</a>
								<a href="cooment_post.php" class="btn btn-success">View Post</a>
								<a href="" class="btn btn-warning">Share</a>
							</div>
						</div><br>
					</div>
				<?php } ?>

				</div>

		</div>
	</div>
	</body>
</html>