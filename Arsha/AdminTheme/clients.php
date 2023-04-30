<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h2 class="box-title text-center">Our Clients</h2>
                           <a href="add_client.php" class="btn btn-primary">Add Clients</a>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table text-center">
                                 <thead>
                                    <tr>
                                       <th class="serial">SN.</th>
                                       <th >Client Name</th>
                                       <th >Client Image</th>
                                       <th >Client Number</th>
                                       <th >Client Address</th>
                                       <th colspan="2" >Operation</th>
                                    </tr>
                                 </thead>
                                 <?php
                                 	$i = 1;

                                 	$show_service="SELECT * FROM `clients` ";
                                 	$run_service=mysqli_query($conn,$show_service);
                                 	while($rows=mysqli_fetch_assoc($run_service)){
                                 ?>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $i++  ?></td>
                                       <td><?php echo $rows['c_name']  ?></td>
                                       <td><img src="<?php echo $rows['c_img']  ?>"></td>
                                       <td><?php echo $rows['c_num']  ?></td>
                                       <td><?php echo $rows['c_address']  ?></td>
                                       <td>
                                          <a href="edit_client.php?id=<?php echo $rows['id']  ?>" class="btn btn-primary">Edit</a>
                                          <a href="delete_client.php?id=<?php echo $rows['id']  ?>" class="btn btn-danger">Delete</a>
                                       </td>
                                    </tr>
                                 </tbody>
                                 <?php
                                 	}
                                 ?>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>

