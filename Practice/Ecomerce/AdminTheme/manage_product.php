<?php
require('top.php');

$categories_id='';
$name='';
$mrp='';
$price='';
$qty='';
$image='';
$short_desc='';
$description='';
$meta_title='';
$meta_desc='';
$meta_keyword='';
$best_seller='';


   // Update Categories start
   $categories='';
   $msg='';

   $image_required='required';

   if(isset($_GET['id']) && $_GET['id'] !=''){
      $image_required='';
      $id = get_safe_value($con,$_GET['id']);
      $sql = "SELECT * FROM product WHERE id='$id' ";
      $res= mysqli_query($con,$sql);
      $check = mysqli_num_rows($res);
      if($check > 0){
         $row=mysqli_fetch_assoc($res);
         $categories_id=$row['categories_id'];
         $name=$row['name'];
         $mrp=$row['mrp'];
         $price=$row['price'];
         $qty=$row['qty'];
         $image=$row['image'];
         $short_desc=$row['short_desc'];
         $description=$row['description'];
         $meta_title=$row['meta_title'];
         $meta_desc=$row['meta_desc'];
         $meta_keyword=$row['meta_keyword'];
         $best_seller=$row['best_seller'];
      }else{
         header("location:product.php");
         die();
      }

   }

         // Insert Query Start
   
   if(isset($_POST['submit'])){
      $categories_id = get_safe_value($con,$_POST['categories_id']);
      $name = get_safe_value($con,$_POST['name']);
      $mrp = get_safe_value($con,$_POST['mrp']);
      $price = get_safe_value($con,$_POST['price']);
      $qty = get_safe_value($con,$_POST['qty']);
      $short_desc = get_safe_value($con,$_POST['short_desc']);
      $description = get_safe_value($con,$_POST['description']);
      $meta_desc = get_safe_value($con,$_POST['meta_desc']);
      $meta_keyword = get_safe_value($con,$_POST['meta_keyword']);
      $best_seller = get_safe_value($con,$_POST['best_seller']);
      

      $sql = "SELECT * FROM product WHERE name='$name' ";
      $res= mysqli_query($con,$sql);  /// Categories already Exists start
      $check = mysqli_num_rows($res);
      if($check > 0){
            if(isset($_GET['id']) && $_GET['id'] !=''){
                  $getData=mysqli_fetch_assoc($res);
                  if($id==$getData['id']){

                  }else{
                     $msg="Product Already Exists.";
                  }
            }else{
               $msg="Product Already Exists.";
            }
         

      }

   if($_FILES['image']['type'] !=''
    && ($_FILES['image']['type'] != 'image/png' && $_FILES['image']['type'] != 'image/jpg' && $_FILES['image']['type'] != 'image/jpeg') ){

      $msg="Please Select Only png,jpg and peg Image Format";

   }

      if($msg==''){
         if(isset($_GET['id']) && $_GET['id'] !=''){
            if($_FILES['image']['name'] !=''){
                $image =rand(111111,999999).'_'.$_FILES['image']['name']; 
              move_uploaded_file($_FILES['image']['tmp_name'],'../media/product/'.$image);
              $update_sql="UPDATE `product` SET `categories_id`='$categories_id',`name`='$name',`mrp`='$mrp',`price`='$price',`qty`='$qty',`image`='$image',`short_desc`='$short_desc',`description`='$description',`meta_title`='$meta_title',`meta_desc`='$meta_desc',`meta_keyword`='$meta_keyword',`best_seller`='$best_seller' WHERE id='$id'";

            }else{
                $update_sql="UPDATE `product` SET `categories_id`='$categories_id',`name`='$name',`mrp`='$mrp',`price`='$price',`qty`='$qty',`short_desc`='$short_desc',`description`='$description',`meta_title`='$meta_title',`meta_desc`='$meta_desc',`meta_keyword`='$meta_keyword',`best_seller`='$best_seller' WHERE id='$id'";
            }
            mysqli_query($con,$update_sql);    //update Categories to join Insert Categories

         }else{

              $image =rand(111111,999999).'_'.$_FILES['image']['name']; 
              move_uploaded_file($_FILES['image']['tmp_name'],'../media/product/'.$image);

            mysqli_query($con, "INSERT INTO `product`(`categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `best_seller`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES ('$categories_id','$name','$mrp','$price','$qty','$image','$short_desc','$description','$best_seller','$meta_title','$meta_desc','$meta_keyword',1)");
         }
         header("location:product.php");
         die();

         } /// Categories already Exists End

      }


