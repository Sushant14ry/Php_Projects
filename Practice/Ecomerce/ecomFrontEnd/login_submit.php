<?php
	require('connection.php');
	require('function.php');

	$msg='';

	$username=get_safe_value($con,$_POST['username']);
	$password=get_safe_value($con,$_POST['pass']);

	$login = "SELECT * FROM users WHERE email='$username' && password='$password' ";
	$res=mysqli_query($con,$login);
	if($rows=mysqli_fetch_assoc($res)){
		$_SESSION['USER_LOGIN']='yes';
		$_SESSION['USER_ID']=$rows['id'];
		$_SESSION['USER_NANE']=$rows['name'];

		if(isset($_SESSION['WISHLIST_ID']) && $_SESSION['WISHLIST_ID'] !=''){
			wishlist_add($con,$_SESSION['USER_ID'],$_SESSION['WISHLIST_ID']);
			unset($_SESSION['WISHLIST_ID']);
		}

		header('location:index.php');
	}else{
		header('location:login.php');
		$msg="Login Failed.";
	}



?>