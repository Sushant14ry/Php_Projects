<?php
require('top.php');
if(isset($_GET['type']) && $_GET['type'] != ''){
$type = get_safe_value($con,$_GET['type']);
// Active and Deactive Query Start
if($type == 'status'){
$operation = get_safe_value($con,$_GET['operation']);
$id = get_safe_value($con,$_GET['id']);

if($operation =='active'){
$status='1';
}else{
$status='0';
}
$update_product = "UPDATE product SET Status='$status' WHERE id='$id' ";
mysqli_query($con,$update_product);
}
// Active and Deactive Query end
// Delete Query Start
if($type == 'delete'){
$id = get_safe_value($con,$_GET['id']);

$delete_sql = "DELETE FROM product WHERE id='$id' ";
mysqli_query($con,$delete_sql);
}
// Delete Query end
}
$sql = "SELECT product.* ,categories.categories FROM product,categories WHERE product.categories_id=categories.id ORDER BY product.id DESC";
$res = mysqli_query($con,$sql);
?>
<div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h1 class="box-title">Products</h1>
                  <h4 class="box-title btn btn-primary p-2"><a href="manage_product.php" class="text-white">Add Products</a></h4>
               </div>
               <div class="card-body--">
                  <div class="table-stats order-table ov-h">
                     <table class="table ">
                        <thead>
                           <tr>
                              
                              <th class="serial">#</th>
                              <th>ID</th>
                              <th>Categories</th>
                              <th>Name</th>
                              <th>Image</th>
                              <th>Mrp</th>
                              <th>Price</th>
                              <th>QTY</th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $i =1;
                           while($row=mysqli_fetch_assoc($res)){?>
                           
                           <tr>
                              <td><?php echo $i++ ?></td>
                              <td><?php echo $row['id'];  ?></td>
                              <td><?php echo $row['categories'];  ?></td>

                              <td><?php echo $row['name'];  ?></td>
                              <td><img src="../media/product/<?php echo $row['image'];  ?>"/></td>
                              <td><?php echo $row['mrp'];  ?></td>
                              <td><?php echo $row['price'];  ?></td>
                              <td><?php echo $row['qty'];  ?></td>
                              <td>
                                 <?php
                                 if($row['status'] == 1){
                                 echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
                                 }else{
                                 echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span>&nbsp;";
                                 }
                                 echo "<span class='badge badge-delete btn btn-primary text-white'><a href='manage_product.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
                                 
                                 echo "<span class='badge badge-delete btn btn-danger text-white'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>&nbsp;";
                                 
                                 ?>
                              </td>
                           </tr>
                           <?php
                           }
                           ?>
                           
                           
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
require('footer.php');
?>