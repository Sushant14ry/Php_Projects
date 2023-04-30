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
	<div class="container-fluid mt-5">
		<h2>All Task Lists</h2>
		<table class="table table-striped">
					<thead>
						<tr>
							<th>Sr.No</th>
							<th>Task</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

							$i = 1;
							$dash = "SELECT * FROM task WHERE user_id='".$_SESSION['user_id']."' ";
							$run = mysqli_query($con,$dash);
							if(mysqli_num_rows($run) > 0){
								while($rows = mysqli_fetch_array($run)){

						?>

						<tr>
							<td><?php echo $i++ ?></td>
							<td><a href="view_msg.php?id=<?php echo $rows['t_id']; ?>"><?php echo substr($rows['task'],0,100); ?></a></td>
							<td><?php echo $rows['date_time']; ?></td>
							
							<td>
								<a href="view_msg.php?id=<?php echo $rows['t_id']; ?>" class="btn btn-primary m-2">View</a>
								
							</td>
						</tr>
					<?php } }else{
						echo "No Data Found";
					} ?>
					</tbody>
					
				</table>

	</div>
	

</body>
</html>