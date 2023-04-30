<?php
  include("data.php");
  include("top.php");
?>

  <div class="container p-5 ml-auto">
    <div style="border: 1px solid black;padding: 12px;font-family: 'Sansita Swashed', cursive;">
      <h2 class="text-center font-weight-bold">Recover Password</h2>
      <hr>
    <div class="row pt-2">
      <div class="col-md-8 m-auto">
        <form action="#" method="post">
        <label><i class="fas fa-envelope"></i> Email Id</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email Id" required><br>
        <input type="submit" name="submit" id="submit" value="Send OTP" class="form-control btn btn-primary font-weight-bold"><br>
        <a href="login.php" class="font-weight-bold p-2" style="float: right;text-decoration: none;">Already have an Account ?</a>
        <a href="Singup.php" class="font-weight-bold p-2" style="float: right; text-decoration: none;">Create New Account</a>
        </form>
      </div>
    </div>
    </div> 
  </div>

<?php
  include("foot.php");
?>