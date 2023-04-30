<!-- Start Header Section -->
<?php
	include('top.php');

?>
<!-- Start Header Section -->
<div class="container">
	<div>
		<table class="table">
			<thead>
				<th>Book ID</th>
				<th>Book Name</th>
				<th>Author ID</th>
				<th>Categories ID</th>
				<th>Book Num</th>
				<th>Book Price</th>
				<th>Operation</th>
			</thead>
			<?php

				$i=1;

				$show_book="SELECT b.book_id,b.book_name,b.book_num,b.book_price,c.names,a.name FROM book b LEFT JOIN categories c ON b.categories_id=c.id LEFT JOIN author a ON b.author_id=a.id";
				$run_show=mysqli_query($con,$show_book);
				while($rows=mysqli_fetch_assoc($run_show)){

			?>
			<tbody>
				<td><?php echo $i++ ?></td>
				<td><?php echo $rows['book_name'] ?></td>
				<td><?php echo $rows['name'] ?></td>
				<td><?php echo $rows['names'] ?></td>
				<td><?php echo $rows['book_num'] ?></td>
				<td><?php echo $rows['book_price'] ?></td>
				<td>
					<a href="edit_book.php?id=<?php echo $rows['book_id'] ?>" class="btn btn-primary">Edit</a>
					<a href="del_book.php?id=<?php echo $rows['book_id'] ?>" class="btn btn-danger">Delete</a>
				</td>
			</tbody>
			<?php
				}
			?>
		</table>
	</div>
</div>


<!-- Start Footer Section -->
<?php
	include('foot.php');

?>
<!-- Start Footer Section -->