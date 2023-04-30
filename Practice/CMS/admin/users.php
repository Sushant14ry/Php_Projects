<?php  
	session_start();
	
	if(!isset($_SESSION['username'])){
		header('location:http://localhost/Practice/CMS/admin/login.php');
}else{

?>
<?php
	include 'conect.php';
?>
	
	<?php
	include 'top_side_admin.php';
	?>

	<!-- Start Users Registeration Show -->

	<div class="col-md-10 col-lg-10 col-sm-4 col-12">
		<div class="container-fluid mt-3" style="overflow:scroll; box-sizing: border-box;padding-bottom: 50px">
			<table class="table table-triped text-center" >
				<thead>
					<tr>
						<th>ID </th>
						<th>Full Name </th>
						<th>Password </th>
						<th>Picture</th>
						<th>Gender</th>
						<th>Number</th>
						<th>Operation</th>
					</tr>
				</thead>
				<?php  

					$i = 1;

					$user = "SELECT * FROM cms";
					$run = mysqli_query($con,$user);

					if(mysqli_num_rows($run)){
						while($rows = mysqli_fetch_array($run)){

							$ud = $rows['id'];
				 ?>
				<tbody>
					<tr>
						<td><?php echo $i++ ?></td>
						<td><?php echo $rows['fullname']  ; ?></td>
						<td><?php echo $rows['username']  ; ?></td>
						<td><center><img src="../<?php echo $rows['picture']  ; ?>" width="100px" height="80px"></center></td>
						<td><?php echo $rows['gender']  ; ?></td>
						<td><?php echo $rows['number']  ; ?></td>
						<td>
							<a href="" class="btn btn-primary m-2">Edit</a>
							<a href="del_user.php?del=<?php echo $rows['id'] ; ?>" class="btn btn-danger m-2">Delete</a>
						</td>
					</tr>
				</tbody>

				<?php } }  ?>
				
			</table>
			
		</div>
		
	</div>

	<!-- End Users Registeration Show -->

<?php
	include 'footer.php';
	}
?>