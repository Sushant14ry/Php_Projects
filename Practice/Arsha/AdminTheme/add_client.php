<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header text-center"><strong>Add Clients</strong></div>
                        <form action="#" method="post" enctype="multipart/form-data">
                        	<div class="card-body card-block">
	                           <div class="form-group"><label for="company" class=" form-control-label">Client Name</label><input type="text" name="c_name" placeholder="Enter your Client name" class="form-control" required></div>
                              <div class="form-group"><label for="company" class=" form-control-label">Client Photo</label><input type="file" name="c_img" placeholder="Enter your Client name" class="form-control" ></div>
                              <div class="form-group"><label for="company" class=" form-control-label">Client Number</label><input type="text" name="c_num" placeholder="Enter your Client Number" class="form-control" required></div>
                              <div class="form-group"><label for="company" class=" form-control-label">Client Address</label><input type="text" name="c_address" placeholder="Enter your Client Address" class="form-control" required></div>
	                           <button id="payment-button" type="submit" name="save" class="btn btn-lg btn-info btn-block">
	                           <span id="payment-button-amount">Submit</span>
	                           </button>
	                        </div>

                        </form>
                        <?php
                        	if(isset($_POST['save'])){
                        		$c_name=$_POST['c_name'];
                              $c_num=$_POST['c_num'];
                              $c_address=$_POST['c_address'];
                              
                                $file_name=$_FILES['c_img']['name'];
                               $file_size=$_FILES['c_img']['size'];
                               $file_tmp=$_FILES['c_img']['tmp_name'];
                               $file_type=$_FILES['c_img']['type'];

                               $rand_name =rand(1,999999).$file_name;
                               $destination="clients/".$rand_name;


                               if(move_uploaded_file($file_tmp,$destination)){
                                    
                               }else{
                                 echo "could not upload the file";
                               }
                            

                              $add_clients="INSERT INTO `clients`(`c_name`,`c_img`,`c_num`, `c_address`) VALUES ('$c_name','$destination','$c_num','$c_address')";
                              $run_client=mysqli_query($conn,$add_clients);
                              ?>
                              <script type="text/javascript">
                                 window.location.href='clients.php';
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