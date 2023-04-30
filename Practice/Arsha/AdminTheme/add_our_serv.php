<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header text-center"><strong>Our Services</strong></div>
                        <form action="#" method="post" enctype="multipart/form-data">
                        	<div class="card-body card-block">
	                           <div class="form-group"><label for="company" class=" form-control-label">Service Name</label><input type="text" name="s_name" placeholder="Enter your Service name" class="form-control" required></div>
                              <div class="form-group"><label for="company" class=" form-control-label">Service Logo</label><input type="file" name="s_img" class="form-control" ></div>
                              <div class="form-group"><label class=" form-control-label">Service Details</label>
                                <textarea class="form-control" name="s_d" rows="6"></textarea>
                              </div>
	                           <button id="payment-button" type="submit" name="save" class="btn btn-lg btn-info btn-block">
	                           <span id="payment-button-amount">Submit</span>
	                           </button>
	                        </div>

                        </form>
                        <?php
                        	if(isset($_POST['save'])){
                        		  $s_name=$_POST['s_name'];
                              $s_d=$_POST['s_d'];
                              
                               $file_name=$_FILES['s_img']['name'];
                               $file_size=$_FILES['s_img']['size'];
                               $file_tmp=$_FILES['s_img']['tmp_name'];
                               $file_type=$_FILES['s_img']['type'];

                               $rand_name =rand(1,999999).$file_name;
                               $destination="clients/".$rand_name;


                               if(move_uploaded_file($file_tmp,$destination)){
                                    
                               }else{
                                 echo "could not upload the file";
                               }
                            

                              $add_servicess="INSERT INTO `our_service`(`s_name`, `s_img`, `s_desc`) VALUES ('$s_name','$destination','$s_d')";
                              $run_servicess=mysqli_query($conn,$add_servicess);
                              ?>
                              <script type="text/javascript">
                                 window.location.href='our_services.php';
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