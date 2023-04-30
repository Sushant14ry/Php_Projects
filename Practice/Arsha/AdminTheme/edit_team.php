<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header text-center"><strong>Edit Team</strong></div>
                        <form action="#" method="post" enctype="multipart/form-data">
                           <?php 
                              $edit_id=$_GET['id'];

                              $show_team="SELECT * FROM `team` WHERE id='$edit_id' ";
                              $run_team=mysqli_query($conn,$show_team);
                              while($rows=mysqli_fetch_assoc($run_team)){
                           ?>
                        	<div class="card-body card-block">
	                           <div class="form-group"><label for="company" class=" form-control-label">Name</label><input type="text" name="t_name" value="<?php echo $rows['name']  ?>" placeholder="Enter your Team name" class="form-control" required></div>
                              <div class="form-group"><label for="company" class=" form-control-label">Photo</label><input type="file" name="c_img" placeholder="Enter your Client name" class="form-control" ></div>
                              <div class="form-group"><label class=" form-control-label">Position</label>
                                 <select class="form-control" name="t_position">
                                   <?php
                                    $show_position="SELECT * FROM `position` ";
                                    $run_position=mysqli_query($conn,$show_position);
                                    while($ress=mysqli_fetch_assoc($run_position)){
                                    ?>
                                    <option selected><?php echo $ress['p_name'] ?></option>
                                    <?php
                                       }
                                    ?>
                                 </select>
                              </div>
                               <div class="form-group"><label for="company" class=" form-control-label">Number</label><input type="text" name="t_num" value="<?php echo $rows['num']  ?>" placeholder="Enter your Client Number" class="form-control" required></div>
                              <div class="form-group"><label for="company" class=" form-control-label">Address</label><input type="text" name="t_address" value="<?php echo $rows['address']  ?>" placeholder="Enter your Client Address" class="form-control" required></div>
                              <div class="form-group"><label for="company" class=" form-control-label">Email ID</label><input type="email" name="t_email" value="<?php echo $rows['email_id']  ?>" placeholder="Enter your Client Address" class="form-control" required></div>
                              <div class="form-group"><label class=" form-control-label">About</label>
                              <textarea class="form-control" name="t_about" rows="5"><?php echo $rows['about'];  ?></textarea>
                              </div>
	                           <button id="payment-button" type="submit" name="save" class="btn btn-lg btn-info btn-block">
	                           <span id="payment-button-amount">Submit</span>
	                           </button>
	                        </div>
                           <?php
                              }
                           ?>
                        </form>
                        <?php
                        	if(isset($_POST['save'])){
                        		$t_name=$_POST['t_name'];
                              $t_position=$_POST['t_position'];
                              $t_about=$_POST['t_about'];
                              $t_num=$_POST['t_num'];
                              $t_address=$_POST['t_address'];
                              $t_email=$_POST['t_email'];

                               $file_name=$_FILES['c_img']['name'];
                               $file_size=$_FILES['c_img']['size'];
                               $file_tmp=$_FILES['c_img']['tmp_name'];
                               $file_type=$_FILES['c_img']['type'];

                               $rand_name =rand(1,999999).$file_name;
                               $destination="upload/".$rand_name;


                               if(move_uploaded_file($file_tmp,$destination)){

                               }else{
                                 echo "could not upload the file";
                               }

                              $update_teams="UPDATE `team` SET `name`='$t_name',`email_id`='$t_email',`position`='$t_position',`about`='$t_about',`num`='$t_num',`address`='$t_address',`img`='$destination' WHERE id='$edit_id' ";
                              $run_teams=mysqli_query($conn,$update_teams);
                              ?>
                              <script type="text/javascript">
                                 window.location.href='team.php';
                              </script>
                              <?php
                        	}
                        ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<?php
	include('foot.php');
?>