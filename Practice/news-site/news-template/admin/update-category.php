<?php include "header.php"; 
if($_SESSION['user_role'] == '0'){
   header('location:http://localhost/Practice/news-site/news-template/admin/post.php');
}
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                <?php
                  
                    include 'config.php';

                    $c_id = $_GET['up'];

                    $sql = "SELECT * FROM category WHERE cid = '$c_id' ";
                    $run = mysqli_query($con,$sql);
                   
                      while($rows = mysqli_fetch_assoc($run)){

                ?>
                  <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $rows['cid'] ?>" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $rows['c_name'] ?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php   }  ?>
                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>


<?php

  if(isset($_POST['sumbit'])){

    $cat_id = $_POST['cat_id'];
    $cat_name = $_POST['cat_name'];

    $update = "UPDATE category SET cid = '$cat_id', c_name = '$cat_name' WHERE cid= '$cat_id' ";
    $runn = mysqli_query($con,$update) or die("Update Query Failed");
    if($runn){
      header("location:http://localhost/Practice/news-site/news-template/admin/category.php");
    }else{
      echo "Failed to Update Query";
    }
  }


?>
