<?php
   include('top.php');
?>
 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header text-center"><strong>New Branch Settings Control</strong></div>
                        <form action="#" method="post" enctype="multipart/form-data">
                        	<div class="card-body card-block">
	                           <div class="form-group"><label for="company" class=" form-control-label">Office Address</label><input type="text" name="oa" placeholder="Enter your Office Address" class="form-control" required></div>
                              <div class="form-group"><label for="company" class=" form-control-label">Office Email</label><input type="email" name="oe" placeholder="Enter your Office Email" class="form-control" required></div>
                              <div class="form-group"><label for="company" class=" form-control-label">Office Number</label><input type="text" name="on" placeholder="Enter your Office Number" class="form-control" required></div>
	                           <button id="payment-button" type="submit" name="save" class="btn btn-lg btn-info btn-block">
	                           <span id="payment-button-amount">Save Setting Control</span>
	                           </button>
	                        </div>
                        </form>
                        <?php
                        	if(isset($_POST['save'])){
                        	  $oa=$_POST['oa'];
                              $oe=$_POST['oe'];
                              $on=$_POST['on'];
                              
                              $insert_setting="INSERT INTO `setting`(`o_address`, `o_email`, `o_number`) VALUES ('$oa','$oe','$on')";
                              $run_setting=mysqli_query($conn,$insert_setting);
                              
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
   // include('foot.php');
?>