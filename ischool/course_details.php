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


	 <!-- Start Courses Details Section -->
	 <div class="container p-2 mt-4">
	 	<div class="row">
	 			<?php 
	 				$cid=$_GET['cid'];
	 				$all_courses="SELECT * FROM courses WHERE id='$cid' ";
	 				$run=mysqli_query($con,$all_courses);
	 				while($rows=mysqli_fetch_assoc($run)){

	 			 ?>
	 		<div class="col-md-4">
				<div>
					<img src="admin/<?php echo $rows['c_img']; ?>" class="img-rounded img_box" alt="Cinque Terre">
				</div>
	 		</div>
	 		<div class="col-md-8">
	 			<h2><b>Course Name : </b><?php echo $rows['c_name']; ?></h2>
	 			<p><?php echo $rows['c_desc']; ?></p>
	 			<p><del><?php echo $rows['c_oprice']; ?></del> <span><b><?php echo $rows['c_sprice']; ?></b></span></p> 
	 			<a href="checkout.php?cid=<?php echo $rows['id']; ?>" class="btn btn-primary float-right">Buy Now</a>
	 		</div>
	 	<?php } ?>
	 	</div>
	 	<div class="row my-4">
	 		<div class="col-md-12 m-auto">
	 			<table class="table">
	 			<thead>
	 				<tr>
	 					<th>Lesson No</th>
	 				<th>Lesson name</th>
	 			</tr>
	 			</thead>
	 			<tbody>
	 				<?php 
	 				$i=1;
	 				$l_id=$_GET['cid'];
	 				$all_lesson="SELECT * FROM lesson WHERE course_id='$l_id' ";
	 				$runn=mysqli_query($con,$all_lesson);
	 				while($rows=mysqli_fetch_assoc($runn)){

	 			 ?>
	 				<td><?php echo $i++ ?></td>
	 				<td><?php echo $rows['lesson_name']; ?></td>
	 		
	 			</tbody>
	 		<?php } ?>
	 		</table>
	 		</div>
	 	</div>
	 	
	 </div>

	 <!-- End Courses Details Section -->
		
	

		<!-- Footer Section Start	 -->
	<?php
		require('footer.php');
	?>
		<!-- Footer Section End	 -->