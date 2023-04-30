<?php include '../auth/auth.php'; ?>
<?php
	include '../conect.php';
?>
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

		<br><br>
	<div class="container-fluid mt-5" style="box-sizing: border-box;">
		<h2>All Leave Lists</h2>
		<table class="table table-striped">
					<thead>
						<tr>
							<th>Sr.No</th>
							<th>Employee name</th>
							<th>Valid_from</th>
							<th>Valid_To</th>
							<th>Earning_leave</th>
							<th>Medical_leave</th>
							<th>Casual_leave</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

							$i = 1;
							$dash = "SELECT * FROM assign_leave JOIN register ON 'assign_leave.assignto' = 'register.id'";
							$run = mysqli_query($con,$dash);
							if(mysqli_num_rows($run) > 0){
								while($rows = mysqli_fetch_array($run)){

						?>

						<tr>
							<td><?php echo $i++ ?></td>
							<td><a href="view_leave.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['name'];?></a></td>
							<td><?php echo $rows['v_from']; ?></td>
							<td><?php echo $rows['v_to']; ?></td>
							<td><?php echo $rows['e_leave']; ?></td>
							<td><?php echo $rows['m_leave']; ?></td>
							<td><?php echo $rows['c_leave']; ?></td>
							

							
							<td>
								<a href="view_leave.php?id=<?php echo $rows['id']; ?>" class="btn btn-primary m-2">View</a>
								
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