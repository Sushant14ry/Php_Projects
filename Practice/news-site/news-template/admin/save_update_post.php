<?php
	include 'config.php';

	if(empty($_FILES['new-image']['name'])){
		$file_name = $_POST['old-image'];
	}else{
		$errors = array();

		$file_name = $_FILES['new-image']['name'];
		$file_size = $_FILES['new-image']['size'];
		$file_tmp = $_FILES['new-image']['tmp_name'];
		$file_type = $_FILES['new-image']['type'];
		$file_ext = strtolower(end(explode('.',$file_name)));
		$extenstion = array('jpeg','jpg','png');

		if(in_array($file_ext, $extenstion) === false){
			$errors[] = "This Extenstion file is not Allow , Please Choose Jpeg , JPG or PNG Files";
		}

		if($file_size > 2097252 ){
			$errors[] = "File Size Must be 2Mb Or Lower";
		}

		if(empty($errors) == true){
			move_uploaded_file($file_tmp,"upload/".$file_name);
		}else{
			print_r($errors);
			die();
		}

	}

	$sql = "UPDATE post SET p_title='{$_POST["p_title"]}',p_description='{$_POST["postdesc"]}',p_category='{$_POST["category"]}',p_img='{$_POST['old-image']}' WHERE p_id='{$_POST["p_id"]}';";

	if($_POST['old_category'] != $_POST["category"] ){
	  $sql .= "UPDATE category SET post= post - 1 WHERE cid = {$_POST['old_category']};";
	  $sql .= "UPDATE category SET post= post + 1 WHERE cid = {$_POST["category"]};";
	}
	// echo $sql;
	// die();


	$result = mysqli_multi_query($conn,$sql);

	if($result){
		header("location:http://localhost/Practice/news-template/admin/post.php");
	}else{
		echo "Query Failed";
	}

?>