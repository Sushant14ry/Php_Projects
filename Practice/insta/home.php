<?php
	include('connection.php');
	
	include('connection.php');
	session_start();
	if(!isset($_SESSION['user_email'])){
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="jquery.js">
		
	</head>
	<style type="text/css">
	body{
		overflow-x: hidden;
	}
	label{
		padding: 7px;
		display: table;
		color: #fff;
	}
	input[type="file"]{
		display: none;
	}
	/*#upload_image_button{
		position: absolute;
		top: 46.8%;
		right: 12.2%;
		min-width: 100px;
		max-width: 100px;
		border-radius: 4px;
		transform: translate(-50%,-50%);
	}*/
	#content{
		width: 70%;
	}
	#btn-post{
		min-width: 25%;
		max-width: 25%;
	}
	#posts{
		width: 400px;
		height: 580px;
		border: 3px solid grey;
		margin: 14px;
		padding: 8px;
	}
	#comment{
		margin-left: 80%;
	}
	</style>
	<body>
		<br><br>
		<div class="row">
			<div id="insert_post" class="col-sm-12">
				<center>
				<form action="home.php" method="post" id="f" enctype="multipart/form-data" >
					<textarea class="form-control" id="content" rows="4" name="content" placeholder="What's in your Mind ? "></textarea><br>
					<label class="btn btn-warning" id="upload_image_button" style="margin-top: 8px;">Select Image
						<input type="file" name="upload_image" size="30">
					</label>
					<button id="btn-post" class="btn btn-success" name="post" >Post</button>
				</form>
				
				</center>
			</div>
		</div><br><br>
			<div class="container">
				<div class="row ">
					<div class="col-sm-2"></div>
					<?php
						$get_post="SELECT p.post_content,p.upload_image,p.post_date,u.fname,u.lname,u.username,u.user_image FROM posts p JOIN users u WHERE p.user_id=u.user_id ORDER BY 1 DESC LIMIT 4";
						$run_post=mysqli_query($con,$get_post);
						while($roww=mysqli_fetch_assoc($run_post)){
					?>
					<div class="col-sm-8 m-3" id="posts">
						<div >
							<a href="profile.php">
								<img  style="float: left; border-radius: 50%;" src="users/<?php echo $roww['user_image']; ?>" alt="profile" class="img-circle" width="120px" height="110px">
							<h2 style="padding-top: 40px; padding-left: 30%"><?php echo $roww['fname'].' '.$roww['lname']; ?></h2>
							</a>
						</div><br><br>
						<div >
							<p><?php echo $roww['post_content']; ?></p>
						</div>
						<div style="text-align: center;">
							<img src="imagepost/<?php echo $roww['upload_image']; ?>" width="500px" height="250px">
						</div><br>
						<button class="btn btn-info" id="comment">Comment</button>
					</div>
					<div class="col-sm-2"></div>
				<?php } ?>

				</div>
			</div>
	</body>
</html>
<?php
		$res=mysqli_query($con,"SELECT * FROM users ");
		$rows=mysqli_fetch_assoc($res);
		$user_id=$rows['user_id'];

		if(isset($_POST['post'])){
			$content =htmlentities($_POST['content']);
			$upload_image=$_FILES['upload_image']['name'];
			$image_tmp=$_FILES['upload_image']['tmp_name'];
			$random_number=rand(1,100);

			move_uploaded_file($image_tmp,"imagepost/$upload_image.$random_number");
			// move_uploaded_file($image_tmp,'images/$upload_image.$random_number');
			$insert="INSERT INTO `posts`(`user_id`, `post_content`, `upload_image`, `post_date`) VALUES ('$user_id','$content','$upload_image.$random_number',NOW())";
			$run=mysqli_query($con,$insert);

			header("location:home.php");
			
		
	}
?>