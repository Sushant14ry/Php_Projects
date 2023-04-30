<?php
	include('data.php');

	$feed_id=$_GET['id'];
	
	$del_feedback="DELETE FROM feedback WHERE id='$feed_id' ";
	$run=mysqli_query($con,$del_feedback);
	header('location:feedback.php');


?>