

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
                  <h1 class="admin-heading">Add User</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <?php
                    if(isset($_POST['save'])){
                      $fname = $_POST['fname'];
                      $lname = $_POST['lname'];
                      $username = $_POST['user'];
                      $password = md5($_POST['pass']);
                      $role = $_POST['role'];

                      $sql = "INSERT INTO user(fname,lname,username,password,role) VALUES('$fname','$lname','$username','$password','$role')";
                      $run = mysqli_query($con,$sql) or die("Quary Failed to Insert User");
                      if($run){
                         header('location:http://localhost/Practice/news-site/news-template/admin/users.php');
                      }else{
                        echo "Failed to Insert User";
                      }

                    }
                  ?>
                  <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" placeholder="Username" required>
                      </div>

                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="pass" class="form-control" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>
                      </div>
                      <input type="submit"  name="save" class="btn btn-primary" value="Save" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>
