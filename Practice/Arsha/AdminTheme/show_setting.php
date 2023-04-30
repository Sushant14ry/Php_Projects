<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h2 class="box-title text-center">Manage Setting Control</h2>
                           <a href="setting.php" class="btn btn-primary">Add Braches</a>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table text-center">
                                 <thead>
                                    <tr>
                                       <th class="serial">SN.</th>
                                       <th >Office Adress</th>
                                       <th >Office Email</th>
                                       <th >Office Number</th>
                                       <th colspan="2" >Operation</th>
                                    </tr>
                                 </thead>
                                 <?php
                                 	$i = 1;

                                 	$show_service="SELECT * FROM `setting` ";
                                 	$run_service=mysqli_query($conn,$show_service);
                                 	while($rows=mysqli_fetch_assoc($run_service)){
                                 ?>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $i++  ?></td>
                                       <td><?php echo $rows['o_address']  ?></td>
                                       <td><?php echo $rows['o_email']  ?></td>
                                       <td><?php echo $rows['o_number']  ?></td>
                                       <td>
                                          <a href="update_setting.php?id=<?php echo $rows['id']  ?>" class="btn btn-primary">Edit</a>
                                          <a href="del_setting.php?id=<?php echo $rows['id']  ?>" class="btn btn-danger">Delete</a>
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

<?php
	include('foot.php');
?>