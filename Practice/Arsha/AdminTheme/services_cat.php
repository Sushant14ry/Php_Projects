<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h2 class="box-title text-center">Co-Founder Team</h2>
                           <a href="add_services.php" class="btn btn-primary">Add Co-Founder</a>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table text-center">
                                 <thead>
                                    <tr>
                                       <th class="serial">SN.</th>
                                       <th >Service Name</th>
                                       <th colspan="2" >Operation</th>
                                    </tr>
                                 </thead>
                                 <?php
                                 	$i = 1;

                                 	$show_service="SELECT * FROM `position` ";
                                 	$run_service=mysqli_query($conn,$show_service);
                                 	while($rows=mysqli_fetch_assoc($run_service)){
                                 ?>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $i++  ?></td>
                                       <td><?php echo $rows['p_name']  ?></td>
                                       <td>
                                          <a href="edit_service.php?id=<?php echo $rows['id']  ?>" class="btn btn-primary">Edit</a>
                                          <a href="delete_service.php?id=<?php echo $rows['id']  ?>" class="btn btn-danger">Delete</a>
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