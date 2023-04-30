<?php
	include('data.php');
	include('top_admin.php');
?>

<div class="ml-3">
	<h5 class=" text-white font-weight-bold p-1 bg-dark">List of Lessons</h5>
	<table class="table">
		<thead>
			<tr>
				<th>Lesson ID</th>
				<th>Lesson Name</th>
				<th>Lession Description</th>
				<th>Lesson Duration</th>
				<th>Course ID</th>
				<th>Lesson Video</th>
				<th>Operation</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$idsc=$_GET['checkid'];

				$id=1;
				$Courses="SELECT * FROM lesson WHERE course_id=$idsc ";
				$run_course=mysqli_query($con,$Courses);
				if($check=mysqli_num_rows($run_course)>0){
					while($rows=mysqli_fetch_assoc($run_course)){
			?>
			<tr>
				<td><?php echo $id++ ?></td>
				<td><?php echo $rows['lesson_name'] ?></a></td>
				<td><?php echo $rows['lesson_desc'] ?></td>
				<td><?php echo $rows['lession_duration'] ?></td>
				<td><?php echo $rows['course_id'] ?></td>
				<td>
					<video src="Ipad - 2988.mp4"></video>
				</td>
				<td>
					<a href="edit_course.php?cid=<?php echo $rows['lesson_id'] ?>">Edit</a>
					<a href="del_lesson.php?del_course=<?php echo $rows['lesson_id'] ?>">Delete</a>
				</td>
			</tr>
			<?php 
					}
				}
			?>
		</tbody>
		
	</table>
</div>
<div class="fixed-bottom mb-5 " style="margin-left: 90%;">
	<a href="add_lesson.php"><i class="fas plus fa-plus"></i></a>
</div>


