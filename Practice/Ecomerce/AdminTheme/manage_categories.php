<?php
require('top.php');

   // Update Categories start
   $categories='';
   $msg='';

   if(isset($_GET['id']) && $_GET['id'] !=''){
      $id = get_safe_value($con,$_GET['id']);
      $sql = "SELECT * FROM categories WHERE id='$id' ";
      $res= mysqli_query($con,$sql);
      $check = mysqli_num_rows($res);
      if($check > 0){
         $row=mysqli_fetch_assoc($res);
         $categories=$row['categories'];
      }else{
         header("location:categories.php");
         die();
      }

   }

         // Insert Query Start
   
   if(isset($_POST['submit'])){
      $categories = get_safe_value($con,$_POST['categories']);

      $sql = "SELECT * FROM categories WHERE categories='$categories' ";
      $res= mysqli_query($con,$sql);  /// Categories already Exists start
      $check = mysqli_num_rows($res);
      if($check > 0){
            if(isset($_GET['id']) && $_GET['id'] !=''){
                  $getData=mysqli_fetch_assoc($res);
                  if($id==$getData['id']){

                  }else{
                     $msg="Categories Already Exists.";
                  }
            }else{
               $msg="Categories Already Exists.";
            }
         

      }

      if($msg==''){
         if(isset($_GET['id']) && $_GET['id'] !=''){
            mysqli_query($con, "UPDATE categories SET categories='$categories' WHERE id='$id' ");    //update Categories to join Insert Categories

         }else{
            mysqli_query($con, "INSERT INTO categories(categories,status) VALUES('$categories','1')");
         }
         header("location:categories.php");
         die();

         } /// Categories already Exists End

      }


?>
<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header"><strong>Categories</strong> Form</div>
               <form method="post">
                  <div class="card-body card-block">
                  <div class="form-group">
                     <label for="categories" class=" form-control-label">Categories</label>
                     <input type="text" id="categories" name="categories" placeholder="Enter Categories Name" class="form-control" required value="<?php echo $categories ?>">
                  </div>
                  <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                  <span id="payment-button-amount">Submit</span>
                  </button>
                     <div class="text-danger pt-3" >
                     <?php  echo $msg ?>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
require('footer.php');
?>