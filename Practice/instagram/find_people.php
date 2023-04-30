<?php
	session_start();
	include('connection.php');
	if(!isset($_SESSION['USER_ID'])){
		header("location:login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Find People</title>
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
	#find{
		height: 42px;
		width: 16%;
		margin-left: 6px;
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
		<div class="col-md-10 m-auto" >
			<form action="find_people.php" method="get">
			<input type="text" name="serachbox">
			<button id="find" name="search" class="btn btn-info">Find People</button>
			</form>
		</div>
		<hr>
		<h2>Search result</h2><br>
	</div>

	<!-- result People -->
	<div class="container">
		<div class="row">
		<?php
			if(isset($_POST['search'])){
			$searchbox=$_GET['serachbox'];

			$search_query="SELECT * FROM register WHERE fname LIKE '%$searchbox%' OR lname LIKE '%$searchbox%' ";
			$run_search=mysqli_query($con,$search_query);
			while($rows=mysqli_fetch_assoc($run_search)){
				$profile_img=$rows['prof_img'];
				$fname=$rows['fname'];
				$lname=$rows['lname'];
				$address=$rows['address'];
				$relationship=$rows['relationship'];
		
		?>
			<div class="col-md-8 m-auto" id="show_people">
				<a href="profile.php" style="text-decoration: none;"><img src="post_img/snow.jpg"></a>
				<a href="profile.php" style="text-decoration: none;"><h2><?php echo $fname.$lname ;  ?></h2></a>
				<p>31 Follower</p>
				<p>Lives In :-<?php echo$address ;  ?></p>
				<p>Status :- <?php echo $relationship ;  ?></p>
				<button class="btn btn-success ml-auto">Add Friends</button>
			</div>
		<?php }else{
			echo "data not found";
		}
			}
		 ?>
		</div><br>
		
		

	</div>

</body>
</html>