<?php
	include('data.php');
	include('top_admin.php');
?>

<div class="col-sm-6 mt-2 m-auto p-3 bg-secondary">
	<h3 class="text-center text-white bg-dark p-2">Add New Student</h3>
	<form action="add_students.php" method="post" enctype="multipart/form-data">
		<div class="form-group text-white mt-2">
			<label>Name</label>
			<input type="text" class="form-control"  placeholder="Write Your Clients Name" name="name">
		</div>
		<div class="form-group text-white">
			<label>Email</label>
			<input type="email" class="form-control"  placeholder="Write Your Clients Email ID" name="email">
		</div>
		<div class="form-group text-white">
			<label>Password</label>
			<input type="password" class="form-control" placeholder="Write Your Clients Password" name="password">
		</div>
		<div class="form-group text-white">
			<label>Occupation</label>
			<input type="text" class="form-control"  placeholder="Write Your Clients Occupation" name="occupation">
		</div>
		<div class="form-group text-white">
			<input type="submit" name="save" class="form-control btn btn-primary font-weight-bold">
	</form>
</div>
<?php
	include('foot.php');
?>

<?php
	
	if(isset($_POST['save'])){

		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$occupation=$_POST['occupation'];

        $add_student="INSERT INTO `singup`(`stu_name`, `stu_email`, `stu_pass`, `stu_occ`) VALUES ('$name','$email','$password','$occupation')";
        $run_course=mysqli_query($con,$add_student);
        
        ?>
        <script>
        	window.location.href='students.php';
        </script>
        <?php

	}

?>
