<?php
	include('data.php');
	include('top_admin.php');
?>

<div class="col-sm-6 mt-2 p-3 " style="float: left;">
	<h3 class="text-center text-white bg-dark p-2">Write Your Feedback</h3>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		<div class="form-group text-white mt-2 m">
			<img src="<?php echo $_SESSION["stu_img"] ?>" class="img-circle"  width="300px" align="center">
		</div>
		<div class="form-group text-white mt-2 m">
			<input type="text" class="form-control" disabled value="<?php echo $_SESSION["stu_name"]  ?>" name="user">
		</div>
		<div class="form-group text-white">
			<label class="font-weight-bold">Write Your Feedback</label>
			<textarea class="form-control" rows="6" name="feed" placeholder="Write Your Feedback...." required></textarea>
		</div>
		
		<div class="form-group text-white">
			<input type="submit" name="save" class="form-control btn btn-primary font-weight-bold">
		</div>
	</form>
	<?php 
	
	$user_name=$_SESSION["stu_name"];

	if(isset($_POST['save'])){
		
		$feed=$_POST['feed'];

		$insert="INSERT INTO `feedback`(`user_name`, `feedback`) VALUES ('$user_name','$feed')";
		$run=mysqli_query($con,$insert);
	}

?>
</div>

<div class="col-sm-6" style="overflow: scroll;height: 600px;">
	<h2 class="text-center font-weight-bold">Show Feedbacks</h2>
	<?php
		$show_feed="SELECT * FROM feedback WHERE user_name='$user_name' ";
		$run_feed=mysqli_query($con,$show_feed);
		while($row=mysqli_fetch_assoc($run_feed)){
	?>
	<a href="del_feed.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" style="float: right;font-weight: bold;">Delete</a>
	<p class="bg-success p-3 "><?php echo $row['feedback'] ?></p>
<?php } ?>
</div>
<?php
	include('foot.php');

?>


