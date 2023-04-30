<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Add Co-Founder</strong></div>
                        <form action="#" method="post">
                        	<div class="card-body card-block">
	                           <div class="form-group"><label for="company" class=" form-control-label">Co-Founder Name</label><input type="text" name="service_name" placeholder="Enter your Co-Founder name" class="form-control" required></div>
	                           <button id="payment-button" type="submit" name="save" class="btn btn-lg btn-info btn-block">
	                           <span id="payment-button-amount">Save Founders</span>
	                           </button>
	                        </div>

                        </form>
                        <?php
                        	if(isset($_POST['save'])){
                        		$service=$_POST['service_name'];

                        		$show_service="SELECT * FROM position WHERE p_name='$service' ";
                              	$run=mysqli_query($conn,$show_service);
                        		if($run=mysqli_fetch_assoc($run)){
                        			echo '<div class="text-danger mb-4 text-center">This Services is Already Exist !!</div>';
                        		}else{
                        			$insert_service="INSERT INTO `position`(`p_name`) VALUES ('$service')";
                        			$run_service=mysqli_query($conn,$insert_service);
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