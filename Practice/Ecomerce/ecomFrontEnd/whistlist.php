<?php
	require('top.php');
	if(!isset($_SESSION['USER_LOGIN'])){
		?>
		<script type="text/javascript">
			window.location.href='index.php';
		</script>
		<?php
	}


	$uid=$_SESSION['USER_ID'];

	$res=mysqli_query($con,"SELECT product.name,product.image,product.price,product.mrp,wishtlist.id FROM product,wishtlist WHERE wishtlist.product_id=product.id AND wishtlist.user_id='$uid'");

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
							<span class="breadcrumb-item active">Wishlist</span>
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
										<th class="product-remove"><span class="nobr">Remove</span></th>
										<th class="product-thumbnail">Image</th>
										<th class="product-name"><span class="nobr">Product Name</span></th>
										<th class="product-price"><span class="nobr"> Product Price </span></th>
										<th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
										<th class="product-add-to-cart"><span class="nobr">Add To Cart</span></th>
									</tr>
								</thead>
								<tbody>
									<?php
										while($rows=mysqli_fetch_assoc($res)){
									?>
									<tr>
										<td class="product-remove"><a href="whistlist.php?whistlist_id=<?php echo $rows['id']; ?>">×</a></td>
										<td class="product-thumbnail"><a href="#"><img src="../media/product/<?php echo $rows['image'];  ?>" alt="" /></a></td>
										<td class="product-name"><a href="#"><?php echo $rows['name'];  ?></a></td>
										<td class="product-price"><span class="amount"><?php echo $rows['price'];  ?></span></td>
										<td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
										<td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
									</tr>
								<?php } ?>
									
								</tbody>

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