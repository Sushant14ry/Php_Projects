<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h2 class="box-title text-center">Notice</h2>
                           <a href="add_notice.php" class="btn btn-primary">Add Notice</a>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table text-center">
                                 <thead>
                                    <tr>
                                       <th class="serial">SN.</th>
                                       <th >Subject</th>
                                       <th >Message</th>
                                       <th >Time & Date</th>
                                       <th colspan="2" >Operation</th>
                                    </tr>
                                 </thead>
                                 <?php
                                 	$i = 1;

                                 	$show_notice="SELECT * FROM `notice` ";
                                 	$run_notice=mysqli_query($conn,$show_notice);
                                 	while($rows=mysqli_fetch_assoc($run_notice)){
                                 ?>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $i++  ?></td>
                                       <td><?php echo $rows['subject']  ?></td>
                                       <td><?php echo $rows['n_msg']  ?></td>
                                       <td><?php echo $rows['n_date']  ?></td>
                                       <td>
                                          <a href="edit_notice.php?id=<?php echo $rows['id']  ?>" class="btn btn-primary">Edit</a>
                                          <a href="delete_notice.php?id=<?php echo $rows['id']  ?>" class="btn btn-danger">Delete</a>
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