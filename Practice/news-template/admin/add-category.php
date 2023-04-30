<?php include "header.php"; 
    include 'config.php';

    if($_SESSION['user_role'] == '0'){
    header('location:http://localhost/Practice/news-template/admin/post.php');
  }


?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>


<!-- Add category Backend Code -->


<?php
  if(isset($_POST['save'])){

    $category = $_POST['cat'];

    $sql = "SELECT category_name FROM category WHERE category_name = '{$category}' ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
      echo "<p style='color:red;text-align:center;margin:10px;'> Category Already Exists.</p>";

    }else{
      $sql2 = "INSERT INTO Category(category_name) VALUES('{$category}')";
      $res = mysqli_query($conn,$sql2);
      if($res){
      header("location:http://localhost/Practice/news-template/admin/category.php");

      }else{
        echo "<p style='color:red;text-align:center;margin:10px;'> Failed to add Category.</p>";
      }
    }

  }
?>  
