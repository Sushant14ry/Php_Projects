<?php include "header.php";
    
    include 'config.php';

    if($_SESSION['user_role'] == '0'){
   header('location:http://localhost/Practice/news-site/news-template/admin/post.php');
}

 ?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Post</h1>
    </div>
     <?php
            //  $post_id = $_POST['post_id']
            //  $title = $_POST['post_title'];
            // $description = $_POST['postdesc'];
            // $Category = $_POST['category'];

        ?>
    <div class="col-md-offset-3 col-md-6">
       
        <?php  

            $p_id = $_GET['p_up'];

            $sql = "SELECT * FROM post WHERE p_id = '$p_id' ";

            $result = mysqli_query($con,$sql) or die("Query Failed to fetch date in Update");
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){

        ?>
        <!-- Form for show edit-->
        <form action="save_update_post.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="post_id"  class="form-control" value="<?php echo $row['p_id']; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="post_title"  class="form-control" id="exampleInputUsername" value="<?php echo $row['p_title']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="postdesc" class="form-control"  required rows="5">
                   <?php echo $row['p_description']; ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select class="form-control" name="category">
                     <?php

                               $sql1 = "SELECT * FROM category ";
                               $result1 = mysqli_query($conn,$sql1);
                               if(mysqli_num_rows($result) > 0){
                                  while($rows1 = mysqli_fetch_assoc($result1)){
                                 if($rows['category'] == $rows1['cid'] ){
                                    $selected = "Selected";

                                 }else{
                                    $selected = "";
                                 }   

                                    echo "<option {$selected} value='{$row['cid']}'> {$rows1['c_name']}</option>";

                                  }

                                }

                              ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Post image</label>
                <input type="file" name="new-image">
                <img  src="upload/post_1.jpg" height="150px">
                <input type="hidden" name="old-image" value="<?php echo $row['p_img']; ?>">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
        </form>
        <!-- Form End -->
        <?php              
                }
            }

        ?>

      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
