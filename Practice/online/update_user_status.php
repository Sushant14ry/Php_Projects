<?php
	session_start();
	include('database.inc.php');
	$uid=$_SESSION['UID'];
	$time=time()+10;

	$sql="UPDATE user SET last_login='$time' WHERE id='$uid' ";

	$res=mysqli_query($con,$sql);
?>