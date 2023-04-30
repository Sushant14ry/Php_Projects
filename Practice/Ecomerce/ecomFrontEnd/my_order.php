<?php
	require('top.php');
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
							<span class="breadcrumb-item active">MY Order List</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- wishlist-area start -->
<div class="wishlist-area ptb--100 bg__white">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="wishlist-content">
					<form action="#">
						<div class="wishlist-table table-responsive">
							<table>
								<thead>
									<tr>
										
										<th class="product-thumbnail">Order ID</th>
										<th class="product-name"><span class="nobr">Order Date</span></th>
										<th class="product-price"><span class="nobr">Address </span></th>
										<th class="product-stock-stauts"><span class="nobr">Payment Type</span></th>
										<th class="product-add-to-cart"><span class="nobr">Payment Status</span></th>
										<th class="product-add-to-cart"><span class="nobr">Order Status</span></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$uid=@$_SESSION['USER_ID'];
									$res=mysqli_query($con,"SELECT orders .*,order_status.name AS order_status_str FROM orders,order_status WHERE orders.user_id='$uid' AND order_status.id=orders.order_status");
										while($rows=mysqli_fetch_assoc($res)){
									?>
									<tr>
										<td class="product-add-to-cart"><a href="my_order_detail.php?oid=<?php echo $rows['id']; ?>"><?php echo $rows['id']; ?></a></td>
										<td class="product-name"><?php echo $rows['added_on']; ?></td>
										<td class="product-name">
											<?php echo $rows['address']; ?>
											<?php echo $rows['city']; ?>
											<?php echo $rows['pincode']; ?>
										</td>
										<td class="product-name"><?php echo $rows['payment_type']; ?></td>
										<td class="product-name"><?php echo $rows['payment_status']; ?></td>
										<td class="product-name"><?php echo $rows['order_status_str']; ?></td>
										
										
									</tr>
								<?php } ?>
									
								</tbody>
								<!-- <tfoot>
								<tr>
									<td colspan="6">
										<div class="wishlist-share">
											<h4 class="wishlist-share-title">Share on:</h4>
											<div class="social-icon">
												<ul>
													<li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
													<li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
													<li><a href="#"><i class="zmdi zmdi-tumblr"></i></a></li>
													<li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
													<li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
												</ul>
											</div>
										</div>
									</td>
								</tr>
								</tfoot> -->
							</table>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- wishlist-area end -->
<?php
	require('footer.php');
?>