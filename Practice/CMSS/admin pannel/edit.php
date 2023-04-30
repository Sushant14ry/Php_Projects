<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:login.php');
	}else{
?>

<!DOCTYPE html>
<html>
<body>

<?php
	include 'conect.php';

?>
<?php

	$edit_id = @$_GET['edit'];

	$query = "SELECT * FROM post WHERE id = '$edit_id' ";
	$run = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($run)){

			$edit_id1 = $row['id'];
			$title = $row ['post_title'];
			$date = $row ['post_date'];
			$author = $row ['post_author'];
			$image = $row ['post_img'];
			$content = $row ['post_content'];


?>
	<form method="Post" action="edit.php?edit_form=<?php echo $edit_id ?>" enctype="multipart/form-data">
		<table align="center" border="10px" width="100px">
			<tr>
				<td align="center" colspan="5" bgcolor="yellow;"><h1>Edit Post</h1></td>
			</tr>
			<tr>
				<td align="right">Post Title</td>
				<td><input type="text" name="title" size="80" value="<?php echo $title  ?>"></td>
			</tr>
			<tr>
				<td align="right" s>Post Author</td>
				<td><input type="text" name="author" size="80" value="<?php echo $author  ?>"></td>
			</tr>
			<tr>
				<td align="right">Post pic</td>
				<td><input type="file" name="photo">
					<img src="../<?php echo $image ?>" width="70px" height="60px">
				</td>
			</tr>
			<tr>
				<td align="right">Post Content</td>
				<td><textarea name="content" style="width: 675px; height: 175px;"><?php echo $content  ?>"</textarea></td>
			</tr>
			<tr>			
				<td align="center" colspan="5"><input type="submit" name="update" value="Update Now"></td>
			</tr>
			
		</table>

	<?php } ?>
		
	</form>

</body>
</html>

<?php
	if(isset($_POST['update'])){

			$update_id = $_GET['edit_form'];

			$title = $row ['post_title'];
			$date = date('y-m-d');
			$author = $row ['post_author'];
			$content = $row ['post_content'];

			// $file = $_FILES['photo'];

			// $filename = $file['name'];
			// $filepath = $file['tmp_name'];
			// $file_error = $file['error'];

			// if($file_error == 0){
			// 	$des = '../upload/'.$filename;
			// 	// echo $des;
			// 	move_uploaded_file($filepath,$des );

			$query = "UPDATE post SET post_title ='$title', post_date = '$date', post_author = '$author', post_content = '$content' WHERE id = '$update_id' ";
			$run = mysqli_query($con,$query);

			if($run){
				echo "file is Updated";
				header('location:http://localhost/Practice/CMSS/admin%20pannel/index.php?view=view');
			}else{
				echo "Fail to update";
			}
	} 

}
?>