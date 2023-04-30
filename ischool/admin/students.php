<?php
	include('data.php');
	include('top_admin.php');
?>

<div class="ml-3">
	<h5 class=" text-white font-weight-bold p-1 bg-dark">List of Students</h5>
	<table class="table">
		<thead>
			<tr>
				<th>Order ID</th>
				<th>Student Name</th>
				<th>Email</th>
				<th>Picture</th>
				<th>Action</th>
			</tr>
		</thead>
		<body>
			<?php
				$id=1;
				$Courses="SELECT * FROM singup";
				$run_course=mysqli_query($con,$Courses);
				if($check=mysqli_num_rows($run_course)>0){
					while($rows=mysqli_fetch_assoc($run_course)){
			?>
			<tr>
				<td><?php echo $id++ ?></td>
				<td><?php echo $rows['stu_name'] ?></td>
				<td><?php echo $rows['stu_email'] ?></td>
				<td><img src="<?php echo $rows['stu_img']; ?>" width="80px" ></td>
				<td>
					<a href="edit_student.php?edit_stud=<?php echo $rows['stu_id'] ?>" class="btn btn-primary mt-2" >Edit</a>
					<a href="del_student.php?del_stud=<?php echo $rows['stu_id'] ?>"  class="btn btn-danger mt-2">Delete</a>
				</td>
			</tr>
			<?php 
					}
				}
			?>
		</body>
	</table>
</div>
<div class="fixed-bottom mb-5 " style="margin-left: 90%;">
	<a href="add_students.php"><i class="fas plus fa-plus"></i></a>
</div>

<?php
	include('foot.php');

?>


