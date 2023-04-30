<?php
	include 'conect.php'; // Coneection database
?>
<?php
	include 'top_cms.php';
?>

   <!-- Menu bar End -->

   <!-- Post Body Start -->
   <?php include 'main_post.php'; ?>
	   	

   <!-- Sidebar Start -->

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
	   	   <div class="recent-Post p-2">
	   	   		
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
	   		<center><a href="post.php?id=<?php echo $post_id ; ?>"><img src="<?php echo $image ?>" width="80px" height="60px"></a></center>
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

<?php
	include 'footer.php';
?>

  <!-- Footer Section Area End -->


</body>
</html>


   <!-- Search box Backend Start -->





	<!-- Search Box Backend End -->