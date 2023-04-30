<?php include '../auth/auth.php'; ?>
<?php
	include '../conect.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Employee Pannel</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" type="text/css" href="../boot/bootstrap.min.css">
	</head>
	<body>
		<!-- Start top admin pannel -->
		<?php
			include 'emp_header.php';
		?>
		<!-- End top admin pannel -->
		<br><br>
		<div class="container mt-5">
			<h3>Message detail View</h3>
			<?php
				$view_id = @$_GET['id'];
				$dash = "SELECT * FROM task WHERE t_id='$view_id' ";
				$run = mysqli_query($con,$dash);
				$rows = mysqli_fetch_array($run);
			?>
			<div class="col-md-12 col-lg-12 col-sm-12 bg-info p-3" style="">
				<?php echo $rows['task'];  ?>
			</div>

		</div>
			
			<!-- Reply code Finished -->
			<!-- Delete Reply Code -->
			<form action="del_reply.php" method="post">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-2 mt-4" >
							<h3>Write Your Reply :</h3>
						</div>
						<div class="col-sm-10">
							<br>
							<form action="insert_reply.php" method="post">
								<input type="hidden" name="m_id" value="<?php echo $view_id;  ?>" >
								<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];  ?>" >
								<textarea class="col-md-12 bg-warning" name="m_reply" rows="6" required></textarea>
								<div class="form-group">
									<div class="col-lg-10 col-lg-offset-2">
										<button type="submit" class="btn btn-primary">Reply</button>
										
									</div>
								</div>
							</form>
						</div>
						<div class="row">
							<div class="col-sm-2">
								<label ><h4>Your Reply : </h4></label>
								<a href="view_msg.php" class="btn btn-primary">View</a>
							</div>
							<div class="col-sm-10">
								<?php
									$m_id = @$_GET['id'];
									$show_reply = "SELECT * FROM task_reply WHERE msg_id ='$m_id' AND reply_by = '".$_SESSION['user_id']."' ";
									$show = mysqli_query($con,$show_reply);
									while($rows = mysqli_fetch_array($show)){
								?>
								<div class="bg-info m-3 p-3">
									<?php echo $rows['reply'];  ?>
								</div>
								<div class="col-sm-1">
									<a href="del_reply.php?delr=<?php echo $rows['r_id'];  ?>" class="btn btn-danger">Delete</a>
								</div>
								<?php	}
								?>
							</div>
						</div>
					</div>
				</form>
				<!-- Delete Reply Code end -->
				
				
				
			</div>
			
		</div>
	</div>
	
</body>
</html>
<!-- Message And Task Reply Code -->
<!-- Message And Task Reply Code end-->