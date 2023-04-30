<?php
	include 'conect.php';
?>
<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:login.php');
	}else{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Pannel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1><a href="index.php" style="text-decoration: none;">Welcome To Admin Pannel</a></h1> 

	</header>
	<aside>
		<h1>Manage Content</h1><br>
		<h2><a href="index.php?view=view">View Post</a></h2>
		<h2><a href="insert_post.php">Insert Post</a></h2>
		<h2><a href="../index.php">Visit Site</a></h2>
		<h2><a href="query.php?query=query">Contact Quiry</a></h2>
		<h2><a href="logout.php">Admin Logout</a></h2><br><br><br>
		<h2>Welcome : <?php echo $_SESSION['username'] ;  ?></h2>
	</aside>
	<br>
	<section>
	<div class="data">
		<?php 
			if(isset($_GET['query'])){
		 ?>
		<table width="800" align="center" border="3px solid black" cellspacing="0">
		<tr>
			<th align="center" colspan="9" bgcolor="orange">View All Post</th>
		</tr>
		<tr>
			<th>ID No</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Message</th>
			<th colspan="2">Operation</th>
		</tr>
		
		<?php  

		$i = 1;
			if(isset($_GET['query'])){
			$query = "SELECT * FROM enquiry order by 1 desc"; 
			$run = mysqli_query($con,$query);
			while($row = mysqli_fetch_array($run)){

			$id = $row['id'];
			$email = $row ['email'];
			$subject = $row ['subject'];
			$Message = $row ['sms'];

	?>
		<tr align="center">
			<td><?php echo $i++ ; ?></td>
			<td><?php echo $email ; ?></td>
			<td><?php echo $subject ; ?></td>
			<td><?php echo $Message ; ?></td>
			<td><a href="del.php?del=<?php echo $id ; ?>">Delete</a></td>
		</tr>

	<?php  } } } ?>
	</table>
</div>


</section>
</body>
</html>

<?php  } ?>