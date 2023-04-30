<!DOCTYPE html>
<html>
<head>
	<title>Simple</title>
	<?php
		include 'config.php';
	?>
</head>
<body>
	<form action="insert.php" method="post">
		<fieldset>
		<label>Username</label>
		<input type="text" name="user" value="<?php echo $rows['name']; ?>"><br>
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $rows['email']; ?>">><br>
		<label>Number</label>
		<input type="text" name="number" value="<?php echo $rows['number']; ?>">><br>
		<label>Password</label>
		<input type="Password" name="pass" value="<?php echo $rows['password']; ?>">><br>
		<input type="submit" name="submit" value="Register">
	</fieldset>
	</form>
	<hr>
	<table border="2px solid black">
		<?php
			$sql = "SELECT * FROM Simple";
			$query =mysqli_query($con,$sql);
			if(mysqli_num_rows($query) > 0){

		 ?>
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Email</th>
		<th>Number</th>
		<th colspan="2">Action</th>
	</tr>
	<?php
	while($rows = mysqli_fetch_assoc($query)){
	?>
	<tr>
		<td><?php echo $rows['id']; ?></td>
		<td><?php echo $rows['username']; ?></td>
		<td><?php echo $rows['email']; ?></td>
		<td><?php echo $rows['number']; ?></td>
		<td><a href="edit.php?id=<?php echo $rows['id']; ?>">Edit</a></td>
		<td><a href="del.php?id=<?php echo $rows['id']; ?>">delete</a></td>
		<?php  } ?>
	</tr>
	<?php
		}
	?>
	</table>
	
</body>
</html>
