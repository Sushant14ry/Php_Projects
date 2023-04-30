<?php
  include("data.php");
  include("top.php");
?>

  <div class="container p-5 ml-auto">
    <div style="border: 1px solid black;padding: 12px;font-family: 'Sansita Swashed', cursive;">
      <h2 class="text-center font-weight-bold">Registeration Form</h2>
      <hr>
    <div class="row pt-2">
      <div class="col-md-8 m-auto">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label><i class="fas fa-user"></i> Full Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Full Name" required><br>
        <label><i class="fas fa-envelope"></i> Email Id</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email Id" required><br>
        <label><i class="fas fa-lock"></i> New Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Set Your Password" required><br>
        <input type="submit" name="submit" id="submit" onclick="addStu()" class="form-control btn btn-primary font-weight-bold"><br>
        <a href="login.php" class="font-weight-bold p-2" style="float: right;text-decoration: none;">Already have an Account</a>
        </form>
      </div>
    </div>
    </div> 
  </div>

<?php
  include("foot.php");
?>

<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $check="SELECT * FROM `singup` WHERE stu_email ='$email'";
    $result=mysqli_query($con,$check);
    if($runn=mysqli_fetch_assoc($result)){
      ?>
      <script>
       alert("Email Id is Already Exists ! Please Use Another Email Id");
    </script>
      <?php
    }else{
      $singup="INSERT INTO `singup`(`stu_name`, `stu_email`, `stu_pass`,`role`) VALUES ('$name','$email','$pass',0)";
    $run=mysqli_query($con,$singup);
    ?>
      <script>
        window.location.href='login.php';
      </script>
    <?php
    }
    
  }
?>
