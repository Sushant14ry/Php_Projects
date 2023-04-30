<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Edit Co-Founder</strong></div>
                        <form action="#" method="post">
                           <?php
                              $edit_id=$_GET['id'];
                              $edit_service="SELECT * FROM position WHERE id='$edit_id' ";
                              $run=mysqli_query($conn,$edit_service);
                              while($res=mysqli_fetch_assoc($run)){
                           ?>
                        	<div class="card-body card-block">
	                           <div class="form-group"><label for="company" class=" form-control-label">Co-Founder</label><input type="text" name="service_name" placeholder="Enter your Co-Founder name" class="form-control" value="<?php echo $res['p_name']  ?>" required></div>
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
                        		$service=$_POST['service_name'];

                              $show_service="SELECT * FROM position WHERE p_name='$service' ";
                                 $run=mysqli_query($conn,$show_service);
                              if($run=mysqli_fetch_assoc($run)){
                                 echo '<div class="text-danger mb-4 text-center">This Category Team is Already Exist !!</div>';
                              }else{

                           		$update_service="UPDATE `position` SET `p_name`='$service' WHERE id ='$edit_id' ";
                           		$run_service=mysqli_query($conn,$update_service);
                           		?>
                           		<script type="text/javascript">
                           			window.location.href='services_cat.php';
                           		</script>
                           		<?php
                              }

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