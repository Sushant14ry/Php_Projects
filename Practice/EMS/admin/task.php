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
					<form class="inline-form font-weight-bold" method="post" action="insert_task.php">
						<div class="form-group p-4 bg-info">
							<br>
							<div class="form-heading">
								<h1 align="center"><b>Assign Task</b><a href="all_task.php" class="btn btn-primary mx-5">All Task</a> </h1>
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
									<label>
										<input type="checkbox" name="emp[]" value="<?php echo $rows['id'];  ?>"> <?php echo $rows['name'];  ?>
									</label>
								</div>
							<?php  } ?>

							     </div>

							</div>

						<div class="col-md-9 col-lg-9 col-12"> <!-- Assign Message Task Start -->
						  <div class="form-group">
							<label>Message </label>
							<textarea class="col-md-12 col-lg-12 p-2" name="msg" rows="12"> Hlo</textarea>
						  </div>
					
							<div class="form-group">
								<button class="btn btn-primary btn-block pt-auto" name="submit">Submit</button>
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

