
<?php
	include 'conect.php';
?>

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


	   	
<!-- Post Body Start -->
   	<div class="container pt-4">
   	<div class="row">
	 <div class="col-md-9 col-lg-9 col-12">
	 	<div class="post">

	 		<!-- Start Search box Backend Code -->

			<?php
				if(isset($_GET['submit'])){

				$srch_id = $_GET['search'];  // take Value from Search Input Box

				$Search = "SELECT * FROM post WHERE title LIKE '%$srch_id%' ";
				$run = mysqli_query($con,$Search);

				while($rows = mysqli_fetch_array($run)){

					$id = $rows['id'];	
					$title = $rows['title'];	
					$image = $rows['picture'];	
					$content = $rows['body'];	
				?>
					<h4><?php echo $title ; ?></h4><br>		
			   		<center><img src="<?php echo $image ; ?>" width="400px" height="400px"></center><br>
			   		<p><?php echo $content  ; ?></p>
			   		<p align="right"><a href="post.php?id=<?php echo $id ; ?>" class="btn btn-primary">Read More</a></p>
			   		<br>
			   		<hr>
			   	<?php  }  }  ?>



<!-- End Search box Backend Code -->
	 		
	 	</div>
	   	</div>


   <!-- Sidebar Start -->
	   	
	   	<div class="col-md-3 col-lg-3 col-12">

	   		<!-- Search bar Start -->

	   	  <div class="search">
	   		<input type="text" name="search">
	   		<button class="btn btn-primary m-3 mx-5 pointer font-weight-bold">Search</button>	
	   	   </div>
	   	   <hr>
	   	   <!-- Search Bar End -->
	   	   <div class="recent p-2">
	   	   		
	   	   	<?php
			
				$view = "SELECT * FROM post order by 1 desc LIMIT 0,4 ";
				$run = mysqli_query($con,$view);

				while($rows = mysqli_fetch_array($run)){

				$post_id = $rows['id'];
				$title = $rows ['title'];
				$Post_body = substr($rows ['body'],0,100);
				$image = $rows ['picture'];				
			?>
	   	   	<h4><?php echo $title ?></h4>		
	   		<center><img src="<?php echo $image ?>" width="80px" height="60px"></center><br>
	   		<p><?php echo $Post_body ?></p>
	   		<br>
	   		<hr>

	   	<?php  } ?>
   	</div>
   </div> <!-- End of recent Post -->
  </div> <!-- End Of Side bar --> 
  </div> <!-- End of Row in Body -->
</div> <!-- End of Container in Body -->

<!-- Footer Section Area Start -->