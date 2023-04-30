<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->
<div class="container">
	<div>
		<table class="table">
			<thead>
				<th>Author ID</th>
				<th>Author Name</th>
				<th>Operation </th>
			</thead>
			<?php

				$i=1;

				$show_book="SELECT * FROM author";
				$run_show=mysqli_query($con,$show_book);
				while($rows=mysqli_fetch_assoc($run_show)){

			?>
			<tbody>
				<td><?php echo $i++ ?></td>
				<td><?php echo $rows['name'] ?></td>
				<td>
					<a href="edit_auth.php?id=<?php echo $rows['id'] ?>" class="btn btn-primary">Edit</a>
					<a href="del_auth.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger">Delete</a>
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
<!-- Start Footer Section -->s