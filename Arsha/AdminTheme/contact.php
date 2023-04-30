<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title text-center">Customer Inquery</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table text-center">
                                 <thead>
                                    <tr>
                                       <th class="serial">SN.</th>
                                       <th class="avatar">Full Name</th>
                                       <th>Email ID</th>
                                       <th>Mobile</th>
                                       <th>Subject</th>
                                       <th>Message</th>
                                       <th>Operation</th>
                                    </tr>
                                 </thead>
                                 <?php
                                 	$i = 1;

                                 	$show_contact="SELECT * FROM `contact` ";
                                 	$run_contact=mysqli_query($conn,$show_contact);
                                 	while($rows=mysqli_fetch_assoc($run_contact)){
                                 ?>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $i++  ?></td>
                                       <td><?php echo $rows['fullname']  ?></td>
                                       <td><?php echo $rows['email_id']  ?></td>
                                       <td><?php echo $rows['mobile']  ?></td>
                                       <td><?php echo $rows['subject']  ?></td>
                                       <td><?php echo $rows['message']  ?></td>
                                       <td>
                                          <a href="delete_con.php?id=<?php echo $rows['id']  ?>" class="btn btn-danger">Delete</a>
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