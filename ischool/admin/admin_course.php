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
			$fcourse = "SELECT * FROM courses";
			$runfcourse = mysqli_query($con,$fcourse);
			if($checked = mysqli_num_rows($runfcourse)){
				while($rrow = mysqli_fetch_assoc($runfcourse)){

		?>
		<tr>
				<td><?php echo $id++ ?></td>
				<td><a href="add_lesson.php?id=<?php echo $rrow['id'] ?>"><?php echo $rrow['c_name'] ?></a></td>
				<td><?php echo $rrow['c_author'] ?></td>
				<td>
					<a href="edit_course.php?cid=<?php echo $rrow['id'] ?>" class="btn btn-primary mt-2" >Edit</a>
					<a href="del_course.php?del_course=<?php echo $rrow['id'] ?>" class="btn btn-danger mt-2" >Delete</a>
				</td>
			</tr>
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