<!DOCTYPE html>
<html>
<head>
	<title>Form Data with Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<h2 class="text-center">Ajax Asynchrounous Method </h2>

			<form class="form-group">
			<label>Username :</label>
			<input type="text" id="user" class="form-control" name=""><br>
			<label>Password :</label>
			<input type="text" id="pass" class="form-control" name=""><br>
			<label>Choose AnyOne :</label>
			<select class="form-control" onchange="myfun(this.value)">
				<option>Select State</option>
				<option>Maharastra</option>
				<option>UP</option>
				<option>Bihar</option>
			</select><br>

			<label>Choose City</label>
			<select class="form-control" id="city">
				<option>Select City</option>
			</select>
		</form>

	</div>
</div>
		
</div>

<script type="text/javascript">
	function myfun(data){
		alert(data);

		var req = new XMLHttpRequest();
		req.open('GET','http://localhost/Practice/new/response.php?datavalue=data',true);
		req.send();

		req.onreadystatechange=function(){
			if(req.readystate == 4 && req.status == 200){
				document.getElementById('city').innerHTML = req.responseText;

			}
		}
	}

</script>

</body>
</html>