?>
<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header"><strong>Product</strong> Form</div>
               <form method="post" enctype="multipart/form-data">
                  <div class="card-body card-block">
                  <div class="form-group">
                     <label for="categories" class=" form-control-label">Categories</label>
                     <select class="form-control" name="categories_id">
                       <option>Selecet Categories</option> 
                       <?php
                           $sql1 = "SELECT id,categories FROM categories ORDER BY categories ASC";
                           $result=mysqli_query($con,$sql1);
                           while($row=mysqli_fetch_assoc($result)){
                              if($row['id']==$categories_id){
                                  echo "<option selected value=".$row['id']." >".$row['categories']."</option>";
                              }else{
                                  echo "<option value=".$row['id']." >".$row['categories']."</option>";

                              }
                             
                           }
                         ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="name" class=" form-control-label">Product Name</label>
                     <input type="text" name="name" placeholder="Enter Product Name" class="form-control" required value="<?php echo $name ?>">
                  </div>
                  <div class="form-group">
                     <label for="categories" class=" form-control-label">Best Seller</label>
                     <select class="form-control" name="best_seller" required>
                        <option value="">Select</option>
                        <?php
                           if($best_seller==1){
                              echo '<option value="1" selected>Yes</option>
                        <option value="0">No</option>';
                           }elseif($best_seller==0){
                                 echo '<option value="1">Yes</option>
                                 <option value="0" selected>No</option>';
                           }else{
                              echo '<option value="1">Yes</option>
                        <option value="0">No</option>';

                           }
                        ?>
                        
                       
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="mrp" class=" form-control-label">Product Mrp</label>
                     <input type="text" name="mrp" placeholder="Enter Product Name" class="form-control" required value="<?php echo $mrp  ?>">
                  </div>

                  <div class="form-group">
                     <label for="price" class=" form-control-label">Product Price</label>
                     <input type="text" name="price" placeholder="Enter Product Name" class="form-control" required value="<?php echo $price ?>">
                  </div>
                  <div class="form-group">
                     <label for="quantity" class=" form-control-label">Product Quantity</label>
                     <input type="text" name="qty" placeholder="Enter Product Name" class="form-control" required value="<?php echo $qty ?>">
                  </div>
                  <div class="form-group">
                     <label for="image" class=" form-control-label">Product Image</label>
                     <input type="file" name="image" class="form-control" <?php echo $image_required ; ?>>
                  </div>
                  <div class="form-group">
                     <label for="short_desc" class=" form-control-label">Short Description</label>
                     <textarea name="short_desc" class="form-control" placeholder="Enter product short description" required  ><?php echo $short_desc ?></textarea>
                  </div>
                  <div class="form-group">
                     <label for="description" class=" form-control-label">Description</label>
                     <textarea name="description" class="form-control" placeholder="Enter product description" required  ><?php echo $description ?></textarea>
                  </div>
                  <div class="form-group">
                     <label for="meta_title" class=" form-control-label">Meta Title</label>
                     <textarea name="meta_title" class="form-control" placeholder="Enter product Meta Title"  ><?php echo $meta_title ?></textarea>
                  </div>
                  <div class="form-group">
                     <label for="meta_desc" class=" form-control-label">Meta Description</label>
                     <textarea name="meta_desc" class="form-control" placeholder="Enter product Meta Description"><?php echo $meta_desc ?></textarea>
                  </div>
                  <div class="form-group">
                     <label for="meta_keyword" class=" form-control-label">Meta Keywoard</label>
                     <textarea name="meta_keyword" class="form-control" placeholder="Enter product Meta Keywoard"><?php echo $meta_keyword ?></textarea>
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