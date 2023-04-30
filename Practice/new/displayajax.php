<?php
	include 'conect.php';

	$q = "SELECT * FROM incrud";
	$result = mysqli_query($conn,$q);
	if(mysqli_num_rows($result) > 0){
		while($rows = mysqli_fetch_array($result)){
			?>

		<tr>
			<td><?php echo $rows['id']; ?></td>	
			<td><?php echo $rows['username']; ?></td>
			<td><?php echo $rows['password']; ?></td>	
		</tr>

	<?php		
		}

	}
	
?> 