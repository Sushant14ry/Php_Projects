<?php
  include("data.php");
  include("top.php");


  if(isset($_SESSION["stu_email"])){
    header('location:admin/admin_dash.php');
  }
  
?>
  
  <div class="container p-5 ml-auto">
    <div style="border: 1px solid black;padding: 12px;font-family: 'Sansita Swashed', cursive;">
      <h2 class="text-center font-weight-bold">Login Form</h2>
      <hr>
    <div class="row pt-2">
      <div class="col-md-8 m-auto">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <label><i class="fas fa-envelope"></i> Email Id</label>
        <input type="email" class="form-control" name="stu_log_email" id="stu_log_email" placeholder="Enter Your Email Id" required><br>
        <label><i class="fas fa-lock"></i> Password</label>
        <input type="password" class="form-control" name="stu_log_password" id="stu_log_password" placeholder="Enter Your Password" required><br>
        <input type="submit" name="login" id="submit" value="Login" class="form-control btn btn-primary font-weight-bold"><br>
        <a href="fpass.php" class="font-weight-bold p-2" style="float: right; text-decoration: none;">Forgot Password ?</a>
        <a href="Singup.php" class="font-weight-bold p-2" style="float: right; text-decoration: none;">Create New Account</a>
        </form>
        
        <?php
          if(isset($_POST['login'])){

            $email=$_POST['stu_log_email'];
            $pass=$_POST['stu_log_password'];

           $check="SELECT stu_id,stu_name,stu_email,stu_img FROM singup WHERE stu_email='{$email}' AND stu_pass='{$pass}'  ";
            $run=mysqli_query($con,$check) or die('Query Failed');
            if(mysqli_num_rows($run)>0){
              while($row=mysqli_fetch_assoc($run)){
                session_start();

                $_SESSION["user_id"]=$row['stu_id'];
                $_SESSION["stu_name"]=$row['stu_name'];
                $_SESSION["stu_email"]=$row['stu_email'];
                $_SESSION["stu_img"]=$row['stu_img'];

                header('location:index.php');

              }

            }else{
              echo '<div class="alert alert-danger">Username and password are not matched.</div>';
            }



          }

        ?>  
      </div>
    </div>
    </div> 
  </div>

<?php
  include("foot.php");
?>



