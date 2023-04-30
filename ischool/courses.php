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


	 <!-- Start Courses Section -->
	 <div class="container pb-5">
	 	<div>
	 		<h1 class="text-center font-weight-bolder m-5">All Courses</h1>
	 	</div>
	 		<div class="row">
	 			<?php 
	 				$all_courses="SELECT * FROM courses";
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
	

			<!-- Footer Section Start	 -->
	<?php
		require('footer.php');
	?>
		<!-- Footer Section End	 -->