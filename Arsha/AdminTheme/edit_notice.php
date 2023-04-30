<?php
	include('top.php');
?>

 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header text-center"><strong>Edit Notice</strong></div>
                        <form action="#" method="post">
                           <?php  
                              $edit_id=$_GET['id'];
                              $show_notice="SELECT * FROM notice WHERE id='$edit_id' ";
                              $run=mysqli_query($conn,$show_notice);
                              while($res=mysqli_fetch_assoc($run)){
                           ?>
                        	<div class="card-body card-block">
	                           <div class="form-group"><label for="company" class=" form-control-label">Subject</label><input type="text" name="n_sub" value="<?php echo $res['subject']  ?>" placeholder="Subject name" class="form-control" required></div>
                              <div class="form-group"><label class=" form-control-label">Message</label>
                                 <textarea class="form-control" name="n_msg" rows="6" placeholder="Write your Notice"><?php echo $res['n_msg']  ?></textarea>
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
                              $n_sub=$_POST['n_sub'];
                              $n_msg=$_POST['n_msg'];
                        		
                              $Update_Notice="UPDATE `notice` SET `subject`='$n_sub',`n_msg`='$n_msg' WHERE id='$edit_id' ";
                              $run_notice=mysqli_query($conn,$Update_Notice);
                              ?>
                              <script type="text/javascript">
                                 window.location.href='notice.php';
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