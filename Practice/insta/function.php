 <?php
 	include('connection.php');

 	function insertPost(){
 		if(isset($_POST['sub'])){
 			global $con;
 			global $user_id;



 			$content =htmlentities($_POST['content']);
 			$upload_image=$_FILES['upload_image']['name'];
 			$image_tmp=$_FILES['upload_image']['tmp_name'];
 			$random_number=rand(1,100);

 			if(strlen($content) > 250){
 				echo "<script>alert('please Use 250 or Less than 250 words')</script>";
 				echo "<script>window.open('home.php')</script>";
 			}else{
 				if(strlen($upload_image) >= 1 && strlen($content) >=1 ){
 					move_uploaded_file($image_tmp,'images/$upload_image.$random_number');
 					$insert="INSERT INTO `posts`(`user_id`, `post_content`, `upload_image`, `post_date`) VALUES ('$user_id','$content','$upload_image.$random_number',NOW())";
 					$run=mysqli_query($con,$insert);

 					if($run){
 						echo "<script>alert('Your Post Updated Comment Ago !')</script>";
 						echo "<script>window.open('home.php')</script>";

 					$update="UPDATE users SET post='yes' WHERE user_id='user_id' ";	
 					$run_update=mysqli_query($con,$update);
 					}
 					exit();
 				}else{
 					if($content == '' && $upload_image='' ){
 						echo "<script>alert('Error Occured While Uploading')</script>";
 						echo "<script>window.open('home.php')</script>";
 					}else{
 						if($content==''){
 							move_uploaded_file($image_tmp,'images/$upload_image.$random_number');
 							$insert="INSERT INTO `posts`(`user_id`, `post_content`, `upload_image`, `post_date`) VALUES ('$user_id','No','$upload_image.$random_number',NOW())";
 							$run=mysqli_query($con,$insert);

 						if($run){
	 						echo "<script>alert('Your Post Updated Comment Ago !')</script>";
	 						echo "<script>window.open('home.php')</script>";

		 					$update="UPDATE users SET post='yes' WHERE user_id='user_id' ";	
		 					$run_update=mysqli_query($con,$update);
		 				}
		 					exit();

 						}else{
 							$insert="INSERT INTO `posts`(`user_id`, `post_content`,`post_date`) 
 							VALUES ('$user_id','No',NOW())";
 							$run=mysqli_query($con,$insert);

 						if($run){
	 						echo "<script>alert('Your Post Updated Comment Ago !')</script>";
	 						echo "<script>window.open('home.php')</script>";

		 					$update="UPDATE users SET post='yes' WHERE user_id='user_id' ";	
		 					$run_update=mysqli_query($con,$update);

 						}
 					}
 				}
 			}

 		}
 	}
 	}

 ?>
