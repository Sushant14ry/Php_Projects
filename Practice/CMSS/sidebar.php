<?php  
	include 'conect.php';
?>

<div class="sidebar"> 
	<h2>Search Post</h2><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Search" name="srch" class="inputbox" placeholder="Search Post"><br>
	<button><a href="">Search</a></button>
	<br>
	<hr>

	<?php

	$run = "SELECT * FROM post order by 1 desc LIMIT 0,5";
	$query = mysqli_query($con,$run);

	while($row = mysqli_fetch_array($query))
	{	
		$post_id = $row['id'];

		$title = $row ['post_title'];
		$date = $row ['post_date'];
		$author = $row ['post_author'];
		$content = substr($row ['post_content'],0,200);
		$image = $row ['post_img'];
?>
	<br>
	<center><a href="pages.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $image ?>" width="60px" height="50px"></a></center>
	<h3><a href="pages.php?id=<?php echo $row['id'] ?>"><?php echo $title ?></a></h3><br>
<hr>
<?php  } ?>	


</div>


