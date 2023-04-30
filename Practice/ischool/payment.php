	<!-- Header Section Start -->
	<?php
		include('data.php');
		include('header.php');
	?>
	<!-- Header Section End -->

	<!-- gutter Section Start -->
		
			<!-- Start Video background -->
	<div class="container-fluid remove_vid_marg">
		<div class="vid_parent">
			<img src="images/book1.jpg" style="width: 100%;width: 100%;padding: 0;margin: 0;">
			<div class="vid_overlay">
			</div>
			<div class="vid_content">
				<h2 class="my_content">Welcome to E-Learning</h2>
				<p class="my_content">Improove Your Skill Basic To Expert !</p>
				<a href="Singup.php" class="btn btn-danger font-weight-bolder" data-toggle="modal" data-target="#myModal">Get Started</a>
			</div>
		</div>
	</div>
	<!-- End Video Background -->
	<!-- gutter Section End -->


	 <!-- Start Payment Status Section -->
	 <div class="container pb-4">
	 	<div>
	 		<h2 class="text-center font-weight-bolder m-5">Payment Status</h2>
	 	</div>
	 	<div class="row">
	 		<div class="col-md-6 m-auto">
	 			<h2>Order ID</h2>
	 			<input type="text" class="form-control" name=""><br>
	 			<button class="form-control btn btn-success">View</button>
	 		</div>
	 	</div>
	 </div>
	 <!-- End Payment Status Section -->

	<!-- Start contact Us -->
	<div class="container mt-4" id="contact">
		<h2 class="text-center text-white contact_us p-3">Contact Us</h2>
		<div class="row">
			<!-- Start Contact Form -->
			<div class="col-md-8">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<input type="text" name="name" class="form-control" placeholder="Name"><br>
					<input type="text" name="Subject" class="form-control" placeholder="Subject"><br>
					<input type="text" name="Email" class="form-control" placeholder="Email"><br>
					<textarea class="form-control" name="message" placeholder="How Can We Help You ?" style="height: 150px;"></textarea><br>
					<input type="submit" name="send" class="btn btn-primary" name="submit"><br><br>
				</form>
				<?php
					if(isset($_POST['send'])){

						$name=$_POST['name'];
						$Subject=$_POST['Subject'];
						$Email=$_POST['Email'];
						$message=$_POST['message'];

						$contact_us="INSERT INTO contact_us(name,subject,email,message) VALUES('$name','$Subject','$Email','$message')";
						$run_contact_us=mysqli_query($con,$contact_us);

						if($run_contact_us){
							?>
							<script>
								alert('Thank you For Contacting Us , Call you soon !!');
							</script>
							<?php
						}else{
							?>
							<script>
								alert('Contact Failed Try Once Again !!');
							</script>
							<?php
						}
					}
				?>
			</div>
			<!-- End Contact Form -->
			<!-- Start Contact Us -->
			<div class="col-md-4 striped text-white text-center">
				<h4>E-Learning</h4>
				<p>E-Learning,Near Bhat bhateni ,kalanki 44600<br>
				New Road - 44600<br>
				www.E-learning.com</p>
				
			</div>
			<!-- End Contact Us -->
		</div><!-- End Contact Form Div -->
	</div>
	<!-- End contact Us -->
	

	

			<!-- Footer Section Start	 -->
	<?php
		require('footer.php');
	?>
		<!-- Footer Section End	 -->