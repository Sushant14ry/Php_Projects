<?php
	
	function pr($arr){
		echo "<pre>";
		print_r($arr);
	}

	function prx($arr){
		echo "<pre>";
		print_r($arr);
		die();
	}

	function get_safe_value($con,$str){
		if($str != '' ){
			$str=trim($str);
		return mysqli_real_escape_string($con,$str);
		}
	}	

	function get_product($con,$limit='',$cat_id='',$product_id='',$is_best_seller=''){
		$sql="SELECT product. *,categories.categories 
		FROM product,categories WHERE product.status=1 ";
		if($cat_id !=''){
			$sql .= " and product.categories_id =$cat_id";
		}
		if($product_id !=''){
			$sql .= " and product.id = $product_id ";
		}
		if($is_best_seller !=''){
			$sql .= " and product.best_seller = 1 ";
		}
		$sql .= " and product.categories_id = categories.id ";
		$sql .= " order by product.id desc";

		if($limit!=''){
			$sql .=" limit $limit";
		}
		
		$res=mysqli_query($con,$sql);
		$data=array();
		while($row=mysqli_fetch_assoc($res)){
			$data[]=$row;
		}
		return $data;
	}

	function wishlist_add($con,$uid,$pid){
		$added_on=date('Y-m-d h:i:s');
		mysqli_query($con,"INSERT INTO `wishtlist`(`user_id`, `product_id`, `added_on`) VALUES ('$uid','$pid','$added_on')");
	}
?>