<?php
	require('top.php');
	$orders_id=$_GET['oid'];
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
										
										<th class="product-thumbnail">Product Name</th>
										<th class="product-name"><span class="nobr">Product Image</span></th>
										<th class="product-price"><span class="nobr">Quantity</span></th>
										<th class="product-stock-stauts"><span class="nobr">Price</span></th>
										<th class="product-add-to-cart"><span class="nobr">Total Price</span></th>
										
									</tr>
								</thead>
								<tbody>
									<?php
									$uid=$_SESSION['USER_ID'];
									$res=mysqli_query($con,"SELECT DISTINCT(order_detail.id) , order_detail.*,product.name,product.image FROM order_detail,product,orders WHERE order_detail.order_id='$orders_id' AND orders.user_id='$uid' AND order_detail.product_id=product.id");
										$total_price=0;
										while($rows=mysqli_fetch_assoc($res)){
											$total_price=$total_price+($rows['price']*$rows['qty']);
									?>
									<tr>
										<td class="product-name"><?php echo $rows['name']; ?></td>
										<td class="product-name"><img src="../media/product/<?php echo $rows['image']; ?>" alt="full-image" width="200px" height="200px"></td>
										<td class="product-name"><?php echo $rows['qty']; ?></td>
										<td class="product-name"><?php echo $rows['price']; ?></td>
										<td class="product-name"><?php echo $rows['price']*$rows['qty']; ?></td>
										
										
									</tr>
								<?php } ?>
								<tr>
										
										<td class="product-name" colspan="2"></td>
										<td class="product-name" colspan="2"><b>Total Price</b></td>
										<td class="product-name"><?php echo $total_price ?></td>
										
										
									</tr>
									
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