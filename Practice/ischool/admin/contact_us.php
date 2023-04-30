<?php
	include('data.php');
	include('top_admin.php');
?>

<div class="container">
	<h2 class="bg-dark text-white p-2 text-center">Contact Us </h2>
	<table class="table text-center">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Subject</th>
			<th>Email</th>
			<th>Message</th>
			<th>Action</th>
		</thead>
			<?php
				$show_contact="SELECT * FROM contact_us";
				$run_contact=mysqli_query($con,$show_contact);
				if(mysqli_num_rows($run_contact)>0){
				while($row=mysqli_fetch_assoc($run_contact)){
			?>
			<tbody>
			<td><?php echo $row['id'] ; ?></td>
			<td><?php echo $row['name'] ; ?></td>
			<td><?php echo $row['subject'] ; ?></td>
			<td><?php echo $row['email'] ; ?></td>
			<td><?php echo $row['message'] ; ?></td>
			<td>
				<a href="del_con.php?id=<?php echo $row['id'] ; ?>" class="btn btn-danger">Delete</a>
			</td>
			</tbody>
		<?php } 
			}else{
				echo "<h2 class='text-center text-danger'>Data Not Found </h2>";
			}
		?>
	</table>
</div>
<?php
	include('foot.php');

?>