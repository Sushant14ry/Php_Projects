<?php

	include'connection.php';

			// 	$cart_total=0;
			// foreach($_SESSION['cart'] as $key => $val){
			// 	$productArr=get_product($con,'','',$key);
			// 	$price=$productArr[0]['price'];
			// 	$qty=$val['qty'];
			// 	$cart_total=$cart_total+($price*$qty);
			// }


	if(isset($_POST['submit'])){
		$address=$_POST['address'];
		$city=$_POST['city'];
		$zip=$_POST['zip'];
		$payment_type=$_POST['payment_type'];
		$user_id= $_SESSION['USER_ID'];
		// $total_price=$cart_total;
		$payment_status='pending';
		if($payment_type=='cod'){
			$payment_status='Success';
		}
		$order_status='pending';
		$added_on=date('Y-m-d h:i:s');

	$sql="INSERT INTO `orders`(`user_id`, `address`, `city`, `pincode`, `payment_type`, `payment_status`, `order_status`, `added_on`) VALUES ('$user_id','$address','$city','$zip','$payment_type','$payment_status','$order_status','$added_on')";
		$res=mysqli_query($con,$sql);

	}
?>