<?php
      require('top.php');
      $orders_id=$_GET['id'];

      if(isset($_POST['update_order_status'])){
           $update_order_status=$_POST['update_order_status'];
           mysqli_query($con,"UPDATE orders SET order_status='$update_order_status' WHERE id='$orders_id'");

      }

?>

<div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h1 class="box-title">Order Master</h1>
               </div>
               <div class="card-body--">
                  <div class="table-stats order-table ov-h">
                     <table class="table">
                        <thead>
                           <tr>
                              
                              <th class="product-thumbnail">Product Name</th>
                              <th class="product-name"><span class="nobr">Product Image</span></th>
                              <th class="product-price"><span class="nobr">Quantity</span></th>
                              <th class="product-stock-stauts"><span class="nobr">Price</span></th>
                              <th class="product-add-to-cart"><span class="nobr">Total Price</span></th>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           
                           $res=mysqli_query($con,"SELECT DISTINCT(order_detail.id) , order_detail.*,product.name,product.image,orders.address,orders.city,orders.pincode FROM order_detail,product,orders WHERE order_detail.order_id='$orders_id'  AND order_detail.product_id=product.id");
                              $total_price=0;
                              while($rows=mysqli_fetch_assoc($res)){
                                  $address=$rows['address'];
                                  $city=$rows['city'];
                                  $pincode=$rows['pincode'];
                                  $total_price=$total_price+($rows['price']*$rows['qty']);
                           ?>
                           <tr>
                              <td class="product-name"><?php echo $rows['name']; ?></td>
                              <td class="product-name"><img src="../media/product/<?php echo $rows['image']; ?>" alt="full-image"></td>
                              <td class="product-name"><?php echo $rows['qty']; ?></td>
                              <td class="product-name"><?php echo $rows['price']; ?></td>
                              <td class="product-name"><?php echo $rows['price']*$rows['qty']; ?></td>
                           </tr>
                        <?php } ?>
                        <tr>
                              
                              <td class="product-name" colspan="2"></td>
                              <td class="product-name" colspan="2"><b>Total Price</b></td>
                              <td class="product-name"><?php echo $total_price ?></td>
                              
                              
                           </tr>
                           
                        </tbody>
                     </table>
                        <div id="address_details ">
                           <strong> Address</strong>
                           <?php echo $address ?>, <?php echo $city ?>, <?php echo $pincode ?>
                           <br><br>
                   
                           <strong> Order Status </strong>
                           <?php
                              $order_status =mysqli_fetch_assoc(mysqli_query($con,"SELECT order_status.name FROM order_status, orders WHERE orders.id='$orders_id' AND orders.order_status=order_status.id"));
                              echo $order_status['name'];
                           ?>
                        </div><br>
                        <div>
                           <form method="post">
                              <select class="form-control" name="update_order_status">
                                  <option>Selecet Status</option> 
                              <?php
                              $sql1 = "SELECT * FROM `order_status` ";
                              $result=mysqli_query($con,$sql1);
                              while($row=mysqli_fetch_assoc($result)){
                                 if($row['id']==$categories_id){
                                     echo "<option selected value=".$row['id']." >".$row['name']."</option>";
                                 }else{
                                     echo "<option value=".$row['id']." >".$row['name']."</option>";

                                 }
                              }
                            ?>
                     </select><br>
                     <input type="submit" name="submit" class="form-control btn btn-primary"/>
                           </form>
                        </div>

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