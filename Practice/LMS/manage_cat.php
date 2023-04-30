<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->
<div class="container">
	<div>
		<table class="table">
			<thead>
				<th>Categories ID</th>
				<th>Categories Name</th>
				<th>Operation </th>
			</thead>
			<?php

				$i=1;

				$show_book="SELECT * FROM categories";
				$run_show=mysqli_query($con,$show_book);
				while($rows=mysqli_fetch_assoc($run_show)){

			?>
			<tbody>
				<td><?php echo $i++ ?></td>
				<td><?php echo $rows['names'] ?></td>
				<td>
					<a href="edit_cat.php?id=<?php echo $rows['id'] ?>" class="btn btn-primary">Edit</a>
					<a href="del_cat.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger">Delete</a>
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