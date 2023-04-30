<!-- Header Section Start -->
<?php
	include('data.php');
	include('header.php');


	session_start();

	if(!isset($_SESSION["stu_email"])){
		header('location:login.php');
	}
?>
<!-- Header Section End -->

	<!-- Start Video background -->
	<div class="container" style="margin-top: 10% ; margin-bottom: 10%">
		<div class="row">
			<div class="col-md-7 m-auto bg-success p-5" disabled>
				<h2>Welcome to E-learning Payment Page</h2>
				<form action="#" method="post">
					<?php 
						$pay_id=$_GET['cid'];
						$user_email=$_SESSION["stu_email"];
						
						$Payment="SELECT * FROM courses WHere id='$pay_id' ";
						$pay_run=mysqli_query($con,$Payment);
						while($row=mysqli_fetch_assoc($pay_run)){

					?>
					<label>Course ID</label>
					<input type="text" class="form-control" value="<?php echo $row['id'] ?>" name="course_id"><br>
					<label>Email ID</label>
					<input type="Email" class="form-control" value="<?php echo $user_email ?>" name="user_email"><br>
					<label>Amount</label>
					<input type="text" class="form-control" value="<?php echo $row['c_sprice'] ?>" name="course_amount"><br>
					<div class="text-center">
						<input type="submit" name="save" class="btn btn-primary m-3 font-weight-bolder" value="CheckOut">
						<input type="submit" name="cancel" class="btn btn-danger m-3 font-weight-bolder" value="Cancel">
					</div>
				<?php } ?>
				</form>
			
			</div>
		</div>
	</div>
	<!-- End Video Background -->

<!-- Footer Section Start	 -->
<?php
	require('footer.php');
?>
<!-- Footer Section End	 -->

	<?php 
					if(isset($_POST['save'])){

						$course_id=$_POST['course_id'];
						$user_email=$_POST['user_email'];
						$course_amount=$_POST['course_amount'];

						$checkout="INSERT INTO checkout (course_id,user_email,course_amount) VALUES('$course_id','$user_email','$course_amount')";
						$run_checkout=mysqli_query($con,$checkout);
						if($run_checkout){
							?>
							<script>
								alert('CheckOut Successfull ! Now You Can Access This Course !!');
								window.location.href='index.php';
							</script>
							<?php
						}else{
							?>
							<script>
								alert('CheckOut Failed ! Can not Access This Course !!');
							</script>
							<?php
						}
					}
				?>