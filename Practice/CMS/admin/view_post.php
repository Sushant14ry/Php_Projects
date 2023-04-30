<?php
	include 'conect.php'; // Coneection database
?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS Admin Pannel</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="../boot/bootstrap.min.css">
</head>
	<body>
<!-- Run Admin Pannel Start -->
			<div class="col-md-10 col-lg-10 col-sm-10">
				<div class="container-fluid mt-3" style="overflow:scroll; box-sizing: border-box;padding-bottom: 30px" >
					
					<table class="table table-striped text-center" >
						<?php
						
					?>
						<tr>
							<th>ID</th>
							<th width="250px">Tittle</th>
							<th width="350px">Body</th>
							<th width="80px">Picture</th>
							<th>Date</th>
							<th>Role</th>
							<th width="100px">Author</th>
							<th width="250px">Operation</th>
						</tr>
						<?php
							$i = 1;
							$view = "SELECT * FROM post order by 1 desc";
							$run = mysqli_query($con,$view);

							if(mysqli_num_rows($run) > 0){ 
							while($rows = mysqli_fetch_array($run)){

								$post_id = $rows['id'];
								$title = $rows ['title'];
								$Post_body = substr($rows ['body'],0,120);
								$image = $rows ['picture'];
								$date = $rows ['date'];
								$Role = $rows ['role'];
								$Author	= $rows['author'];					?>
						<tr>
							<td><?php echo $i++ ; ?></td>
							<td><?php echo $title ; ?></td>
							<td><?php echo $Post_body ; ?></td>
							<td><img src="../<?php echo $image ; ?>" width="80px" height="70px"></td>
							<td><?php echo $date ; ?></td>
							<td><?php echo $Role; ?></td>
							<td><?php echo $Author ; ?></td>
							<td>
							<a href="edit.php" class="btn btn-primary font-weight-bold m-2">Edit</a>
							<a href="del_post.php?id=<?php echo $post_id ; ?>" class="btn btn-warning font-weight-bold m-2">Delete</a>
							</td>
						</tr>
						<?php
							}
						?>
						

					</table>
					<?php
						}
					?>
				</div>
			</div>

			<!-- Run Admin Pannel End -->
			
		</div>  <!-- End Of Row -->
		
	</div>  <!-- End Of Container -->
