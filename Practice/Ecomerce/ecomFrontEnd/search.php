<?php
	require('top.php');
		$search_id=$_GET['str'];
	
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
							<span class="breadcrumb-item active">Search </span>
							<span class="breadcrumb-item active"> > <?php echo $search_id  ?> </span>
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
			<div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
				<div class="htc__product__rightidebar">
					<div class="htc__grid__top">
						<div class="htc__select__option">
							<select class="ht__select">
								<option>Default softing</option>
								<option>Sort by popularity</option>
								<option>Sort by average rating</option>
								<option>Sort by newness</option>
							</select>
						</div>
						
					</div>
					<?php
						$sql="SELECT * FROM product WHERE name LIKE '%$search_id%' or description LIKE '%$search_id%'  ";
												$res=mysqli_query($con,$sql);
						while($rows=mysqli_fetch_assoc($res)){
					?>
					<!-- Start Product View -->
					<div class="row">
						<div class="shop__grid__view__wrap">
							<div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
								<!-- Start Single Product -->
								<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
									<div class="category">
										<div class="ht__cat__thumb">
											<a href="single_product.php?id=<?php echo $rows['id'] ?>">
												<img src="../media/product/<?php echo $rows['image'];  ?>" alt="product images">
											</a>
										</div>
										<div class="fr__hover__info">
											<ul class="product__action">
												<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i class="icon-heart icons"></i></a></li>
												<li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id'] ?>','add')"><i class="icon-handbag icons"></i></a></li>
												
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
			<div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
				<div class="htc__product__leftsidebar">
					<!-- Start Best Sell Area -->
					<div class="htc__recent__product">
						<h2 class="title__line--4">best seller</h2>
						<div class="htc__recent__product__inner">
							<!-- Start Single Product -->
							<div class="htc__best__product">
								<div class="htc__best__pro__thumb">
									<a href="product-details.html">
										<img src="images/product-2/sm-smg/1.jpg" alt="small product">
									</a>
								</div>
								<div class="htc__best__product__details">
									<h2><a href="product-details.html">Product Title Here</a></h2>
									<ul class="rating">
										<li><i class="icon-star icons"></i></li>
										<li><i class="icon-star icons"></i></li>
										<li><i class="icon-star icons"></i></li>
										<li class="old"><i class="icon-star icons"></i></li>
										<li class="old"><i class="icon-star icons"></i></li>
									</ul>
									<ul  class="pro__prize">
										<li class="old__prize">$82.5</li>
										<li>$75.2</li>
									</ul>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="htc__best__product">
								<div class="htc__best__pro__thumb">
									<a href="product-details.html">
										<img src="images/product-2/sm-smg/2.jpg" alt="small product">
									</a>
								</div>
								<div class="htc__best__product__details">
									<h2><a href="product-details.html">Product Title Here</a></h2>
									<ul class="rating">
										<li><i class="icon-star icons"></i></li>
										<li><i class="icon-star icons"></i></li>
										<li><i class="icon-star icons"></i></li>
										<li class="old"><i class="icon-star icons"></i></li>
										<li class="old"><i class="icon-star icons"></i></li>
									</ul>
									<ul  class="pro__prize">
										<li class="old__prize">$82.5</li>
										<li>$75.2</li>
									</ul>
								</div>
							</div>
							<!-- End Single Product -->
							<!-- Start Single Product -->
							<div class="htc__best__product">
								<div class="htc__best__pro__thumb">
									<a href="product-details.html">
										<img src="images/product-2/sm-smg/1.jpg" alt="small product">
									</a>
								</div>
								<div class="htc__best__product__details">
									<h2><a href="product-details.html">Product Title Here</a></h2>
									<ul class="rating">
										<li><i class="icon-star icons"></i></li>
										<li><i class="icon-star icons"></i></li>
										<li><i class="icon-star icons"></i></li>
										<li class="old"><i class="icon-star icons"></i></li>
										<li class="old"><i class="icon-star icons"></i></li>
									</ul>
									<ul  class="pro__prize">
										<li class="old__prize">$82.5</li>
										<li>$75.2</li>
									</ul>
								</div>
							</div>
							<!-- End Single Product -->
						</div>
					</div>
					<!-- End Best Sell Area -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Product Grid --
<?php
	require('footer.php');
?>