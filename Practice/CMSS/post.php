<?php 
	include 'conect.php';
?>
<div class="post">
	<?php

	$run = "SELECT * FROM post order by rand() LIMIT 0,4";
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
	<h1 style="margin-top: 16px;"><a href="pages.php?id=<?php echo $row['id'] ?>"><?php echo $title ?></a></h1><br>
	<p><b>Publish : &nbsp <?php echo $date ?></b></p>
	<p style="float: right; margin-right: 8px;"><b>Posted By : <?php echo $author ?></b></p><br><br>
	<center><a href="pages.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $image ?>" width="150px" height="100px"></a></center>
	<p><?php echo $content ?></p><br><br>
	<p align="right"><a href="pages.php?id=<?php echo $row['id'] ?>" style="margin-right: 12px; background: blue; color: white; padding: 10px; text-decoration: none; font-weight: bold;border-radius: 20px;">Read More</a></p>
	<br>
<hr>

<?php  }  ?>	
</div>

