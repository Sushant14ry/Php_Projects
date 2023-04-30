<?php
	include('top.php');

?>

<div class="container mb-4">
	<div class="col-md-6 m-auto">
		<div class="bg-secondary p-3">
			<h2 class="text-center text-white">Update Issued Books</h2><hr>
			<form action="" method="post">
				<?php
					$edit_id=$_GET['id'];
					$show_issue_book="SELECT * FROM issue_book WHERE id='$edit_id' ";
					$run_issued_book=mysqli_query($con,$show_issue_book);
					while($rows=mysqli_fetch_assoc($run_issued_book)){
				?>
				<label>Book Name</label>
				<input type="text" class="form-control" value="<?php echo $rows['book_name'] ?>" placeholder="Enter Book Name" name="b_name" required><br>
				<label>Author ID</label>
				<input type="text" class="form-control" value="<?php echo $rows['author_id'] ?>" placeholder="Enter Author Id" name="a_id" required><br>
				<label>Categories ID</label>
				<input type="text" class="form-control" value="<?php echo $rows['categories_id'] ?>" placeholder="Enter Categories Id" name="c_id" required><br>
				<label>Book Number</label>
				<input type="text" class="form-control" value="<?php echo $rows['book_num'] ?>" placeholder="Enter Book Number" name="b_num" required><br>
				<label>Student ID</label>
				<input type="text" class="form-control" value="<?php echo $rows['student_id'] ?>" placeholder="Enter Student Id" name="s_id" required><br>
				<label>Issue date</label>
				<input type="text" class="form-control" value="<?php echo $rows['issue_date'] ?>" placeholder="Enter Issued Date" name="i_date" required><br>
				<input type="submit" class="form-control btn btn-primary" name="save" value="Update Issued book">
			<?php } ?>
			</form>
			<?php   
				if(isset($_POST['save'])){

					$b_name=$_POST['b_name'];
					$a_id=$_POST['a_id'];
					$c_id=$_POST['c_id'];
					$b_num=$_POST['b_num'];
					$s_id=$_POST['s_id'];
					$i_date=$_POST['i_date'];

				$Issued_book="SELECT * FROM issue_book WHERE book_name='$b_name' ";
				$run_issued_book=mysqli_query($con,$Issued_book);
				if($res=mysqli_fetch_assoc($run_issued_book)){
					?>
						<script>
							alert('Book is Already Issued');

						</script>
					<?php
				}else{
					
						$update_issued_book="UPDATE issue_book SET book_name='$b_name',author_id='$a_id',categories_id='$c_id',book_num='$b_num',student_id='$s_id',issue_date='$i_date' WHERE id='$edit_id' ";
						$run_issueds=mysqli_query($con,$update_issued_book);
						if($run_issueds){
							?>
							<script>
								alert('Update Issued book Seccesfull.');
								window.location.href='book_issued_detail.php';
							</script>
							<?php
						}else{
							?>
							<script>
								alert('Failed To Update Issued Book.');
							</script>
							<?php
						}
				}

				

				}
			?>
		</div>
	</div>
</div>



<?php
	include('foot.php');

?>