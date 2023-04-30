<?php
	include('top.php');

?>

<div class="container mb-4">
	<div class="col-md-6 m-auto">
		<div class="bg-secondary p-3">
			<h2 class="text-center text-white">New Issued Books</h2><hr>
			<form action="" method="post">
				<?php
					$edit_id=$_GET['id'];
					$edit_issue_book="SELECT * FROM issue_book WHERE id='$edit_id' ";
					$run_edit_issue_book=mysqli_query($con,$edit_issue_book);
					while($result=mysqli_fetch_assoc($run_edit_issue_book)){
				?>
				<label>Book Name</label>
				<input type="text" class="form-control" value="<?php echo $result['book_name'] ?>" placeholder="Enter Book Name" name="b_name" required><br>
				<label>Author ID</label>
				<select  class="form-control" name="a_id">
					<option disabled>Select Author</option>
				<?php
					$show_author="SELECT * FROM author ";
					$run_author=mysqli_query($con,$show_author);
					while($rows=mysqli_fetch_assoc($run_author)){
						echo "<option selected  value='{$rows['name']}' >{$rows['name']}</option>";
					}
				?>
				</select><br>
				<label>Categories ID</label>
				<select  class="form-control" name="c_id">
					<option disabled>Select Categories</option>
				<?php
					$show_cat="SELECT * FROM categories ";
					$run_cat=mysqli_query($con,$show_cat);
					while($res=mysqli_fetch_assoc($run_cat)){
						echo "<option selected value='{$res['name']}' >{$res['names']}</option>";
					}
				?>
				</select><br>
				<label>Book Number</label>
				<input type="text" class="form-control" value="<?php echo $result['book_num'] ?>" placeholder="Enter Book Number" name="b_num" required><br>
				<label>Student Name</label>
				<select  class="form-control" name="s_id">
					<option disabled>Select Student</option>
				<?php
					$show_user="SELECT * FROM register ";
					$run_user=mysqli_query($con,$show_user);
					while($rowss=mysqli_fetch_assoc($run_user)){
						echo "<option selected value='{$rowss['id']}' >{$rowss['fullname']}</option>";
					}
				?>
				</select><br>
				<label>Return Book</label>
				<select  class="form-control" name="return">
					<option disabled>Select Return</option>
				<?php
					$show_return="SELECT * FROM return_book ";
					$run_return=mysqli_query($con,$show_return);
					while($rowses=mysqli_fetch_assoc($run_return)){
						echo "<option selected value='{$rowses['id']}'>{$rowses['naam']}</option>";
					}
				?>
				</select><br>
		
				<label>Issue date</label>
				<input type="text" class="form-control" value="<?php echo $result['issue_date'] ?>"  placeholder="Enter Issued Date" name="i_date" required><br>
				<input type="submit" class="form-control btn btn-primary" name="save" value="Issued book">
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
					$return=$_POST['return'];

						$update_Issued_book="UPDATE `issue_book` SET `book_name`='$b_name',`author_id`='$a_id',`categories_id`='$c_id',`book_num`='$b_num',`student_id`='$s_id',`issue_date`='$i_date',`return`='$return' WHERE id='$edit_id' ";
						
						$run_issued=mysqli_query($con,$update_Issued_book);
						if($run_issued){
							?>
							<script>
								alert('Book Return Seccesfull.');
								window.location.href='not_return.php';
							</script>
							<?php
						}else{
							?>
							<script>
								alert('Failed To Update Return Book.');
							</script>
							<?php
						}
				}
			?>
		</div>
	</div>
</div>



<?php
	include('foot.php');

?>