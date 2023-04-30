<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h2 class="box-title text-center">Our Services</h2>
                           <a href="add_our_serv.php" class="btn btn-primary">Add Services</a>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table text-center">
                                 <thead>
                                    <tr>
                                       <th>SN.</th>
                                       <th >Service Name</th>
                                       <th >Service Image</th>
                                       <th width="600px">Service Details</th>
                                       <th >Operation</th>
                                    </tr>
                                 </thead>
                                 <?php
                                 	$i = 1;

                                 	$show_service="SELECT * FROM `our_service` ";
                                 	$run_service=mysqli_query($conn,$show_service);
                                 	while($rows=mysqli_fetch_assoc($run_service)){
                                 ?>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $i++  ?></td>
                                       <td><?php echo $rows['s_name']  ?></td>
                                       <td><img src="<?php echo $rows['s_img']  ?>"></td>
                                       <td><?php echo substr($rows['s_desc'],0,120) ?></td>
                                       <td>
                                          <a href="edit_our_ser.php?id=<?php echo $rows['id']  ?>" class="btn btn-primary">Edit</a>
                                          <a href="delete__our_ser.php?id=<?php echo $rows['id']  ?>" class="btn btn-danger">Delete</a>
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
	// include('foot.php');
?>