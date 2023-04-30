<?php include 'conect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Responsive CMS Project</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="boot/bootstrap.min.css">
</head>
<body>

<div class="container pt-4">
   	<div class="row">
	   	<div class="col-md-9 col-lg-9 col-12">
	   	<div class="Post" style="text-decoration: none;">

	   		<?php
			
				$view = "SELECT * FROM post order by 1 desc";
				$run = mysqli_query($con,$view);

				while($rows = mysqli_fetch_array($run)){

				$post_id = $rows['id'];
				$title = $rows ['title'];
				$Post_body = substr($rows ['body'],0,300);
				$image = $rows ['picture'];
				$date = $rows ['date'];
				$Role = $rows ['role'];
				$Author	= $rows['author'];				
			?>

	   		<h4><a href="post.php?id=<?php echo $post_id ; ?>"><?php echo $title ?></a></h4>
	   		<p class="mt-4 font-weight-bold">Post Date : <?php echo $date ?> </p>
	   		<p align="right" class="mr-3 font-weight-bold">Publish By :<?php echo $Author ?> </p>
	   		<center><a href="post.php?id=<?php echo $post_id ; ?>"><img src="<?php echo $image ?>" width="80px" height="60px"></a></center>
	   		<br>
	   		<p><?php echo $Post_body ?></p>
	   		<p align="right"><a href="post.php?id=<?php echo $post_id ; ?>" class="btn btn-primary">Read More</a></p>
	   		<br>
	   		<hr>

			<?php  }  ?>

	   	</div>
	   	</div>