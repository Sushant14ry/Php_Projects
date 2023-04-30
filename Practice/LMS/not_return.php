<?php
	include('top.php');

?>

<div class="container-fluid mx-4">
	<div>
		<h2 class="text-center font-weight-bold">All Issued Book Details</h2>
		<p class="text-center font-weight-bold bg-light">1 == NO  OR 2 == YES</p>
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Book Name</th>
				<th>Author ID</th>
				<th>Categories ID</th>
				<th>Book Number</th>
				<th>Issued Date</th>
				<th>Book Return</th>
				<?php
					$user_name=$_SESSION["stu_name"];
				  if($_SESSION["stu_role"] == 1){

				?>
				<th>Student ID</th>
				<th class="2">Operation</th>
			<?php } ?>
			</thead>
			<?php
				$i=1;
				$user_id=$_SESSION["user_id"];
				$Issued_book="SELECT i.id,i.book_name,i.author_id,i.categories_id,i.book_num,i.return,i.issue_date,r.fullname FROM issue_book i LEFT JOIN register r ON i.student_id=r.id WHERE r.id= '$user_id' ";
				$run_issued_book=mysqli_query($con,$Issued_book);
				while($row=mysqli_fetch_assoc($run_issued_book)){
			?>
			<tbody>
				<td><?php echo $i++ ?></td>
				<td><?php echo $row['book_name'] ?></td>
				<td><?php echo $row['author_id'] ?></td>
				<td><?php echo $row['categories_id'] ?></td>
				<td><?php echo $row['book_num'] ?></td>
				<td><?php echo $row['issue_date'] ?></td>
				<td><?php echo $row['return'] ?></td>
				<?php
				  if($_SESSION["stu_role"] == 1){

				?>
				<td><?php echo $row['fullname'] ?></td>				
				<td>
					<a href="edit_notReturn_book.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
					<a href="rem_issued_book.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
				</td>
			<?php } ?>
			</tbody>
		<?php } ?>
		</table>
	</div>
</div>




<?php
	include('foot.php');
?>