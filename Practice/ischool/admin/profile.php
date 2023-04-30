<?php
	include('data.php');
	include('top_admin.php');

	if(isset($_SESSION["stu_email"])){
		header('location:');
	}
?>
<div class="col-md-6 m-auto">
	<?php
		$user_email=$_SESSION["stu_email"];
		$profile="SELECT * FROM `singup` WHERE stu_email='$user_email' ";
		$run=mysqli_query($con,$profile);
		while($row=mysqli_fetch_assoc($run)){
	?>
	<div class="ml-5">
		<img src="<?php echo $row['stu_img']  ?>" width="350px" height="300px" style="border-radius: 50%;">
	</div>
	<div class="mt-4">
		<p style="font-size: 2rem" class="font-weight-bold">Name: <span><?php echo $row['stu_name']  ?></span></p>
		<p style="font-size: 2rem" class="font-weight-bold">Email: <span><?php echo $row['stu_email']  ?></span></p>
		<p style="font-size: 2rem" class="font-weight-bold">Occupation: <span><?php echo $row['stu_occ']  ?></span></p>
	</div>
	<a href="edit_profile.php" class="btn btn-primary mt-4" style="margin-left: 30%;">Edit Profile</a>
	<?php } ?>
</div>
<?php
	include('foot.php');

?>


