<?php
	include('data.php');

	$feed_id=$_GET['id'];
	
	$del_contact="DELETE FROM contact_us WHERE id='$feed_id' ";
	$run=mysqli_query($con,$del_contact);
	header('location:contact_us.php');


?>