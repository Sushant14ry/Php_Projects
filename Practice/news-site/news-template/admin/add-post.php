<?php include "header.php"; 
if($_SESSION['user_role'] == '0'){
   header('location:http://localhost/Practice/news-site/news-template/admin/post.php');
}
?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Post</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="<?php $_SERVER['PHP_SELF'];  ?>" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="postdesc" class="form-control" rows="5"  required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Category</label>
                          <select name="category" class="form-control">
                            <option disabled>Select Category</option>
                            <?php   
                              include 'config.php';

                              $sql = "SELECT * FROM category";
                              $run = mysqli_query($con,$sql) or die('Failed to Insert Post');
                              while($rows = mysqli_fetch_assoc($run)){

                              echo "<option value='{$rows['cid']}'>{$rows['c_name']}</option>";
                                
                                }
                            ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Post image</label>
                          <input type="file" name="fileToUpload" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>


    <?php
      include 'config.php';
   if(isset($_FILES['fileToUpload'])){
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    @$file_ext = strtolower(end(explode('.',$file_name)));
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
      $title = $_POST['post_title'];
      $description = $_POST['postdesc'];
      $Category = $_POST['category'];
      $date = date('d M Y');
      $author = $_SESSION['username'];

      $Insert = "INSERT INTO post(p_title,p_description,p_category,p_img,date,author) VALUES('$title','$description','$Category','$file_name','$date','$author');";
      $Insert .= "UPDATE category SET post = post+1 WHERE cid = $Category ";

      $result = mysqli_multi_query($con,$Insert) or die("Failed to Insert Post");
      if($result){
     
      }else{
    echo "<div class= 'alert alert-danger' >Query Failed</div>";
      }
  ?>

