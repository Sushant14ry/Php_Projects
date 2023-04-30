<?php
	include('data.php');
	include('top_admin.php');
?>

<div class="ml-3">
	<h5 class=" text-white font-weight-bold p-1 bg-dark">List of Courses</h5>
	<table class="table">
		<thead>
			<tr>
				<th>Order ID</th>
				<th>Name</th>
				<th>Author</th>
				<th>Action</th>
			</tr>
		</thead>
		
			<?php
				$id=1;
				$Courses="SELECT * FROM `courses";
				$run_course=mysqli_query($con,$Courses);
				if($check=mysqli_num_rows($run_course)>0){
					while($rows=mysqli_fetch_assoc($run_course)){


			?>
			<tr>
				<td><?php echo $id++ ?></td>
				<td><a href="add_lesson.php?id=<?php echo $rows['id'] ?>"><?php echo $rows['c_name'] ?></a></td>
				<td><?php echo $rows['c_author'] ?></td>
				<td>
					<a href="edit_course.php?cid=<?php echo $rows['id'] ?>">Edit</a>
					<a href="del_course.php?del_course=<?php echo $rows['id'] ?>">Delete</a>
				</td>
			</tr>
			<?php 
					}
				}
			?>
	</table>

</div>

<div class="fixed-bottom mb-5 " style="margin-left: 90%;">
	<a href="admin_add_course.php"><i class="fas plus fa-plus"></i></a>
</div>
<?php
	include('foot.php');

?>