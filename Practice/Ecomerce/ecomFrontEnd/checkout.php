<?php
	require('top.php');

	if(!isset($_SESSION['cart']) || count($_SESSION['cart']) ==0){
		?>
		<script type="text/javascript">
			window.location.href='index.php';
		</script>
	<?php	
	}
?>
	<?php
			$cart_total=0;
			foreach($_SESSION['cart'] as $key => $val){
			$productArr=get_product($con,'','',$key);
			$price=$productArr[0]['price'];
			$qty=$val['qty'];
			$cart_total=$cart_total+($price*$qty);
}

	if(isset($_POST['submit'])){
		$address=$_POST['address'];
		$city=$_POST['city'];
		$zip=$_POST['zip'];
		$payment_type=$_POST['payment_type'];
		$user_id=$_SESSION['USER_ID'];
		$total_price=$cart_total;
		$payment_status='pending';
		if($payment_type=='cod'){
			$payment_status='Success';
		}
		$order_status='1';
		$added_on=date('Y-m-d h:i:s');

	$sql="INSERT INTO `orders`(`user_id`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `payment_status`, `order_status`, `added_on`) VALUES ('$user_id','$address','$city','$zip','$payment_type','$total_price','$payment_status','$order_status','$added_on')";
		$res=mysqli_query($con,$sql);


			$order_id=mysqli_insert_id($con);
			foreach($_SESSION['cart'] as $key => $val){
			$productArr=get_product($con,'','',$key);
			$price=$productArr[0]['price'];
			$qty=$val['qty'];
			$cart_total=$cart_total+($price*$qty);

			$sql2="INSERT INTO `order_detail`(`order_id`, `product_id`, `qty`, `price`) VALUES ('$order_id','$key','$qty','$price')";
			mysqli_query($con,$sql2);

		}

		unset($_SESSION['cart']);

		?>
		<script type="text/javascript">
			window.location.href='thank_you.php';
		</script>
	<?php

	}

										
	?>


<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
	<div class="ht__bradcaump__wrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="bradcaump__inner">
						<nav class="bradcaump-inner">
							<a class="breadcrumb-item" href="index.html">Home</a>
							<span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
							<span class="breadcrumb-item active">checkout</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- cart-main-area start -->
<div class="checkout-wrap ptb--100">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="checkout__inner">
					<div class="accordion-list">
						<div class="accordion">
							
							<?php
								$accordion_class='accordion__title';
								if(!isset($_SESSION['USER_LOGIN'])){
								$accordion_class='accordion__hide';
							?>
							<div class="accordion__title">
								Checkout Method
							</div>
							<div class="accordion__body">
								<div class="accordion__body__form">
									<div class="row">
										<div class="col-md-6">
											<div class="checkout-method__login">
												<form id="contact-form" action="login_submit.php" method="post">
													<h5 class="checkout-method__title">Login</h5>
													<div class="single-input">
														<label for="user-email">Email Address</label>
														<input type="text" name="username" placeholder="Your Email*" style="width:100%" required>
													</div>
													<div class="single-input">
														<label for="user-pass">Password</label>
														<input type="text" name="pass" placeholder="Your Password*" style="width:100%" required>
													</div>
													
													<div class="contact-btn">
														<button type="submit" name="login" class="fv-btn">Login</button>
													</div>
												</form>
											</div>
										</div>
										<div class="col-md-6">
											<div class="checkout-method__login">
												<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
													<h5 class="checkout-method__title">Register</h5>
													<div class="single-input">
														<label for="user-email">Name</label>
														<input type="text" name="name" id="name" placeholder="Your Name*" style="width:100%" required>
													</div>
													<div class="single-input">
														<label for="user-email">Email Address</label>
														<input type="text" name="email" id="email" placeholder="Your Email*" style="width:100%" required>
													</div>
													<div class="single-input">
														<label for="user-mobile">mobile</label>
														<input type="text" name="mobile" id="email" placeholder="Your Email*" style="width:100%" required>
													</div>
													
													<div class="single-input">
														<label for="user-pass">Password</label>
														<input type="text" name="password" id="password" placeholder="Your Password*" style="width:100%" required>
													</div>
													<div class="contact-btn">
														<button type="submit" name="register" class="fv-btn">Register</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
							<div class="<?php echo $accordion_class  ?>">
								Address Information
							</div>
						<form action="#" method="post">
							<div class="accordion__body">
								<div class="bilinfo">
										<div class="row">
											<div class="col-md-12">
												<div class="single-input">
													<input type="text" name="address" placeholder="Street Address" required>
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="single-input">
													<input type="text" name="city" placeholder="City/Country" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="single-input">
													<input type="text" name="zip" placeholder="Post code/ zip" required>
												</div>
											</div>
											
										</div>
									
								</div>
							</div>
							<div class="<?php echo $accordion_class  ?>">
								payment information
							</div>
							<div class="accordion__body">
								<div class="paymentinfo">
									<div class="single-method" >
										<input type="radio" name="payment_type" value="cod" required> COD 
										&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="payment_type" value="esewa" required> E-Sewa
										
									</div><br>
									<!-- <div class="single-method">
										<a href="#" class="paymentinfo-credit-trigger"><i class="zmdi zmdi-long-arrow-right"></i>Paypal</a>
									</div> -->
								<input type="submit" name="submit" value="Submit" class="btn btn-primary">
								</div>
							</div>
							
						</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="order-details">
					<h5 class="order-details__title">Your Order</h5>
					<div class="order-details__item">
						<?php
							$cart_total=0;
							foreach($_SESSION['cart'] as $key => $val){
								$productArr=get_product($con,'','',$key);
								$pname=$productArr[0]['name'];
								$mrp=$productArr[0]['mrp'];
								$price=$productArr[0]['price'];
								$image=$productArr[0]['image'];
								$qty=$val['qty'];
								$cart_total=$cart_total+($price*$qty);
										
							?>
						<div class="single-item">
							<div class="single-item__thumb">
								<img src="../media/product/<?php echo $image  ?>" alt="ordered item">
							</div>
							<div class="single-item__content">
								<a href="#"><?php echo $pname; ?></a>
								<span class="price"><?php echo $price*$qty ?></span>
							</div>
							<div class="single-item__remove">
								<a href="javascript:void(0)" onclick="manage_cart('<?php echo $key ?>','remove')" ><i class="zmdi zmdi-delete"></i></a>
							</div>
						</div>

					<?php } ?>
						
					</div>
					<div class="ordre-details__total">
						<h5>Order total</h5>
						<span class="price"><?php echo $cart_total; ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- cart-main-area end -->
<?php
	require('footer.php');
?>

<?php
		if(isset($_POST['register'])){
			$name=get_safe_value($con,$_POST['name']);
			$email=get_safe_value($con,$_POST['email']);
			$mobile=get_safe_value($con,$_POST['mobile']);
			$password=get_safe_value($con,$_POST['password']);

			$register ="INSERT INTO `users`(`name`, `password`, `email`, `mobile`) VALUES ('$name','$password','$email','$mobile')";
			$result= mysqli_query($con,$register);

		}
?>

<?php

?>