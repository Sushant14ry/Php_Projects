<?php
	include 'conect.php'; // Coneection database
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

	<!-- Top Menu Start -->

	<header>
	<nav class="navbar navbar-inverse bg-dark fixed-top">
      <div class="container-fluid">
        <div class="navbar-header left">
          <a href="index.php">Home</a>
          <a href="#">About Us</a>
          <a href="#">Contact Us</a>
        </div>
  <!-- Brand Name End -->

  <!-- Navbar Menu -->    
      <ul class="nav nav-navbar justify-content-end right">
        <li class="nav-item"><a class="nav-link" href="#home">Gmail</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">Facebook</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
      </ul>
  </div>
</nav>
	</header>

 <!-- top Menu Close -->
 <div class="container">
 	<div class="jumbotron"></div>
 </div>

 <!-- Menu bar Start -->
 <div class="container">
 	<nav class="navbar navbar-expand-lg navbar-light bg-primary">

    <ul class="navbar-nav font-weight-bold text-danger">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Fact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nature</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">building</a>
      </li>

   	 </ul>
    </nav>
  </div>

   <!-- Menu bar End -->

   <!-- Post Body Start -->
   <div class="container pt-4">
   	<div class="row">
	   	<div class="col-md-9 col-lg-9 col-12">
	   	<div class="Post">

	   		<?php
				
	   			$post_id = $_GET['id'];

				$view = "SELECT * FROM post WHERE id ='$post_id' ";
				$run = mysqli_query($con,$view);

				while($rows = mysqli_fetch_array($run)){

				$post_id = $rows['id'];
				$title = $rows ['title'];
				$Post_body = $rows ['body'];
				$image = $rows ['picture'];
				$date = $rows ['date'];
				$Role = $rows ['role'];
				$Author	= $rows['author'];		 			
		    ?>

	   		<h1><?php echo $title ?></h1>
	   		<p class="mt-4 font-weight-bold">Post Date : <?php echo $date ?> </p>
	   		<p align="right" class="mr-2 font-weight-bold">Publish By :<?php echo $Author ?> </p>
	   		<center><img src="<?php echo $image ?>" width="400px" height="300px"></center><br>
	   		<p><?php echo $Post_body ?></p>
	   		<br>
	   		<hr>
				
			<?php  } ?>

	   	</div>
	   	</div>
	   	
	   		   	<div class="col-md-3 col-lg-3 col-12">

	   		<!-- Search bar Start -->

	   	  <div class="search">
	   		<form action="search.php" method="get">
	   			<input type="text" name="search">
	   		<input type="submit" name="submit" class="btn btn-primary m-3 mx-5 pointer font-weight-bold">
	   		</form>
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
	   	   	<h4><a href="post.php?id=<?php echo $post_id ; ?>"><?php echo $title ?></a></h4>		
	   		<center><a href="post.php?id=<?php echo $post_id ; ?>"><img src="<?php echo $image ?>" width="80px" height="60px"></a></center><br>
	   		<p><?php echo $Post_body ?></p>
	   		<br>
	   		<hr>

	   	<?php  } ?>
   	</div>
   </div> <!-- End of recent Post -->
  </div> <!-- End Of Side bar --> 

<!-- Footer Section Area Start -->

    <div class="container-fluid fixed-bottom bg-dark text-white p-3">
        <h2 align="center">Copy Right 2020 @ By : Sushant Chaudhary</h2>
  </div>

  <!-- Footer Section Area End -->


</body>
</html>