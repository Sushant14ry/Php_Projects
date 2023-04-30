<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->
<div class="container">
	<div>
		<h2 class="text-center bg-dark text-white p-2 mb-2 font-weight-bolder">Show All Register User</h2>
		<table class="table">
			<thead>
				<th>User_ID</th>
				<th>User Name</th>
				<th>User Email</th>
				<th>Mobile Number</th>
				<th>Password</th>
				<th>Role</th>
				<th>Operation</th>
			</thead>
			<?php

				$i=1;

				$show_book="SELECT * FROM register";
				$run_show=mysqli_query($con,$show_book);
				while($rows=mysqli_fetch_assoc($run_show)){

			?>
			<tbody>
				<td><?php echo $i++ ?></td>
				<td><?php echo $rows['fullname'] ?></td>
				<td><?php echo $rows['email'] ?></td>
				<td><?php echo $rows['mobile'] ?></td>
				<td><?php echo $rows['password'] ?></td>
				<td><?php echo $rows['role'] ?></td>
				<td>
					<a href="edit_user.php?id=<?php echo $rows['id'] ?>" class="btn btn-primary">Edit</a>
					<a href="del_user.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger">Delete</a>
				</td>
			</tbody>
			<?php
				}
			?>
		</table>
	</div>
</div>


<!-- Start Footer Section -->
<?php
	include('foot.php');

?>
<!-- Start Footer Section -->