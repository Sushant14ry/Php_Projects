<?php
	include('top.php');

?>

<div class="container mb-4">
	<div class="col-md-6 m-auto">
		<div class="bg-secondary p-3">
			<h2 class="text-center text-white">New Issued Books</h2><hr>
			<form action="" method="post">
				<label>Book Name</label>
				<select  class="form-control" name="b_name">
					<option disabled>Select Book</option>
				<?php
					$show_author="SELECT * FROM book ";
					$run_author=mysqli_query($con,$show_author);
					while($rowsz=mysqli_fetch_assoc($run_author)){
						echo "<option value='{$rowsz['book_name']}' >{$rowsz['book_name']}</option>";
					}
				?>
				</select><br>
				<label>Author ID</label>
				<select  class="form-control" name="a_id">
					<option disabled>Select Author</option>
				<?php
					$show_author="SELECT * FROM author ";
					$run_author=mysqli_query($con,$show_author);
					while($rows=mysqli_fetch_assoc($run_author)){
						echo "<option value='{$rows['name']}' >{$rows['name']}</option>";
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
						echo "<option value='{$res['names']}' >{$res['names']}</option>";
					}
				?>
				</select><br>
				<label>Book Number</label>
				<input type="text" class="form-control" placeholder="Enter Book Number" name="b_num" required><br>
				<label>Student Name</label>
				<select  class="form-control" name="s_id">
					<option disabled>Select Student</option>
				<?php
					$show_user="SELECT * FROM register ";
					$run_user=mysqli_query($con,$show_user);
					while($rowss=mysqli_fetch_assoc($run_user)){
						echo "<option value='{$rowss['id']}' >{$rowss['fullname']}</option>";
					}
				?>
				</select>
		
				<label>Issue date</label>
				<input type="date" class="form-control" placeholder="Enter Issued Date" name="i_date" required><br>
				<input type="submit" class="form-control btn btn-primary" name="save" value="Issued book">
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
						// $Issued_book="INSERT INTO issue_book(book_name,author_id,categories_id,book_num,student_id,issue_date,return) VALUES('$b_name','$a_id','$c_id','$b_num','$s_id','$i_date','no') ";
						$Issued_book="INSERT INTO `issue_book`(`book_name`, `author_id`, `categories_id`, `book_num`, `student_id`, `issue_date`, `return`) VALUES ('$b_name','$a_id','$c_id','$b_num','$s_id','$i_date','no')";
						$run_issued=mysqli_query($con,$Issued_book);
						if($run_issued){
							?>
							<script>
								alert('Book Issued Seccesfull.');
								window.location.href='book_issued_detail.php';
							</script>
							<?php
						}else{
							?>
							<script>
								alert('Failed To Issued Book.');
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