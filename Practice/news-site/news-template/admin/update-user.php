<?php include "header.php";

  if($_SESSION['user_role'] == '0'){
   header('location:http://localhost/Practice/news-site/news-template/admin/post.php');
}
 ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <?php
                include 'config.php';

                  if(isset($_POST['submit'])){

                      $user_id = mysqli_real_escape_string($con,$_POST['user_id']);
                      $fname = mysqli_real_escape_string($con, $_POST['f_name']);
                      $lname = mysqli_real_escape_string($con, $_POST['l_name']);
                      $username = mysqli_real_escape_string($con, $_POST['username']);
                      $role = mysqli_real_escape_string($con, $_POST['role']);

                      $update = "UPDATE user SET id = '$user_id',fname= '$fname' , lname = '$lname',username = '$username', role = '$role' WHERE id ='$user_id' ";
                      $result = mysqli_query($con,$update) or die("Quary Failed to update");
                      if($result){
                        header('location:http://localhost/Practice/news-site/news-template/admin/users.php');
                      }
                     } 

              ?>
              <div class="col-md-offset-4 col-md-4">

                <?php
                  
                  $uid = $_GET['uid'];

                    $sql = "SELECT * FROM user WHERE id='$uid' ";
                    $run = mysqli_query($con,$sql);
                    if(mysqli_num_rows($run) > 0){
                      while($rows = mysqli_fetch_assoc($run)){

                ?>

                  <!-- Form Start -->
                  <form  action="<?php $_SERVER['PHP_SELF'];  ?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="<?php echo $rows['id']; ?>" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" value="<?php echo $rows['fname']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" value="<?php echo $rows['lname']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $rows['username']; ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $rows['role']; ?>">
                              <?php
                                if($rows['role'] == 1){

                                  echo '<option value="0">normal User</option>
                                     <option value="1" selected>Admin</option>';
                                }else{
                                  echo '<option value="0" selected>normal User</option>
                              <option value="1">Admin</option>' ;

                                }
                              ?>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!-- /Form -->
                  <?php
                      }

                    }

                  ?>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
