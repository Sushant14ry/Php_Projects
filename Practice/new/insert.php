<html>
<head>
	<title>Insert Data</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<h1 class="text-center">Insert data using Ajax PHP and Mysql</h1>
		<br>
		<div class="col-lg-8 m-auto">
		<form id="myform" action="insertt.php" method="post">
			<div class="form-group">
				<label>Username : </label>
				<input type="text" class="form-control" name="user">
				<label>Password : </label>
				<input type="text" class="form-control" name="pass"><br>
				<input type="submit" class="btn btn-success" id="submit" name="save" value="Submit">
			</div>
			
		</form>
	</div>
	</div>

	<!-- table create -->
	<div class="container">
		<br><br>
		<h3 class="text-center bg-danger text-white">Display the Data Using  Ajax</h3>
		<br>
		<button class="btn btn-danger" id="displaydata">GetData</button>
		<table class="table table-stripped table-bordered text-center">
			<thead >
				<th>id</th>
				<th>Name</th>
				<th>Password</th>
			</thead>
			
			<tbody id="response">
				
			</tbody>
		</table>
		
	</div>


	

	<script type="text/javascript">
		$(document).ready(function(){
			var form = $('#myform');

			$('#submit').click(function(){
				$.ajax({
					url: 'insertt.php',
					type: 'POST',
					data: $('#myform input').serialize(),

					success: function(data){
						console.log(data);
					}
					
				});
			});

		});
		


// Show data

// $('#displaydata').click(function(){
	displaydata();
	function displaydata(){


	$.ajax({
		url:'displayajax.php',
		type:'post',
		success:function(data,status){
			$('#response').html(data);
		}
	});
// });

}
	</script>


</body>
</html>