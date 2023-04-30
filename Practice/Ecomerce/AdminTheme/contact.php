<?php
      require('top.php');

      if(isset($_GET['type']) && $_GET['type'] != ''){
         $type = get_safe_value($con,$_GET['type']); 

            // Active and Deactive Query Start
      
         // Delete Query Start

         if($type == 'delete'){ 
         $id = get_safe_value($con,$_GET['id']); 
         
         $delete_sql = "DELETE FROM contact_us WHERE id='$id' ";
         mysqli_query($con,$delete_sql);

         }
         // Delete Query end
      }

      $sql = "SELECT * FROM contact_us ORDER BY id DESC";
      $res = mysqli_query($con,$sql);

?>

<div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h1 class="box-title">Contact Us</h1>
               </div>
               <div class="card-body--">
                  <div class="table-stats order-table ov-h">
                     <table class="table ">
                        <thead>
                           <tr>
                              
                              <th class="serial">#</th>
                              <th class="avatar">ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Number</th>
                              <th>Comments</th>
                              <th>Date</th>
                              <th class="text-center">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $i =1;
                              while($row=mysqli_fetch_assoc($res)){
                              ?>
                           <tr>
                               <td><?php echo $i++ ?></td>
                               <td><?php echo $row['id'];  ?></td>
                               <td><?php echo $row['name']; ?></td>
                               <td><?php echo $row['email']; ?></td>
                               <td><?php echo $row['mobile']; ?></td>
                               <td><?php echo $row['comment']; ?></td>
                               <td><?php echo $row['added_on']; ?></td>
                              <td>
                                 <?php 
                                    echo "<span class='badge badge-delete btn btn-danger text-white'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
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