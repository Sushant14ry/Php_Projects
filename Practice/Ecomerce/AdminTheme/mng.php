<?php
require('top.php');
   
   $categories='';
   $msg='';

    // Select data from database in edit option
   if(isset($_GET['id']) && $_GET['id'] !=''){
      $id = get_safe_value($con,$_GET['id']);
      $edit_sql = "SELECT * FROM categories WHERE id='$id'";
      $result = mysqli_query($con,$edit_sql);
        $check=mysqli_num_rows($result);
        if($check >0){
         $rows =mysqli_fetch_assoc($result);
         $categories = $rows['categories'];
        }else{
        header('location:categories.php');
      die(); 
      }

   }
    // Select data from database in edit option End



 // insert data from table in databse
   if(isset($_POST['submit'])){
      $categories = get_safe_value($con,$_POST['add_cat']);

       $edit_sql = "SELECT * FROM categories WHERE categories='$categories'";
      $result = mysqli_query($con,$edit_sql);
        $check=mysqli_num_rows($result);
        if($check >0){
         $msg ="This Categories is Already Exist !";

        }else{

      if(isset($_GET['id']) && $_GET['id'] !=''){
            // update date from databse
            $update_data = "UPDATE categories SET categories='$categories' WHERE id = '$id' ";
            mysqli_query($con,$update_data);
        }else{

            $add_categories = "INSERT INTO categories(categories,status) values('$categories','1')";
             mysqli_query($con,$add_categories);
        }
      header('location:categories.php');
      die();
   }
}

  // inser data in darabse End



?>

   <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Add Categories</strong></div>
                           <form method="post">
                           <div class="card-body card-block">
                           <div class="form-group"><label for="add_cat" class=" form-control-label"><i> Categories Name</i></label><input type="text" name="add_cat" placeholder="Enter your Categories name" class="form-control" required value="<?php echo $categories ?>"></div>
                           <button name="submit" type="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Submit</span>
                           </button>
                           <div class="text-danger pt-4"><?php echo $msg ?></div>
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