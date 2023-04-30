<?php
      require('top.php');

            if(isset($_GET['type']) && $_GET['type'] != ''){
         $type = get_safe_value($con,$_GET['type']); 

            // Active and Deactive Query Start
      
         // Delete Query Start

         if($type == 'delete'){ 
         $id = get_safe_value($con,$_GET['id']); 
         
         $delete_sql = "DELETE o,od FROM orders o JOIN order_detail od ON o.id=od.order_id WHERE o.id='$id' ";
         mysqli_query($con,$delete_sql);
         

         }
         // Delete Query end
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
                              
                              <th class="product-thumbnail">Order ID</th>
                              <th class="product-name"><span class="nobr">Order Date</span></th>
                              <th class="product-price"><span class="nobr">Address </span></th>
                              <th class="product-stock-stauts"><span class="nobr">Payment Type</span></th>
                              <th class="product-add-to-cart"><span class="nobr">Payment Status</span></th>
                              <th class="product-add-to-cart"><span class="nobr">Order Status</span></th>
                              <th class="product-add-to-cart"><span class="nobr">Action</span></th>

                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           
                           $res=mysqli_query($con,"SELECT orders .*,order_status.name AS order_status_str FROM orders,order_status WHERE  order_status.id=orders.order_status");
                              while($rows=mysqli_fetch_assoc($res)){
                           ?>
                           <tr>
                              <td class="product-add-to-cart"><a href="A_order_master_detail.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['id']; ?></a></td>
                              <td class="product-name"><?php echo $rows['added_on']; ?></td>
                              <td class="product-name">
                                 <?php echo $rows['address']; ?>
                                 <?php echo $rows['city']; ?>
                                 <?php echo $rows['pincode']; ?>
                              </td>
                              <td class="product-name"><?php echo $rows['payment_type']; ?></td>
                              <td class="product-name"><?php echo $rows['payment_status']; ?></td>
                              <td class="product-name"><?php echo $rows['order_status_str']; ?></td>
                                <td>
                                 <?php 
                                    echo "<span class='badge badge-delete btn btn-danger text-white'><a href='?type=delete&id=".$rows['id']."'>Delete</a></span>";
                                 ?>
                                 </td>
                              
                              
                           </tr>
                        <?php } ?>
                           
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