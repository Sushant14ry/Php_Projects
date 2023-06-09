<?php
	include 'config.php';

	if(isset($_FILES['fileToUpload'])){
		$errors = array();

		$file_name = $_FILES['fileToUpload']['name'];
		$file_size = $_FILES['fileToUpload']['size'];
		$file_tmp = $_FILES['fileToUpload']['tmp_name'];
		$file_type = $_FILES['fileToUpload']['type'];
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

	session_start();

	$title = mysqli_real_escape_string($conn,$_POST['post_title']);
	$description = mysqli_real_escape_string($conn,$_POST['postdesc']);
	$catagory = mysqli_real_escape_string($conn,$_POST['category']);
	$date = date('d M Y');
	$author = $_SESSION['user_id'];
	
	

	$sql = "INSERT INTO post(title,description,category,post_date,author,post_img) VALUES('$title','$description','$catagory','$date','$author','$file_name');";

	$sql .="UPDATE category SET post = post + 1 WHERE category_id = '$catagory' ";

	if(mysqli_multi_query($conn,$sql)){
		header('location:http://localhost/Practice/news-template/admin/post.php');
	}else{
		echo "<div class= 'alert alert-danger' >Query Failed</div>";
	}


?>