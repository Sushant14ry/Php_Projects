<?php
	include('top_admin.php');

?>
<div class="container">
	<h2 class=" bg-dark text-white text-center p-2 font-weight-bolder">Course Order Payment</h2>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>User_Name</th>
			<th>User_Email</th>
			<th>Course_ID</th>
			<th>Course_Amount</th>
			<th>Order_Date</th>
			<th>Operation</th>
		</thead>
		<?php
			$checkout_detail="SELECT * FROM checkout";
			$run_checkout=mysqli_query($con,$checkout_detail);
			while($row=mysqli_fetch_assoc($run_checkout)){
		?>
		<tbody>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['course_id'] ?></td>
			<td><?php echo $row['user_email'] ?></td>
			<td><?php echo $row['course_id'] ?></td>
			<td><?php echo $row['course_id'] ?></td>
			<td><?php echo $row['course_amount'] ?></td>
			<td>
				<select class="btn ">
					<?php 
						$book_order = "SELECT * FROM order";
						$check_Order = mysqli_query($con,$book_order);
						// while($crow = mysqli_fetch_assoc($check_Order)){

						// 	if($crow['id']){
						// 		 echo "<option selected value=".$crow['id']." >".$crow['name']."</option>";
						// 	}else{
						// 		 echo "<option selected value=".$crow['id']." >".$crow['name']."</option>";
						// 	}

						// }
					?>
				</select>
			</td>
		</tbody>
	<?php } ?>
	</table>
</div>


<!-- footer section started -->
<?php
	include('foot.php');

?>