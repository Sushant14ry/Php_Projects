<?php
	if(isset($_FILES['image'])){
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";

		 $file_name=$_FILES['image']['name'];
		 $file_size=$_FILES['image']['size'];
		 $file_tmp=$_FILES['image']['tmp_name'];
		 $file_type=$_FILES['image']['type'];

		 if(move_uploaded_file($file_tmp,"post_img/".$file_name)){
		 		echo "Succesfully Update";
		 }else{
		 	echo "could not upload the file";
		 }


	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="image"><br><br>
		<input type="submit" name="">
	</form>

</body>
</html>  

		 if($run_post){
		 	?>
		 	<script>
		 		alert("Post is Submitted")
		 	</script>
		 	<?php
		 }else{
		 	?>
		 	<script>
		 		alert("Failed to Post Submitted")
		 	</script>
		 	<?php
		 }
