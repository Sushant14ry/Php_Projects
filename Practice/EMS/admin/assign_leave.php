<?php include '../auth/auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Pannel</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="../boot/bootstrap.min.css">
</head>
<body>

	<!-- Start top admin pannel -->
	<?php  
		 include 'admin_header.php';
	?>
	<!-- End top admin pannel -->

	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-1 col-lg-1 col-12"> </div>

			<!-- Asign Task Start -->

			<div class="col-md-10 col-lg-10 col-12 mt-3 "> 
				<div class="container mt-5" >
						<div class="row">
							<br><br>
							<div class="col-md-12">
					<form class="inline-form font-weight-bold" method="post" action="insert_leave.php">
						<div class="form-group p-4 bg-info">
							<br>
							<div class="form-heading">
								<h1 align="center"><b>Assign Leave</b><a href="all_leave.php" class="btn btn-primary mx-5">All Leave</a> </h1>
								</div>
							<hr><br>
					
					<div class="">
						<div class="row">
							<div class="col-md-3 col-lg-3 col-12">   <!-- Assign Employee List Start -->
								<div class="container bg-secondary p-3" style="text-overflow: scroll;height: 400px">
								<div class="form-group">
									<label align="center">Employee List
									<input type="hidden" name="assign" value="<?php echo $_SESSION['user_id'];  ?>">
									</label>
									<hr>
								</div>

								<?php  

									$Task = "SELECT * FROM register WHERE role ='emp' order by name asc  ";
									$run = mysqli_query($con,$Task);

									while($rows = mysqli_fetch_array($run)){

								?>

								<div class="checkbox">
									<label required>
										<input type="checkbox" name="emp[]" value="<?php echo $rows['id'];  ?>" > <?php echo $rows['name'];  ?>
									</label>
								</div>
							<?php  } ?>

							     </div>

							</div>

						<div class="col-md-9 col-lg-9 col-12 bg-secondary p-4"> <!-- Assign Message Task Start -->
						 <div class="form-group">
							<label class="col-md-6 col-lg-6" >Valid From </label>
								<input type="date" name="from" placeholder="dd/mm/yy" required>
							
						  </div>
						   <div class="form-group">
							<label class="col-md-6 col-lg-6" >Valid To </label>
								<input type="date" name="to" placeholder="dd/mm/yy" required>
							
						  </div>
						   <div class="form-group">
							<label class="col-md-6 col-lg-6" >Earning Leaves </label>
								<input type="text" name="earning" placeholder="No of Leaves">
							
						  </div>
						  <div class="form-group">
							<label class="col-md-6 col-lg-6" >Medical Leaves </label>
								<input type="text" name="medical" placeholder="No of Leaves">
						</div>
						  
						  <div class="form-group">
							<label class="col-md-6 col-lg-6" >Casual Leaves </label>
							
								<input type="text" name="casual" placeholder="No of Leaves">
							
						  </div>
					
							<div class="form-group">
								<button class="btn btn-primary btn-block pt-auto" name="submit">Leave Submit</button>
							</div>
						</div>
						</div>
					</div>

					   </form>
					</div>
					</div>
				</div>
			</div>  <!-- Asign end -->

			<div class="col-md-1 col-lg-1 col-12"> </div> 

			<!-- Container and Row Finished -->

		</div>
	</div>
	
</body>
</html>

