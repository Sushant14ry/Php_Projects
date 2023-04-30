<?php
	include 'config.php';

	if(empty($_FILES['logo']['name'])){
		$file_name = $_POST['old-logo'];
	}else{
		$errors = array();

		$file_name = $_FILES['logo']['name'];
		$file_size = $_FILES['logo']['size'];
		$file_tmp = $_FILES['logo']['tmp_name'];
		$file_type = $_FILES['logo']['type'];
		$exp = explode('.',$file_name);
		$file_ext =  strtolower(end($exp));

		$extenstion = array('jpeg','jpg','png');

		if(in_array($file_ext, $extenstion) === false){
			$errors[] = "This Extenstion file is not Allow , Please Choose Jpeg , JPG or PNG Files";
		}

		if($file_size > 2097252 ){
			$errors[] = "File Size Must be 2Mb Or Lower";
		}

		if(empty($errors) == true){
			move_uploaded_file($file_tmp,"images/".$file_name);
		}else{
			print_r($errors);
			die();
		}

	}

	$sql = "UPDATE settings SET name = '{$_POST['website_name']}', logo='{$file_name}', foot_desc = '{$_POST['web_footer']}' ";

	$result = mysqli_query($conn,$sql);
	if($result){
		header("location:http://localhost/Practice/news-template/admin/setting.php");
	}else{
		echo "Query Fauled";
	}

?>