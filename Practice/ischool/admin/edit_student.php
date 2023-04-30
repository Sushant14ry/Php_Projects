<?php
	include('data.php');
	include('top_admin.php');

	$stu_id=$_GET['edit_stud'];

	$edit_student="SELECT * FROM `singup` where stu_id='$stu_id' ";
		$edit_student_run=mysqli_query($con,$edit_student);
		$row=mysqli_fetch_assoc($edit_student_run);

		if(isset($_POST['save'])){

		$name=$_POST['name'];
		$email=$_POST['email'];
		$Occupation=$_POST['Occupation'];

		$image_name=$_FILES['img']['name'];
		$image_tmp_name=$_FILES['img']['tmp_name'];

		$destination="images/".$image_name;
		move_uploaded_file($image_tmp_name, $destination);

		unlink("images/".$image_tmp_name);


		$update_students="UPDATE `singup` SET stu_name='$name',stu_email='$email',stu_occ='$Occupation',stu_img='$destination' where stu_id='$stu_id' ";
		$run_update=mysqli_query($con,$update_students);
		
		if($run_update){
						?>
						<script>
							alert('Success');
						</script>
					<?php
				}else{
					?>
						<script>
							alert('failed');
						</script>
					<?php
				}
			header('location:students.php');
	}
?>

<div class="col-sm-6 mt-2 m-auto p-3 bg-secondary">
	<h3 class="text-center text-white bg-dark p-2">Update Student</h3>
	<form action="#" method="post" enctype="multipart/form-data">
		
		<div class="form-group text-white mt-2">
			<label>Name</label>
			<input type="text" class="form-control" value="<?php echo $row['stu_name'] ?>"  placeholder="Update your Name" name="name">
		</div>
		<div class="form-group text-white">
			<label>Email</label>
			<input type="email" class="form-control" value="<?php echo $row['stu_email'] ?>"  placeholder="Update your Email" name="email">
		</div>
		<div class="form-group text-white">
			<label>Occupation</label>
			<input type="text" class="form-control" value="<?php echo $row['stu_occ'] ?>"  placeholder="Update your Occupation" name="Occupation">
		</div>
		<div class="form-group text-white">
			<label>Image</label>
			<input type="file" class="form-control-file" name="img">
		</div>
		
		<div class="form-group text-white">
			<input type="submit" name="save" class="form-control btn btn-primary font-weight-bold">
	</form>
</div>
<?php
	include('foot.php');

?>

