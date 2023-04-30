	<!-- Header Section Start -->
	<?php
		include('data.php');
		include('header.php');
	?>
	<!-- Header Section End -->

	<!-- Start Video background -->
	<div class="container-fluid remove_vid_marg">
		<div class="vid_parent">
			<video playsinline autoplay muted loop>
				<source src="video/bg.mp4" type="">
			</video>
			<div class="vid_overlay">
			</div>
			<div class="vid_content">
				<h2 class="my_content">Welcome to E-Learning</h2>
				<p class="my_content">Learn and Implement</p>
				<?php
					if(!isset($_SESSION["stu_name"])){
						echo '<a href="Singup.php" class="btn btn-danger font-weight-bolder" data-toggle="modal" data-target="#myModal">Get Started</a>';
					}else{
						echo '<a href="admin/admin_dash.php" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#myModal">My Profile</a>';
					}
				?>
				
			</div>
		</div>
	</div>
	<!-- End Video Background -->

	<!-- Start Text banner -->
	<div class="container-fluid bg-danger text_banner">
		<div class="row bottom-banner">
			<div class="col-sm m-2">
				<h4><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h4>
			</div>
			<div class="col-sm m-2">
				<h4><i class="fas fa-users mr-3"></i>Expert Instructors</h4>
			</div>
			<div class="col-sm m-2">
				<h4><i class="fas fa-keyboard mr-3"></i>Life Time Acces</h4>
			</div>
			<div class="col-sm m-2">
				<h4><i class="fas fa-rupee-sign mr-3"></i>Money Back Guranteed</h4>
			</div>
		</div>
	</div>
	<!-- End Text banner -->

	<!-- Start Most Popular Courses -->
	<div class="container mt-5">
		<h1 class="text-center">Popular Courses</h1>
		<!-- Start Most Popular Courses 1st Card Desk -->
		<div class="card-deck mt-4">
			<a href="#" class="btn" style="text-align: center;padding: 0px;margin: 0px;">
				<div class="card">
					<img src="images/neural.jpg" class="card-img-top" alt="python">
					<div class="card-body">
						<h5 class="card-title">Learn Neural Network</h5>
						<p class="card-text">Lorem ipsum dolor sit , amet consecteture adipisicing elit. Fugit,Error.</p>
					</div>
					<div class="card-footer">
						<p class="card-text d-inline">Price : <small><del>Rs.4400</del></small>&nbsp;<span class="font-weight-bolder">Rs.3600</span> </p>
						<a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
					</div>
				</div>
			</a>
		</div>
		<!-- End Most Popular Courses 1st Card Desk -->
		<!-- Start Most Popular Courses 2nd Card Desk -->
		<div class="container">
			<div class="row">
				<?php 
	 				$all_courses="SELECT * FROM courses LIMIT 3";
	 				$run=mysqli_query($con,$all_courses);
	 				while($rows=mysqli_fetch_assoc($run)){

	 			 ?>
	 			<div class="col-md-4">
	 				<a href="#" class="btn" style="text-align: center;padding: 0px;margin: 0px;">
						<div class="card">
							<img src="admin/<?php echo $rows['c_img']; ?>" class="card-img-top" height="250px" alt="python">
							<div class="card-body">
								<h5 class="card-title"><?php echo $rows['c_name']; ?></h5>
								<p class="card-text"><?php echo $rows['c_desc']; ?></p>
							</div>
							<div class="card-footer">
								<p class="card-text d-inline">Price : <small><del><?php echo $rows['c_oprice']; ?></del></small>&nbsp;<span class="font-weight-bolder"><?php echo $rows['c_sprice']; ?></span> </p>
								<a href="course_details.php?cid=<?php echo $rows['id']; ?>" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
							</div>
						</div>
					</a>
	 			</div>
	 		<?php } ?>	
			</div>
		</div>
			
		<!-- Start Most Popular Courses 2nd Card Desk -->
	</div>
	<!-- End Most Popular Courses -->

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
	
	<!-- Start Feedback Carasol -->
	<div class="container-fluid bg-dark" id="feedback">
		<h2 class="text-center text-white" style="margin: 20px 0px;padding: 20px;font-size: 2rem; font-weight: bolder">Customer Feedback</h2>
		<div class="row">
			<div class="col-md-3">
				<div class="text-white text-center my-2" style="border: 2px solid red">
					<p style="padding: 8px;">Hello guys its amazing project this is most wonderfull Project for minor and Major Project if you are searching for how to submit my college Prosposal here you are in right place.</p>
				</div>
				<div class="feedback_img" style="color: white; text-align: center;">
					<img src="images/mobile.jpg" style="height: 120px;width: 120px;border-radius: 50%;" ><br>
					<h2>Sushant Chaudhary</h2>
					<p>Web Developer</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="text-white text-center my-2" style="border: 2px solid red">
					<p style="padding: 8px;">Hello guys its amazing project this is most wonderfull Project for minor and Major Project if you are searching for how to submit my college Prosposal here you are in right place.</p>
				</div>
				<div class="feedback_img" style="color: white; text-align: center;">
					<img src="images/mobile.jpg" style="height: 120px;width: 120px;border-radius: 50%;" ><br>
					<h2>Sushant Chaudhary</h2>
					<p>Web Developer</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="text-white text-center my-2" style="border: 2px solid red">
					<p style="padding: 8px;">Hello guys its amazing project this is most wonderfull Project for minor and Major Project if you are searching for how to submit my college Prosposal here you are in right place.</p>
				</div>
				<div class="feedback_img" style="color: white; text-align: center;">
					<img src="images/mobile.jpg" style="height: 120px;width: 120px;border-radius: 50%;" ><br>
					<h2>Sushant Chaudhary</h2>
					<p>Web Developer</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="text-white text-center my-2" style="border: 2px solid red">
					<p style="padding: 8px;">Hello guys its amazing project this is most wonderfull Project for minor and Major Project if you are searching for how to submit my college Prosposal here you are in right place.</p>
				</div>
				<div class="feedback_img" style="color: white; text-align: center;">
					<img src="images/mobile.jpg" style="height: 120px;width: 120px;border-radius: 50%;" ><br>
					<h2>Sushant Chaudhary</h2>
					<p>Web Developer</p>
				</div>
			</div>


		</div>
		<br>
	</div>
			
	<!-- End Feedback Carasol -->

	<!-- Start Social Follower Icon -->
	<div class="container-fluid bg-danger text_banner">
		<div class="row text-white text-center p-1">
			<div class="col-sm m-2">
				<a href="#" class="text-white social-hover"><i class="fab fa-facebook-f"></i> Facebook</a>
			</div>
			<div class="col-sm m-2">
				<a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i> Twitter</a>
			</div>
			<div class="col-sm m-2">
				<a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i> WhatsApp</a>
			</div>
			<div class="col-sm m-2">
				<a href="#" class="text-white social-hover"><i class="fab fa-instagram"></i> Instagram</a>
			</div>
			
		</div>
	</div>
	<!-- End Social Follower Icon -->

	<!-- Start About Section -->
	<div class="container-fluid p-4" style="background-color: #E9ECEF">
		<div class="container" style="background-color: #E9ECEF">
			<div class="row text-center">
				<!-- Start About Section -->
				<div class="col-sm">
					<h5>About  Us</h5>
					<p>E-Learning Provides Universal Project Acess Videos to the World's best Eduction, Partneringwith Top Universities and Organization to Offer Courses Online.</p>
				</div>
				<!-- End About Section -->

				<!-- Start Categories Section  -->
				<div class="col-sm">
					<h5>Categories</h5>
					<a href="#" class="text-dark">Web Development</a>
					<a href="#" class="text-dark">Web Designing</a><br>
					<a href="#" class="text-dark">Android App Devlopment</a><br>
					<a href="#" class="text-dark">iOS Devlopment</a><br>
					<a href="#" class="text-dark">Data Analysis</a><br>
				</div>
				<!-- End Categories Section  -->
				
				<!-- Start Adress Section -->
				<div class="col-sm">
					<h5>Contact Us</h5>
					<p>E-Learning Pvt.Ltd <br> Near Bhat Bhateni <br> New Road <br>Ph.9821224203</p>
				</div>
				<!-- End Adress Section -->

			</div> <!-- End About Section Div -->
			
		</div> <!-- End Container Style Section Div -->
		
	</div>
	<!-- End About Section -->

	
		<!-- Footer Section Start	 -->
	<?php
		require('footer.php');
	?>
		<!-- Footer Section End	 -->
