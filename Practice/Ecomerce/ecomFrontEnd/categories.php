<?php
	require('top.php');
	
	$cat_id=get_safe_value($con,$_GET['id']);
	if($cat_id >0){
		$get_product=get_product($con,'',$cat_id);
	}else{
?>
<script>
window.location.href="index.php";
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
							<span class="breadcrumb-item active">Products</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- Start Product Grid -->
<section class="htc__product__grid bg__white ptb--100">
	<div class="container">
		<div class="row">
			<?php if(count($get_product)>0) { ?>
			<div class="col-lg-12 col-md-12  col-sm-6 col-xs-12">
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
						
						<!-- Start List And Grid View -->
						<ul class="view__mode" role="tablist">
							<li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
							<li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
						</ul>
						<!-- End List And Grid View -->
					</div>
					<!-- Start Product View -->
					<div class="row">
						<div class="shop__grid__view__wrap">
							<div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
								<?php
								$get_product=get_product($con,'',$cat_id);
								foreach($get_product as $list){
								?>
								<!-- Start Single Category -->
								<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
									<div class="category">
										<div class="ht__cat__thumb">
											<a href="single_product.php?id=<?php echo $list['id'] ?>">
												<img src="../media/product/<?php echo $list['image'];  ?>" alt="product images">
											</a>
										</div>
										<div class="fr__hover__info">
											<ul class="product__action">
												<li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i class="icon-heart icons"></i></a></li>
												<li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id'] ?>','add')"><i class="icon-handbag icons"></i></a></li>
												
											</ul>
										</div>
										<div class="fr__product__inner">
											<h4><a href="single_product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a></h4>
											<ul class="fr__pro__prize">
												<li class="old__prize"><?php echo $list['mrp'] ?></li>
												<li><?php echo $list['price'] ?></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- End Single Category -->
								<?php } ?>
								
								
							</div>
							<div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix">
								<div class="col-xs-12">
									<div class="ht__list__wrap">
										<?php
											foreach($get_product as $list){
										?>
										<!-- Start List Product -->
										<div class="ht__list__product">
											<div class="row">
												<div class="col-md-4 col-sm-4 ">
													<div class="ht__list__thumb">
														<a href="single_product.php?id=<?php echo $list['id'] ?>"><img src="../media/product/<?php echo $list['image'];  ?>" alt="product images" width='300px'></a>
													</div>
												</div>
												<div class="col-md-2 col-sm-2"></div>
												<div class="col-md-6 col-sm-6">
													<div class="htc__list__details">
														<h2><a href="single_product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a></h2>
														<ul  class="pro__prize">
															<li class="old__prize"><?php echo $list['mrp'] ?></li>
															<li><?php echo $list['price'] ?></li>
														</ul>
														<ul class="rating">
															<li><i class="icon-star icons"></i></li>
															<li><i class="icon-star icons"></i></li>
															<li><i class="icon-star icons"></i></li>
															<li class="old"><i class="icon-star icons"></i></li>
															<li class="old"><i class="icon-star icons"></i></li>
														</ul>
														<p><?php echo substr($list['description'],0,100) ?></p>
														<div class="fr__list__btn">
															<a class="fr__btn" href="cart.html">Add To Cart</a>
														</div>
													</div>
												</div>
											</div>
											
											
										</div>
										<!-- End List Product -->
										<?php
											}
										?>
										
									</div>
								</div>
							</div>
						</div>
						<?php  }else{
							echo "<h1>Data Not Found</h1>";
						}
						?>
					</div>
					<!-- End Product View -->
				</div>
				
			</div>
		</div>
	</div>
</section>
<!-- End Product Grid -->
<?php
require('footer.php');
?>