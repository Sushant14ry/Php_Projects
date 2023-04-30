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
											<input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%" required>
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="email" id="email"  placeholder="Your Email*" style="width:50%" required>
											<button type="submit" onclick="email_sent_otp()" class="fv-btn email_sent_otp height_60px">Send OTP</button>

											<input type="text" id="email_otp" class="email_verify_otp" placeholder="OTP" style="width:40%" required>
											<button type="submit" onclick="email_verify_otp()" class="fv-btn email_verify_otp height_60px">Verify OTP</button>
											<span id="email_otp_result"></span>
											
										</div>
										<span class="field_error mb-4" id="email_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="mobile" id="mobile" placeholder="Your Mobile*" style="width:100%" required>
										</div>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" name="password" id="password" placeholder="Your Password*" style="width:100%" required>
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
	<script>
		function email_sent_otp(){
			$("#email_error").html(" ");
			var email=$("#email").val();
			if(email==''){
				$("#email_error").html("Please Enter Email Id");
			}else{
				$(".email_sent_otp").html("Please Wait....!");
				$(".email_sent_otp").attr('disabled',true);
				$(".email_sent_otp");
				$.ajax({
					url:'send_otp.php',
					type:'post',
					data:'email='+email+'&type=email',
					success:function(result){
						if(result=='done'){
							$("#email").attr('disabled',true);
							$(".email_verify_otp").show();
							$(".email_sent_otp").hide();
						}else{
							$(".email_sent_otp").html("OTP Send");
							$(".email_sent_otp").attr('disabled',false);
							$("#email_error").html("Please try after sometime");
						}

					}
				});

				
			}
		}
		function email_verify_otp(){
			$("#email_error").html(" ");
			var email_otp=$("#email_otp").val();
			if(email_otp==''){
				$("#email_error").html("Please Enter OTP");
			}else{
				$.ajax({
					url:'check_otp.php',
					type:'post',
					data:'otp='+email_otp+'&type=email',
					success:function(result){
						if(result=='done'){
							$(".email_verify_otp").hide();
							$("#email_otp_result").html("Email Id Verified");
						}else{
							$("#email_error").html("Please enter Valid OTP");
						}

					}
				});

				
			}
		}
 
	</script>

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

			$register ="INSERT INTO `users`(`name`, `password`, `email`, `mobile`) VALUES ('$name','$password','$email','$mobile')";
			$result= mysqli_query($con,$register);

		}
?>