<?php
	include('top.php');
?>
	
<div class="container">
	<div class="row">
		<!-- Client Section Start -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>Total Clients</h2><hr>
			<?php
				$count_Clients="SELECT * FROM clients";
				$client_run=mysqli_query($conn,$count_Clients);
				if($check=mysqli_num_rows($client_run)){

			?>
			<h4 class="mt-3">Total No Clients <br><br> <?php echo $check ?> </h4>
			<?php } ?>
				<a href="clients.php" class="btn btn-primary mt-3">View All  Clients</a>
		</div>

		<!-- Teams Section Start -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>Total Teams</h2><hr>
			<?php
				$count_teams="SELECT * FROM team";
				$teams_run=mysqli_query($conn,$count_Clients);
				if($check=mysqli_num_rows($client_run)){

			?>
			<h4 class="mt-3">Total No Teams <br><br> <?php echo $check ?> </h4>
			<?php } ?>
				<a href="team.php" class="btn btn-primary mt-3">View All  Teams</a>
		</div>


		<!-- Our Services Section Start -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>Total Services</h2><hr>
			<?php
				$count_service="SELECT * FROM our_service";
				$service_run=mysqli_query($conn,$count_service);
				if($check=mysqli_num_rows($service_run)){

			?>
			<h4 class="mt-3">Total No Teams <br><br> <?php echo $check ?> </h4>
			<?php } ?>
				<a href="our_services.php" class="btn btn-primary mt-3">View All  Services</a>
		</div>

		<!-- Founders Section Start -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>Total Founders</h2><hr>
			<?php
				$count_position="SELECT * FROM position";
				$position_run=mysqli_query($conn,$count_position);
				if($check=mysqli_num_rows($position_run)){

			?>
			<h4 class="mt-3">Total No Founders <br><br> <?php echo $check ?> </h4>
			<?php } ?>
				<a href="services_cat.php" class="btn btn-primary mt-3">View All Founders</a>
		</div>

		<!-- Our Services Section Start -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>Total Notice</h2><hr>
			<?php
				$count_notice="SELECT * FROM notice";
				$notice_run=mysqli_query($conn,$count_notice);
				if($check=mysqli_num_rows($notice_run)){

			?>
			<h4 class="mt-3">Total No Notice <br><br> <?php echo $check ?> </h4>
			<?php } ?>
				<a href="notice.php" class="btn btn-primary mt-3">View All  Services</a>
		</div>

		<!-- Enquiry Section Start -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>C. Enquiry</h2><hr>
			<?php
				$count_enquiry="SELECT * FROM contact";
				$enquiry_run=mysqli_query($conn,$count_enquiry);
				if($check=mysqli_num_rows($enquiry_run)){

			?>
			<h4 class="mt-3">Total No Enquiry <br><br> <?php echo $check ?> </h4>
			<?php } ?>
				<a href="contact.php" class="btn btn-primary mt-3">View All  Enquiry</a>
		</div>
	</div>
</div>


