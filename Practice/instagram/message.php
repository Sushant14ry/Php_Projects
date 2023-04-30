<!DOCTYPE html>
<html>
<head>
	<title>Massage Conversation</title>
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
	<div class="container-fluid">
		<h1 id="conver">Friends Conversation</h1><hr>
		<div class="row">
			<div class="col-md-3 col-sm-4">
				<div id="friends_list">
					<a href="profile.php" style="text-decoration: none;"><img src="profile/parents.jpg" id="profile_img_sms"></a>
					<a href="profile.php" style="text-decoration: none;"><h4 id="sms_user_name">Sushant Chaudhary</h4></a>
					<span class="btn btn-success">Online</span>
					<hr>
					<a href="profile.php" style="text-decoration: none;"><img src="profile/parents.jpg" id="profile_img_sms"></a>
					<a href="profile.php" style="text-decoration: none;"><h4 id="sms_user_name">Sushant Chaudhary</h4></a>
					<span class="btn btn-secondary">Offline</span>
					<hr>
				</div>

			</div>
			<div class="col-md-6 col-sm-8" id="Conversation">
				<div >
					<h3>Sushant Chaudhary</h3><hr>

					<textarea class="form-control" id="send_sms"></textarea>
					<button class="btn btn-info">Send</button>
				</div>
			</div>
			<div class="col-md-3 ">
				<div id="reciever_profile" >
					<a href="profile.php" style="text-decoration: none;"><img src="profile/parents.jpg" id="profile_img_reciever"></a><br><br>
					<span class="btn btn-success">Online</span>
					<hr>
					<h3><strong>Sushant Chaudhary</strong></h3>
					<p>Welcome to nep look</p>
					<p><strong>RelationShip:- </strong> Single</p>
					<p><strong>Lives in :- </strong>Bara</p>
					<p><strong>Registe Date:- </strong>2020-9-11</p>
					<p><strong>Gender:- </strong>Male</p>
					<p><strong>Date of Birth:- </strong>2000-04-14</p>
					
				</div>
			</div>
		</div>
	</div>

</body>
</html>