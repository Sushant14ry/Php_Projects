<?php
	include('top_admin.php');

?>
<div class="row mx-5 text-danger">
	<!-- Start Card Section -->
	<div class="col-sm-4 mt-5">
		<div class="card text-white text-center bg-danger mb-3" style="max-width: 18rem;">
			<div class="card-header">Courses</div>
			<div class="card-body">
			<?php
				$count_courses="SELECT * FROM courses";
				$course_run=mysqli_query($con,$count_courses);
				if($check=mysqli_num_rows($course_run)){

			?>
				<h4><?php echo $check ?></h4>
			<?php } ?>
				<a href="#" class="btn text-white">View</a>
			</div>
		</div>
	</div>
	<!-- End Card Section -->
	<div class="col-sm-4 mt-5">
		<div class="card text-white text-center bg-success mb-3" style="max-width: 18rem;">
			<div class="card-header">Students</div>
			<div class="card-body">
				<?php
				$count_students="SELECT * FROM singup";
				$student_run=mysqli_query($con,$count_students);
				if($checks=mysqli_num_rows($student_run)){

			?>
				<h4><?php echo $checks ?></h4>
			<?php } ?>
				
				<a href="#" class="btn text-white">View</a>
			</div>
		</div>
	</div>
	<!-- End Card Section -->
	<div class="col-sm-4 mt-5">
		<div class="card text-white text-center bg-primary mb-3" style="max-width: 18rem;">
			<div class="card-header">Sold</div>
			<div class="card-body">
				<h4>25</h4>
				<a href="#" class="btn text-white">View</a>
			</div>
		</div>
	</div>
	<!-- End Card Section -->
</div>

<!-- Start Second Center Section -->
<div class="ml-3">
	<h3 class="text-center text-white p-1 bg-dark">Course Ordered</h3>
	<table class="table">
		<thead>
			<tr>
				<th>Order ID</th>
				<th>Course ID</th>
				<th>Email ID</th>
				<th>Order Date ID</th>
				<th>Amout</th>
				<th>Action</th>
			</tr>
		</thead>
		<body>
			<tr>
				<td>1</td>
				<td>100</td>
				<td>Sushant chaudhary</td>
				<td>2077/06/22</td>
				<td>2000</td>
				<td>Delete</td>
			</tr>
		</body>
	</table>
</div>

<?php
	include('foot.php');

?>