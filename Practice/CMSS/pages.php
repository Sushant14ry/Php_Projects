	<?php
	include 'conect.php';

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

	$page_id = @$_GET['id'];

	$query = "SELECT * FROM post WHERE id ='{$page_id}' ";
	$run = mysqli_query($con,$query);

	while($row = mysqli_fetch_array($run))
		{	
			
			$title = $row ['post_title'];
			$date = $row ['post_date'];
			$author = $row ['post_author'];
			$content = $row ['post_content'];
			$image = $row ['post_img'];	
?>
		<h1 style="margin-top: 16px"><?php echo $title ?></h1><br>
		<p><b>Publish : &nbsp <?php echo $date ?></b></p>
		<p style="float: right; margin-right: 8px;"><b>Posted By : <?php echo $author ?></b></p><br><br>
		<center><img src="<?php echo $image ?>" width="600px" height="400px"></center>
		<br>
		<p><?php echo $content ?></p><br><br>	
<?php  } ?>
		
	</div>

	<!-- Sidebar -->
	<div><?php include 'sidebar.php' ?></div>

	<!-- Footer -->
	<div><?php include 'foot.php' ?></div>

</body>
</html>