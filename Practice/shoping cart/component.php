<?php
	function component(){
		$element="
			<form action="index.php" method="post">
					<div class="card shadow">
						<div>
							<img src="./upload/m20.jpg" alt="image1" class="img-fluid card-img-top">
						</div>
						<div class="card-body">
							<h5 class="card-title">Mouse m20</h5>
							<h6>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half"></i>
							</h6>
							<p>Some Quick Example to build on the card</p>
							<h5>
								<small><s class="text-secondry">4519</s></small>
								<span class="price">$499</span>
							</h5>
							<button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
						</div>
					</div>
				</form>

		";
		echo $element;
	}

?>