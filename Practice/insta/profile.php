<?php
	include('connection.php');
	session_start();
	if(!isset($_SESSION['user_email'])){
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
		$users=$_SESSION['user_email'];
		$get_user="SELECT * FROM users WHERE user_email='$users' ";
		$run_user=mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);
				$user_name=$row['username'];
				$user_id=$row['user_id'];
		?>
		<title><?php echo "$user_name "; ?></title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="jquery.js">
		<link rel="stylesheet" type="text/css" href="home_style.css">


	</head>
	<style>
		#cover-img{
			height: 400px;
			width: 100%;
		}
		#profile-img{
			position: absolute;;
			top: 150px;
			left: 40px;
			
		}
		#profile-img img{
			position: absolute;
			border-radius: 50%;
			border: 2px solid white;
		}
		#update_profile{
			position: relative;
			top: 140px;
			cursor: pointer;
			left: 93px;
			border-radius: 4px;
			background-color: rgba(0,0,0,0.1);
			transform: translate(-50%,-50%);
		}
		#button_profile{
			position:absolute;
			top: 180%;
			left: 90%; 
			cursor: pointer;
			transform: translate(-50%,50%);
		}
	#posts{
		width: 600px;
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
	<div class="row">
		<div class="col-sm-2">
			
		</div>
		<div class="col-sm-8">
			<div>
				<div border="2px solid black"><img id="cover-img" class="img-rounded" src="cover/<?php echo $row['user_cover'];   ?>" alt="cover"></div>
				<form action="profile.php?u_id=$user_id" method="post" enctype="multipart/form-data">
						<ul class="nav pull-left" style="position: absolute;top: 10px;left: 40px;">
								<li class="dropdown">
										<button class="dropdown-toggle btn btn-default text-white" data-toggle="dropdown">Change Cover</button>
										<div class="dropdown-menu">
												<center>
													<p>Click <strong>Select Cover</strong>and then click the <br> <strong>Update Cover</strong></p>
													<label class="btn btn-info">Select Cover
														<input type="file" name="u_cover" size="60" />
													</label><br><br>
													<button name="submit" class="bnt btn-info"><h4>Update Cover</h4></button>
												</center>
										</div>
								</li>
						</ul>
				</form>
			</div>

			<div id="profile-img">
				<img src="users/<?php echo $row['user_image']; ?>" alt="profile" class="img-circle" width="180px" height="185px">
				<form action="profile.php?u_id=$user_id" method="post" enctype="multipart/form-data">
					<label id="update_profile">Select Profile
					<input type="file" name="u_image" size="60" />
					</label><br><br>
					<button id="button_profile" name="update" class="bnt btn-info" >Update Profile</button>	
						
				</form>
			</div><br>			
		</div>
		<div class="col-sm-2">
			
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-2" style="background-color: #e6e6e6;text-align: center;left: 0.9%;border-radius: 5px;">
			<center><h2><strong>About</strong></h2></center>
			<p><h4><strong><?php echo $row['fname'].' '.$row['lname'] ?></strong></h4></p>
			<p><strong><i style="color: grey;"><?php echo $row['desc_user'] ?></i></strong></p>
			<p><strong>Relationship Status :-</strong><?php echo $row['relationship'] ?></p>
			<p><strong>Lives In:- </strong><?php echo $row['user_country'] ?></p>
			<p><strong>Member Since:-</strong><?php echo $row['user_reg_date'] ?></p>
			<p><strong>Gender:- </strong><?php echo $row['user_gender'] ?></p>
			<p><strong>Date Of Birth:- </strong><?php echo $row['user_birthdate'] ?></p>
			
		</div>
		<div class="col-sm-8">
			<div id="user_post">
				<div class="row ml-2">
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
						</div><br><hr>
						<button class="btn btn-info" id="comment">Comment</button>
					</div>
					<div class="col-sm-2"></div>
				<?php } ?>

				</div>
			</div>
		</div>
	</div>
	
</body>

</html>

<?php

	if(isset($_POST['update'])){

		$u_image=$_FILES['u_image']['name'];
		$image_tmp=$_FILES['u_image']['tmp_name'];
		$random_number=rand(1,100);

		if($u_image==''){
			echo "<script>alert('please Select Profile Image on Clicking your Profile image')</script>";
			echo "<script>window.open('profile.php?u_id=$u_id','_self')</script>";
			exit();

		}else{
			move_uploaded_file($image_tmp,"users/$u_image.$random_number");
			$update="UPDATE users SET user_image='$u_image.$random_number'  WHERE user_id='$user_id' ";
			$run=mysqli_query($con,$update);

			if($run){
				echo "<script>alert('Your Profile is Updated')</script>";
				echo "<script>window.open('profile.php?u_id=$u_id','_self')</script>";
			}
		}
	}
?>