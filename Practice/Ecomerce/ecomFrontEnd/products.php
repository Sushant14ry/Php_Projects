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
							<span class="breadcrumb-item active">Product</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<section class="htc__product__grid bg__white ptb--100">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="htc__product__rightidebar">
					<div class="htc__grid__top">
						<div class="htc__select__option">
							<select class="ht__select" onchange="short_product_drop()" id="short_product_id">
								<option value="">Default softing</option>
								<option value="price_low_high">Short by price low to high</option>
								<option value="price_high_low">Sort by Price high to low</option>
								<option value="new">Sort by new Product</option>
								<option value="old">Sort by old Product</option>
							</select>
						</div>
						
					</div>
					<?php

						$sql="SELECT * FROM product ";
						$res=mysqli_query($con,$sql);						
						while($rows=mysqli_fetch_assoc($res)){
					?>
					<!-- Start Product View -->
					<div class="row">
						<div class="shop__grid__view__wrap">
							<div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
								<!-- Start Single Product -->
								<div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
									<div class="category">
										<div class="ht__cat__thumb">
											<a href="single_product.php?id=<?php echo $rows['id'] ?>">
												<img src="../media/product/<?php echo $rows['image'];  ?>" alt="product images">
											</a>
										</div>
										<div class="fr__hover__info">
											<ul class="product__action">
												<li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>
												<li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>
												<li><a href="#"><i class="icon-shuffle icons"></i></a></li>
											</ul>
										</div>
										<div class="fr__product__inner">
											<h4><a href="single_product.php?id=<?php echo $rows['id'] ?>"><?php echo $rows['name']  ?></a></h4>
											<ul class="fr__pro__prize">
												<li class="old__prize"><?php echo $rows['mrp']  ?></li>
												<li><?php echo $rows['price']  ?></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- End Single Product -->
								
								<?php }  ?>
								
							</div>
							
						</div>
					</div>
					<!-- End Product View -->
				</div>
				
			</div>
			
		</div>
	</div>
</section>

<!-- product end -->

<script type="text/javascript">
	
	function short_product_drop(){
		var short_product_id=$("#short_product_id").val();
		alert(short_product_id);

	}


</script>

<?php
	require('footer.php');
?>


