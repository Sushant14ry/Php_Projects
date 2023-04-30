<!DOCTYPE html>
<html>
<head>
	<title>Nep Look</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<style type="text/css">
	body{
		 overflow-x: hidden;
	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left: 31%;
		transform: translate(-50%,-50%);

	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 40%;
		transform: translate(-50%,-50%);
		
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left: 33%;
		transform: translate(-50%,-50%);
		
	}
	#singUp{
		width: 60%;
		border-radius: 30px;

	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		color: #1da1f2;
		border: 2px solid #1da1f2; 
		background-color: #fff; 
		border-radius: 30px;
	}
	.well{
		background-color: #187FAB; 
	}
	
	
</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well p-4 mb-2 ">
				<center><h1 style="color: white;">Nep Look</h1></center>
			</div>
		</div>
	</div>

<!-- ////////////////////////////////// -->

<div class="row">
	<div class="col-sm-6" style="left: 0.5%">
		<img src="images/snow.jpg" alt="images" class="img-rounded" title="Nep Look" width="650px" height="580px">
		<div id="centered1" class="centered">
			<h3 style="color: white"><span class="">&nbsp;&nbsp;&nbsp;</span><strong>Follow Your Intrest</strong></h3>
		</div>
		<div id="centered2" class="centered">
			<h3 style="color: white"><span class="">&nbsp;&nbsp;&nbsp;</span><strong>What People are Talking About</strong></h3>
		</div>
		<div id="centered3" class="centered">
			<h3 style="color: white"><span class="">&nbsp;&nbsp;&nbsp;</span><strong>Join The conversation</strong></h3>
		</div>
	</div><br>

	<!-- ------------------------------- -->
	<div class="col-sm-6" >
		<img src="images/logo1.png" class="img-rounded" title="Nep Look" width="580px"><br><br>
		<h2><strong>See What's happening in <br> the Wolrd Right Now </strong></h2><br>
		<h4><strong>Join Nep Look Today</strong></h4><br>
		<form method="post" accept="">
			<button id="singUp" class="btn btn-info btn-lg" name="singUp">SingUp</button><br><br>
			<?php   
				if(isset($_POST['singUp'])){
					echo "<script>window.open('singUp.php','_self')</script>";
				}
			?>
			<button id="login" class="btn btn-info btn-lg" name="login">Login</button>
			<?php   
				if(isset($_POST['login'])){
					echo "<script>window.open('singin.php','_self')</script>";
				}
			?>
			
		</form>
		
	</div>
</div>

	

</body>
</html>