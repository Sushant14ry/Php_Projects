<?php
   include('top.php');
?>
 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header text-center"><strong>Update Settings Control</strong></div>
                        <form action="#" method="post" enctype="multipart/form-data">
                           <?php
                              $setting_id=$_GET['id'];

                              $show_setting="SELECT * FROM setting WHERE id='$setting_id' ";
                              $upd_setting=mysqli_query($conn,$show_setting);
                              while($ress=mysqli_fetch_assoc($upd_setting)){

                           ?>
                        	<div class="card-body card-block">
	                           <div class="form-group"><label for="company" class=" form-control-label">Office Address</label><input type="text" name="oa" placeholder="Enter your Office Address" value="<?php echo $ress['o_address'] ?>" class="form-control" required></div>
                              <div class="form-group"><label for="company" class=" form-control-label">Office Email</label><input type="email" name="oe" placeholder="Enter your Office Email" value="<?php echo $ress['o_email'] ?>" class="form-control" required></div>
                              <div class="form-group"><label for="company" class=" form-control-label">Office Number</label><input type="text" name="on" placeholder="Enter your Office Number" value="<?php echo $ress['o_number'] ?>" class="form-control" required></div>
	                           <button id="payment-button" type="submit" name="save" class="btn btn-lg btn-info btn-block">
	                           <span id="payment-button-amount">Save Setting Control</span>
	                           </button>
	                        </div>
                           <?php
                              }
                           ?>
                        </form>
                        <?php
                        	if(isset($_POST['save'])){
                        	  $oa=$_POST['oa'];
                              $oe=$_POST['oe'];
                              $on=$_POST['on'];
                              
                              $update_setting="UPDATE `setting` SET `o_address`='$oa',`o_email`='$oe',`o_number`='$on' WHERE id='$setting_id' ";
                              $run_setting=mysqli_query($conn,$update_setting);
                              
                              ?>
                              <script type="text/javascript">
                                 window.location.href='show_setting.php';
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