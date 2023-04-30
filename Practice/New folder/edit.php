<?php
	
	include 'config.php';

$std = $_GET['id'];

$sql="UPDATE simple SET username='$name', email='$email',number='$number',password='$password' WHERE id='$std' ";
$query=mysqli_query($con,$sql);


 header("location:http://localhost/Practice/New%20folder/index.php");


     mysqli_close($conn);

?>