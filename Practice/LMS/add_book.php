<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->
<div class="container">
	<div class="col-md-6 m-auto bg-secondary p-3">
		<h2 class="text-center font-weight-bolder">Add New Book</h2>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post">
			<label>Book Name</label>
			<input type="text" class="form-control" name="book_name" required><br>
			<label>Author ID</label>
			<select  class="form-control" name="author_id">
				<option disabled>Select Author</option>
				<?php
					$show_author="SELECT * FROM author ";
					$run_author=mysqli_query($con,$show_author);
					while($rows=mysqli_fetch_assoc($run_author)){
						echo "<option value='{$rows['id']}' >{$rows['name']}</option>";
					}
				?>
				</select><br>
				<label>Categories ID</label>
				<select  class="form-control" name="Categories_id">
					<option disabled>Select Categories</option>
				<?php
					$show_cat="SELECT * FROM categories ";
					$run_cat=mysqli_query($con,$show_cat);
					while($res=mysqli_fetch_assoc($run_cat)){
						echo "<option value='{$res['id']}' >{$res['names']}</option>";
					}
				?>
				</select><br>
			<label>Book Number</label>
			<input type="text" class="form-control" name="book_num" required><br>
			<label>Book Price</label>
			<input type="text" class="form-control" name="book_price" required><br>
			<input type="submit" class="form-control bg-primary font-weight-bolder" name="save" value="Add book">
		</form>
		<?php
			if(isset($_POST['save'])){

				$book_name=$_POST['book_name'];
				$author_id=$_POST['author_id'];
				$Categories_id=$_POST['Categories_id'];
				$book_num=$_POST['book_num'];
				$book_price=$_POST['book_price'];

				$add_book="INSERT INTO book(book_name,author_id,categories_id,book_num,book_price) VALUES('$book_name','$author_id','$Categories_id','$book_num','$book_price')";
				$run=mysqli_query($con,$add_book);
				if($run){
					?>
					<script>
						alert('Book Added Successfull.');
						window.location.href='manage_book.php';
					</script>
					<?php
				}else{
					?>
					<script>
						alert('Failed to Add Book.');
					</script>
					<?php
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

