<?php  
	session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Unique Login Form</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.main{
			width: 100%;
			height: 100vh;
			background-image: linear-gradient(90deg , lightblue 50% , pink 50%);
			background-size: 100% 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			text-align: center;
		}

		img{
			width: 130px;
			height: 150px;
			border-radius: 50%;
		}
		.login{
			width: 350px;
			height: 550px;
			background-image: linear-gradient(to right, pink 50% , lightblue 50%);
			box-shadow: 5px 5px grey;
			border-radius: 10%;
		}
		.login h2{
			font-size: 2.5em;
			color: white;
			letter-spacing: 2px;
			margin-top: 30px;
			margin-bottom: 10px;
			text-shadow: 5px 5px grey;
		}
		form{
			padding: 0 10%;

		}
		.login form label{
			width: 100%;
			display: block;
			text-align: left;
			color: white;
			margin-top: 15px;
			font-size: 1.5em;

		}
		input[type=text],input[type=password]{
			width: 100%;
			border:none;
			border-bottom: 2px solid white;
			padding: 5px 20px;
			box-sizing: border-box;
			background-color: transparent;
			color: black;
			font-size: 1.5em;
		}
		input:focus{
			outline: none;
		}
		::placeholder{
				color: grey;
		}
		.login form p{
				color: green;
				text-align: right;
				font-size: 1em;
		}
		input[type=submit]{
			width: 100%;
			padding: 10px;
			margin-top: 10px;
			color: black;
			background-image: linear-gradient(to right, lightblue 50% , pink 50%);
			text-transform: uppercase;
			border: none;
			font-size: 1.2em;
			cursor: pointer;
			border-radius: 25px;

		}

	</style>
</head>
<body>
	<div class="main">
		<div class="login">
			<h2> Welcome </h2>
				<div>
					<img src="smile.jpg">
				</div>
				<form action="login.php" method="post">
					<label>Username</label>
					<input type="text" name="Username" placeholder="Enter Your Username">
					<label>Password</label>
					<input type="Password" name="Password" placeholder="Enter Yout Password">
					<p>Forgot Password</p>
					<input type="submit" value="Login" name="submit">
				</form>
				
			
		</div>
	</div>

</body>
</html>
<?php
	if(isset($_POST['submit'])){

		$Username = mysqli_real_escape_string($con,$_POST['username']);
		$Userpass = mysqli_real_escape_string($con,$_POST['userpass']);
		$encrypt = md5($Userpass);

		$admin_login = "SELECT * FROM admin WHERE username = '$Username' AND password = '$Userpass' ";

		$run = mysqli_query($con,$admin_login);
		if($row = mysqli_num_rows($run) > 0 ){
			
			$_SESSION['username'] =$Username; 
			@header('location:admin_index.php');
		}else{
			echo "<script>
		alert('Username or Password is Incorrect !')
	</script>";
		}
	}

?>