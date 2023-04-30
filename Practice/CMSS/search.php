<?php
	include 'conect.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS Project</title>
	<link rel="stylesheet" type="text/css" href="cmss.css">
</head>
<body>
	<!-- Topbar -->
	<div><?php include 'topbar.php' ?></div>

	<!-- Navbar -->
	<div><?php include 'navbar.php' ?></div>

	<!-- Post Section -->
	<div class="post">
		<?php
			if(isset($_GET['submit'])){

				$scr_id = $_GET['search'];

			$query = "SELECT * FROM post WHERE post_title LIKE '%$scr_id%' ";
			$run = mysqli_query($con,$query);

			while($row = mysqli_fetch_array($run)){

				$post_id = $row['id'];
				$post_title = $row['post_title'];
				$post_image = $row['post_img'];
				$content = substr($row ['post_content'],0,200);	
		?>
		<h1 style="margin-top: 16px;"><a href="pages.php?id=<?php echo $row['id'] ?>"><?php echo $post_title ?></a></h1><br>

		<center><a href="pages.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $post_image ?>" width="150px" height="100px"></a></center>
		<p><?php echo $content ?></p><br><br>
		<p align="right"><a href="pages.php?id=<?php echo $row['id'] ?>" style="margin-right: 12px; background: blue; color: white; padding: 10px; text-decoration: none; font-weight: bold;border-radius: 20px;">Read More</a></p>
		<br>
	<hr>

	<?php  } }  ?>	

	</div>

	<!-- Sidebar -->
	<div><?php include 'sidebar.php' ?></div>
	<br><br>

	<!-- Footer -->
	<div><?php include 'foot.php' ?></div>

</body>
</html>