<?php 
    include 'config.php';
    include "header.php";

    if($_SESSION['user_role'] == '0'){
    header('location:http://localhost/Practice/news-template/admin/post.php');
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
                  
                  $cat_id = $_GET['up'];

                  $sql ="SELECT * FROM category WHERE category_id='{$cat_id}' ";
                  $result= mysqli_query($conn,$sql);
                  if(mysqli_num_rows($result)){
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                  <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="cat_id"  class="form-control" value="1" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat_name" class="form-control" value="<?php echo $rows['category_name'] ?>"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php
                       }
                    }
                  ?>

                </div>
              </div>
            </div>
          </div>
<?php include "footer.php"; ?>


<?php
  if(isset($_POST['sumbit'])){

    // $cat_ids = $_POST['cat_id'];
    $cat_names = $_POST['cat_name'];

    $sql = "UPDATE `category` SET `category_name`='$cat_names' WHERE `category_id`= '$cat_id' ";

    $run = mysqli_query($conn,$sql);
    if($run){
      header("location:http://localhost/Practice/news-template/admin/category.php");
    }

    }
  
?>

