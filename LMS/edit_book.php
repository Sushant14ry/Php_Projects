<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->
<div class="container">
	<div class="col-md-6 m-auto bg-secondary p-3">
		<h2 class="text-center font-weight-bolder">Update Book</h2>
		<form action="#" method="post">
			<?php
				$edit_id=$_GET['id'];
				$show_cat="SELECT * FROM book WHERE book_id='$edit_id' ";
				$run_cat=mysqli_query($con,$show_cat);
				while($row=mysqli_fetch_assoc($run_cat)){

			?>
			<label>Book Name</label>
			<input type="text" class="form-control" value="<?php echo $row['book_name']  ?>" name="book_name" required><br>
			<label>Author ID</label>
			<input type="text" class="form-control" value="<?php echo $row['author_id']  ?>" name="author_id" required><br>
			<label>Categories ID</label>
			<input type="text" class="form-control" value="<?php echo $row['categories_id']  ?>" name="Categories_id" required><br>
			<label>Book Number</label>
			<input type="text" class="form-control" value="<?php echo $row['book_num']  ?>" name="book_num" required><br>
			<label>Book Price</label>
			<input type="text" class="form-control" value="<?php echo $row['book_num']  ?>" name="book_price" required><br>
			<input type="submit" class="form-control bg-primary font-weight-bolder" name="save" value="Update book">
		<?php } ?>
		</form>
		<?php
			if(isset($_POST['save'])){

				$book_name=$_POST['book_name'];
				$author_id=$_POST['author_id'];
				$Categories_id=$_POST['Categories_id'];
				$book_num=$_POST['book_num'];
				$book_price=$_POST['book_price'];

				$check_cat="SELECT * FROM book WHERE book_name='$book_name' ";
				$check_run=mysqli_query($con,$check_cat);
				if($check_run=mysqli_fetch_assoc($check_run)){
						?>
						<script>
							alert('Book Already Exist.');
						</script>
						<?php
				}else{

				$update_book="UPDATE book SET book_name='$book_name', author_id='$author_id', categories_id='$Categories_id', book_num='$book_num',book_price='$book_price' WHERE book_id='$edit_id' ";
				$run=mysqli_query($con,$update_book);
				if($run){
					?>
					<script>
						alert('Book Update Successfull.');
						window.location.href='manage_book.php';
					</script>
					<?php
				}else{
					?>
					<script>
						alert('Failed to Update Book.');
					</script>
					<?php
				}
			}

			}
		?>
	</div>
</div><br>


<!-- Start Footer Section -->
<?php
	include('foot.php');

?>
<!-- Start Footer Section -->

