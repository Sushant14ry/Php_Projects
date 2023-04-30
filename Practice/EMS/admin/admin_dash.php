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

	<div class="container-fluid mt-5 text-center">
		<table class="table table-striped">
					<thead>
						<tr>
							<th>Sr.No</th>
							<th width="100px">Name</th>
							<th width="150px">Email</th>
							<th>Photos</th>
							<th>Gender</th>
							<th>Department</th>
							<th>Role</th>
							<th>Number</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php

							$i = 1;
							$dash = "SELECT * FROM register";
							$run = mysqli_query($con,$dash);
							if(mysqli_num_rows($run) > 0){
								while($rows = mysqli_fetch_array($run)){

						?>

						<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $rows['name']; ?></td>
							<td><?php echo $rows['email']; ?></td>
							<td><?php echo $rows['picture']; ?></td>
							<td><?php echo $rows['gender']; ?></td>
							<td><?php echo $rows['depart']; ?></td>
							<td><?php echo $rows['role']; ?></td>
							<td><?php echo $rows['number']; ?></td>
							<td>
								<a href="#?id=<?php echo $rows['id']; ?>" class="btn btn-primary m-2">Edit</a>
								<a href="delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger m-2">Delete</a>
							</td>
						</tr>
					<?php } }else{
						echo "No Data Found";
					} ?>
					</tbody>
					
				</table>

	</div>

