<?php
   include('top.php');
?>

 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h2 class="box-title text-center">Our Team Member</h2>
                           <a href="add_team.php" class="btn btn-primary">Add Team</a>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table text-center">
                                 <thead>
                                    <tr>
                                       <th class="serial">SN.</th>
                                       <th >Name</th>
                                       <th >Image</th>
                                       <th >Position</th>
                                       <th >Number</th>
                                       <th >Address</th>
                                       <th >Email ID</th>
                                       <th >About</th>
                                       <th colspan="2" >Operation</th>
                                    </tr>
                                 </thead>
                                 <?php
                                    $i = 1;

                                    $show_service="SELECT * FROM `team` ";
                                    $run_service=mysqli_query($conn,$show_service);
                                    while($rows=mysqli_fetch_assoc($run_service)){
                                 ?>
                                 <tbody>
                                    <tr>
                                       <td><?php echo $i++  ?></td>
                                       <td><?php echo $rows['name']  ?></td>
                                       <td><img src="<?php echo $rows['img'] ?>"></td>
                                       <td><?php echo $rows['position']  ?></td>
                                       <td><?php echo $rows['num']  ?></td>
                                       <td><?php echo $rows['address']  ?></td>
                                       <td><?php echo $rows['email_id']  ?></td>
                                       <td><?php echo $rows['about']  ?></td>
                                       <td>
                                          <a href="edit_team.php?id=<?php echo $rows['id']  ?>" class="btn btn-primary">Edit</a>
                                          <a href="delete_team.php?id=<?php echo $rows['id']  ?>" class="btn btn-danger">Delete</a>
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