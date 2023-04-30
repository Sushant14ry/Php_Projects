<!DOCTYPE html>
<html>
<head>
	<title>Crud Operation</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center text-uppercase text-primary">Ajax Crud Operation</h1>

		<div class="d-flex justify-content-end">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 			 Open modal</button>
		</div>

		<h2 class="text-danger">All Records</h2>
		<div id="record_contant"></div>

	<!-- The Modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Ajax Crud Operation</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- Modal body -->
				<div class="modal-body">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" id="firstname" name="" class="form-control" placeholder="Enter Your First Name">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" id="lastname" name="" class="form-control" placeholder="Enter Your Last Name">
					</div>
					<div class="form-group">
						<label>Email ID</label>
						<input type="email" id="email" name="" class="form-control" placeholder="Enter Your Email">
					</div>
					<div class="form-group">
						<label>Number</label>
						<input type="text" id="mobile" name="" class="form-control" placeholder="Enter Your Mobile Number">
					</div>
				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-Primary" data-dismiss="modal" onclick="addrecord()">Save</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	</div>

	<script type="text/javascript">
		function addrecord(){
			var firstnames = $('#firstname').val();
			var lastnames = $('#lastname').val();
			var emails = $('#email').val();
			var mobiles = $('#mobile').val();

			$.ajax({
				url:'backend1.php',
				type:'POST',
				data: {firstname:firstname,lastname:lastnames,email:emails,mobile:mobiles},
				success:function(data,status){
					readRecord();

				}

			})
		}
	</script>

</body>
</html>