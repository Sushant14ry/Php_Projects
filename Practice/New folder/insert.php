<?php
	 include'config.php';
	$name = $_POST['user'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$password =md5($_POST['pass']) ;

	  $sql = "INSERT INTO Simple(username,email,number,password) VALUES('$name','$email','$number','$password')";
      $result  =mysqli_query($con,$sql) OR die("Query Unsuccessfull");

     header("location:http://localhost/Practice/New%20folder/index.php");


     mysqli_close($conn);

?>