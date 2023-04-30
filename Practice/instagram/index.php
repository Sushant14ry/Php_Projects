<!DOCTYPE html>
<html>
	<head>
		<title>Neplook Dashoard</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="insta_login.css">
	</head>
	<style type="text/css">
		
		#top{
			width: 100%;
			height: 10%;
			background-color: gray;
			padding: 2%;
			margin-bottom: 1%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		#top h2{
			text-align: center;
			font-size: 40px;
			color: darkblue;
			font-weight: bold;
		}
		#left{
			width: 100%;
			height: 100%;
		}
		.right{
			margin-top: 20%;
		}
		.right h2{
			color: blue;
			text-align: center;
		}
		#btn{
			border-radius: 30px;
			text-align: center;
			width: 80%;
			font-size: 25px;
			font-weight: bold;
			text-decoration: none;
		}
		footer{
			width: 100%;
			height: 4%;
			background-color: black;
			margin-top: 3%;
		}
		footer p{
			color: white;
			text-align: center;
			font-size: 20px;
			padding: 10px;
		}
	</style>
	<body>
		<div class="container-fluid">
			<div id="top">
				<h2>Welcome To Nep Look</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="post_img/dd.jpg" id="left">
				</div>
				<div class="col-md-6">
					<div class="right">
						<h2>Welcome to Nep Look</h2>
						<p align="center">Found News about what are doing in the world</p><br>
						<a href="singup.php" class="form-control bg-info m-auto" id="btn">SingUp</a><br>
						<a href="login.php" class="form-control bg-success m-auto" id="btn">Login</a>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<p>All Right Reseved by Sushant Chaudhary 2020</p>
		</footer>
	</body>
</html>