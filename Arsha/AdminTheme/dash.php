<?php
	include('top.php');
?>

	<div class="container">
		<div class="row">

			<!-- Our Founder Section -->
			<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
				<h2>Founders</h2><hr>
				<?php
					$count_position = "SELECT * FROM position";
					$position_run = mysqli_query($conn,$count_position);
					if($check = mysqli_num_rows($position_run)){

				?>
				<h4 class="mt-4">Total Services : <br><br> <?php echo $check ?> </h4>
				<?php } ?>
				<a href="clients.php" class="btn btn-primary mt-4">View Total Founders</a>
			</div>

			<!-- Our Team Section -->
			<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
				<h2>Our Teams</h2><hr>
				<?php
					$count_teams = "SELECT * FROM team";
					$team_run = mysqli_query($conn,$count_teams);
					if($check = mysqli_num_rows($team_run)){

				?>
				<h4 class="mt-4">Total No. Teams : <br><br> <?php echo $check ?> </h4>
				<?php } ?>
				<a href="team.php" class="btn btn-primary mt-4">View All Team Users</a>
			</div>

			<!-- Our Services Section -->
			<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
				<h2>Our Services</h2><hr>
				<?php
					$count_services = "SELECT * FROM our_service";
					$serivices_run = mysqli_query($conn,$count_services);
					if($check = mysqli_num_rows($serivices_run)){

				?>
				<h4 class="mt-4">Total Services : <br><br> <?php echo $check ?> </h4>
				<?php } ?>
				<a href="our_services.php" class="btn btn-primary mt-4">View Total Services</a>
			</div>

			<!-- Our Client Section -->
			<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
				<h2>Our Clients</h2><hr>
				<?php
					$count_client = "SELECT * FROM clients";
					$client_run = mysqli_query($conn,$count_client);
					if($check = mysqli_num_rows($client_run)){

				?>
				<h4 class="mt-4">Total Clients : <br><br> <?php echo $check ?> </h4>
				<?php } ?>
				<a href="clients.php" class="btn btn-primary mt-4">View Total Clients</a>
			</div>

			<!-- Our Enquiry Section -->
			<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
				<h2>Clients Enquiry</h2><hr>
				<?php
					$count_enquiry = "SELECT * FROM contact";
					$enquiry_run = mysqli_query($conn,$count_enquiry);
					if($check = mysqli_num_rows($enquiry_run)){

				?>
				<h4 class="mt-4">Total Enquiry : <br><br> <?php echo $check ?> </h4>
				<?php } ?>
				<a href="contact.php" class="btn btn-primary mt-4">View Clients Enquiry</a>
			</div>

			<!-- Our Notice Section -->
			<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
				<h2>Notice !!</h2><hr>
				<?php
					$count_notice = "SELECT * FROM notice";
					$notice_run = mysqli_query($conn,$count_notice);
					if($check = mysqli_num_rows($notice_run)){

				?>
				<h4 class="mt-4">Total Notice : <br><br> <?php echo $check ?> </h4>
				<?php } ?>
				<a href="notice.php" class="btn btn-primary mt-4">View Total Notice</a>
			</div>



		</div>
	</div>

			


<?php
	include('foot.php');
?>