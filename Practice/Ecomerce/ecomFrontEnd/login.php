<?php
	require('top.php');
	$msg='';
	
?>
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
	<div class="ht__bradcaump__wrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="bradcaump__inner">
						<nav class="bradcaump-inner">
							<a class="breadcrumb-item" href="index.php">Home</a>
							<span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
							<span class="breadcrumb-item active">Login</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- Start Contact Area -->
<section class="htc__contact__area ptb--100 bg__white">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contact-form-wrap mt--60">
					<div class="col-xs-12">
						<div class="contact-title">
							<h2 class="title__line--6">Login</h2>
						</div>
					</div>
					<div class="col-xs-12">
						<form id="contact-form" action="login_submit.php" method="post">
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="username" placeholder="Your Email*" style="width:100%" required>
								</div>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="pass" placeholder="Your Password*" style="width:100%" required>
								</div>
							</div>
							<div class="contact-btn">
								<button type="submit" name="login" class="fv-btn">Login</button>
							</div>
							<div class="text-danger pt-3" >
								<?php  echo $msg ?>
							</div>
						</form>
						<div class="form-output">
							<p class="form-messege"></p>
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="col-md-6">
				<div class="contact-form-wrap mt--60">
					<div class="col-xs-12">
						<div class="contact-title">
							<h2 class="title__line--6">Register</h2>
						</div>
					</div>
					<div class="col-xs-12">
						<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="name" id="name" placeholder="Full Name" style="width:100%" required>
								</div>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="email" id="email"  placeholder="Enter Email Id" style="width:100%" required>
									
								</div>
								<span class="field_error mb-4" id="email_error"></span>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number" style="width:100%" required>
								</div>
							</div>
							<div class="single-contact-form">
								<div class="contact-box name">
									<input type="text" name="password" id="password" placeholder="Enter Your Password" style="width:100%" required>
								</div>
							</div>
							
							<div class="contact-btn">
								<button type="submit" name="register" class="fv-btn">Register</button>
							</div>
						</form>
						<div class="form-output">
							<p class="form-messege"></p>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Contact Area -->
	<!-- End Banner Area -->
	<?php
		require('footer.php');
	?>
	<!-- register query -->
	<?php
			if(isset($_POST['register'])){
				$name=get_safe_value($con,$_POST['name']);
				$email=get_safe_value($con,$_POST['email']);
				$mobile=get_safe_value($con,$_POST['mobile']);
				$password=get_safe_value($con,$_POST['password']);
				$token=bin2hex(random_bytes(16));

				$newAcc="SELECT * FROM users WHERE email='$email'  ";
				$query=mysqli_query($con,$newAcc);
				$emailCount=mysqli_num_rows($query);

				if($emailCount >0){
					echo "Email Id Already Exist";
				}else{
					$register ="INSERT INTO `users`(`name`, `password`, `email`, `mobile`,`token`,`status`) VALUES ('$name','$password','$email','$mobile','$token','inactive')";
					$result= mysqli_query($con,$register);

					if($result){
						

						$to_mail=$email;
						$subject="Email Activation";
						$body="Hi,$name.Click here to Activate Your Account http://localhost/Practice/Ecomerce/ecomFrontEnd/activate.php?token=$token ";
						$sender_email="From: csushant224@gmail.com";

						if(mail($to_mail, $subject,$body,$sender_email) ){
							$_SESSION['msg']="Check Your Mail to Activate Your Account $email ";
							header("location.login.php");
						}else{
							echo "Email Sending Failed";

						}


					}else{
						?>
							<script>
								alert("data Insert Fail !! ");
							</script>
						<?php
					}
				}
			}
	?>