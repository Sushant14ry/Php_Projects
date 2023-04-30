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
		<h1><a href="index.php">Welcome To Admin Pannel</a></h1>
	</header>
	<aside>
		<h1>Manage Content</h1><br>
		<h2><a href="index.php?view=view">View Post</a></h2>
		<h2><a href="insert.php">Insert Post</a></h2>
		<h2><a href="#">Admin Logout</a></h2>
	</aside>
	<br>
		<div class="insert">
			<?php include 'insert_post.php';  ?>
		</div>
	
</body>
</html>

<?php  } ?>