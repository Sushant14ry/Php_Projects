<?php
	include 'conect.php';
?>
<?php

	 	$title = $_POST['title'];
	 	$Post_body = $_POST['body'];
		$time = date('d/m/y');
	 	$role = $_POST['role'];
	 	$Author = $_POST['author'];
	 	$Meta_tag = $_POST['meta'];
	 	$Des = $_POST['des'];
	 	$Location = $_POST['loc'];
	 	@$file = $_FILES['photo'];

	if($title == '' or $Author == '' or $Post_body =='' ){
			echo "<script>alert('Any Field is Empty')</script>";
			exit();
		}

		$filename = $file['name'];
		$filepath = $file['tmp_name'];
		$file_error = $file['error'];

		if($file_error == 0){
			$des = 'upload/'.$filename;
			// echo $des;
			move_uploaded_file($filepath,$des);

			$post = "INSERT INTO post (title,body,picture,date,role,author,meta_tags,meta_des,Location) VALUES('$title','$Post_body','$des','$time','$role','$Author','$Meta_tag','$Des','$Location')";

			$run = mysqli_query($con,$post);

			if($run){
				echo "<script>alert('Post is Published')</script>";
			}else{
				echo "<script>alert('Failed to Published')</script>";
			}

		}
	

?>

