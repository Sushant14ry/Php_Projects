<?php

	require('connection.php');
	require('function.php');
	require('add_to_cart.php');


	$pid=get_safe_value($con,$_POST['pid']);
	$type=get_safe_value($con,$_POST['type']);

	if(isset($_SESSION['USER_LOGIN'])){
		$uid=$_SESSION['USER_ID'];
		if(mysqli_num_rows(mysqli_query($con,"SELECT * FROM wishtlist WHERE user_id='$uid' AND product_id='$pid' ")) > 0){

			echo "Already Added";

		}else{
		
			// $added_on=date('Y-m-d h:i:s');
		
			// mysqli_query($con,"INSERT INTO `wishtlist`(`user_id`, `product_id`, `added_on`) VALUES ('$uid','$pid','$added_on')");
			wishlist_add($con,$uid,$pid);

		}
 
 echo	$total_record=mysqli_num_rows(mysqli_query($con,"SELECT * FROM wishtlist WHERE user_id='$uid' "));
		
	}else{
		$_SESSION['WISHLIST_ID']=$pid;
		echo "not_login";
	}


?>