<?php
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'ajax');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" >
		<h2 class="text-center text-danger">Get Data From Database</h2>
		<form class="col-lg-6">
			Username : <input type="text" class="form-control" name=""><br>
			Password : <input type="text" class="form-control" name=""><br>
			Degree <select class="form-control" onchange="myfun(datavalue)" >
				<option>Select Any One</option>
				<?php
					$q = " SELECT * FROM degree";
					$ress = mysqli_query($con,$q);
					while($rows = mysqli_fetch_array($ress)){
					?>
					<option value="<?php echo $rows['mid'];  ?>"><?php echo $rows['degrees'];  ?></option>	
				<?php		
					}
				?>
			</select>
			<br>
			Class : <select class="form-control" id="getdata">
				<option>Choose any One</option>
			</select>
			<br><br>
			<button class="btn btn-primary">Submit</button>
		</form>
		
	</div>

	<script type="text/javascript">
		function myfun(datavalue){
			$.ajax({
				url : 'class.php',
				type :'POST',
				data : { datapost : datavalue },

				success :function(result){
					$.('#getdata').html(result);
				}

			});
		}

	</script>

</body>
</html>