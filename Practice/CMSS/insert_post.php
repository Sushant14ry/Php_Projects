<?php
	include 'conect.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert New Post</title>
</head>
<body>
	<form method="Post" action="insert_post.php" enctype="multipart/form-data">
		<table align="center" border="10px" width="800px">
			<tr>
				<td align="center" colspan="5" bgcolor="yellow;"><h1>Insert New Post</h1></td>
			</tr>
			<tr>
				<td align="right">Post Title</td>
				<td><input type="text" name="title" size="80"></td>
			</tr>
			<tr>
				<td align="right" s>Post Author</td>
				<td><input type="text" name="author" size="80"></td>
			</tr>
			<tr>
				<td align="right">Post pic</td>
				<td><input type="file" name="photo"></td>
			</tr>
			<tr>
				<td align="right">Post Content</td>
				<td><textarea name="content" style="width: 675px; height: 175px;"></textarea></td>
			</tr>
			<tr>			
				<td align="center" colspan="5"><input type="submit" name="submit" value="Publish Now"></td>
			</tr>
			
		</table>
		
	</form>


</body>
</html>

<?php

	if(isset($_POST['submit'])){

		$title =$_POST['title'];
		$date  = date('d/m/y');
		$author =$_POST['author'];
		$content =$_POST['content'];
		$file = $_FILES['photo'];


		if($title == '' or $author == '' or $content =='' ){
			echo "<script>alert('Any Field is Empty')</script>";
			exit();
		}

		$filename = $file['name'];
		$filepath = $file['tmp_name'];
		$file_error = $file['error'];

		if($file_error == 0){
			$des = 'upload/'.$filename;
			// echo $des;
			move_uploaded_file($filepath,$des );

		$insert = "INSERT INTO post(post_title,post_date,post_author,post_img,post_content
) VALUES('$title','$date','$author','$des','$content')";
		
		if(mysqli_query($con,$insert)){
			echo "<script>alert('Post is Submited')</script>";
			header('location:http://localhost/Practice/CMSS/admin%20pannel/index.php?view=view');
		}else{
			echo "<script>alert('Failed to Post')</script>";
		}



		} 


	}
?>






