<?php
	include('top.php');

	$user_name=$_SESSION["stu_name"];
?>

<h2 class="text-center mt-2">Welcome : <?php echo $user_name ?></h2>

<!-- Start Dashboard Section -->
<div class="container">
	<div class="row">
		<?php
			  if($_SESSION["stu_role"] == 1){

			?>
		<!-- Start Card Section  -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>Register User</h2><hr>
			<?php
				$count_courses="SELECT * FROM register";
				$course_run=mysqli_query($con,$count_courses);
				if($check=mysqli_num_rows($course_run)){

			?>
			<h4 class="mt-5">No. of Total Users : <?php echo $check ?> </h4>
			<?php } ?>
			<a href="users.php" class="btn btn-primary mt-5">View All Register Users</a>
		</div>
		<!-- End Card Section  -->
		<!-- Start Card Section  -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>Total Books</h2><hr>
			<?php
				$count_courses="SELECT * FROM book";
				$course_run=mysqli_query($con,$count_courses);
				if($check=mysqli_num_rows($course_run)){

			?>
			<h4 class="mt-5">No. of Available Books : <?php echo $check ?> </h4>
			<?php } ?>
			<a href="manage_book.php" class="btn btn-primary mt-4">View All Books</a>
		</div>
		<!-- End Card Section  -->
		<!-- Start Card Section  -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>Book Categories</h2><hr>
			<?php
				$count_courses="SELECT * FROM categories";
				$course_run=mysqli_query($con,$count_courses);
				if($check=mysqli_num_rows($course_run)){
			?>
			<h4 class="mt-4">No. of Books Categories : <?php echo $check ?> </h4>
			<?php } ?>
			<a href="manage_cat.php" class="btn btn-primary mt-4">View All Categories</a>
		</div>
		<!-- End Card Section  -->
		<!-- Start Card Section  -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>Book Authors</h2><hr>
			<?php
				$count_courses="SELECT * FROM author";
				$course_run=mysqli_query($con,$count_courses);
				if($check=mysqli_num_rows($course_run)){
			?>
			<h4 class="mt-5">No. of Book Authors : <?php echo $check ?> </h4>
			<?php } ?>
			<a href="manage_author.php" class="btn btn-primary mt-5">View All Authors</a>
		</div>
		<!-- End Card Section  -->
	<?php } ?>
		<!-- Start Card Section  -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>Books Issued</h2><hr>
			<?php
				$count_courses="SELECT * FROM issue_book";
				$course_run=mysqli_query($con,$count_courses);
				if($check=mysqli_num_rows($course_run)){
			?>
			<h4 class="mt-5">No. of Books Issued : <?php echo $check ?> </h4>
			<?php } ?>
			<a href="book_issued_detail.php" class="btn btn-primary mt-4">View All Issued Books</a>
		</div>
		<!-- End Card Section  -->
		<!-- Start Card Section  -->
		<div class="col-md-3 bg-secondary m-4 p-4 text-center text-white">
			<h2>Book Not Returned </h2><hr>
			<h4 class="mt-4">No. of Not Returned Book : 4 </h4>
			<a href="not_return.php" class="btn btn-primary mt-4">View Not Returned Books </a>
		</div>
		<!-- End Card Section  -->

	</div>
</div>

<?php
	include('foot.php');

?>