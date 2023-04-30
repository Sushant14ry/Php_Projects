<!DOCTYPE html>
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
		<div class="bg-primary">
			<h2 class="text-center ">Add Records with PHP & Ajax</h2>
		</div>
		<div class="text-center bg-success">
			<table>
				<tr>
					<td id="inpul">
				<label>First Name</label>
				<input type="text" id="first" name="">
				<label>Last Name</label>
				<input type="text" id="last" name="">&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" id="save-button" value="Save" name="">
					</td>
				</tr>
				
			</table>

		</div>



		<!-- Load dataFrom  Database -->
			<div>
				<table id="main" class="table table-stripped  bg-success text-center">
					<tr>
						<td id="header">
							<h1>PHP With Ajax</h1>
						</td>
					</tr>
					<tr>
						<td id="table-load">
							<input type="submit" id="button_load" value="load button" name="">
						</td>
					</tr>
					<td id="table_data">
						
					</td>
				</table> 
				<div id="error-message"></div>
				<div id="success-message"></div>
			</div>

			<div id="modal">
				<div id="modal-form">
					<h2>Edit Form</h2>
					<table cellspacing="0" width="100%">
						<tr>
							<td>First Name</td>
							<td><input type="text" id="fname" name=""></td>
							<td>Last Name</td>
							<td><input type="text" id="lane" name=""></td>
							<td></td>
							<td><input type="submit" id="submit" value="Save" name=""></td>
							
						</tr>
					</table>
					<div id="close-btn" class="btn btn-danger">
						Close
						
					</div>
					
				</div>
				
			</div>

	</div>

	<script type="text/javascript">


		// Show data from Database
		 $(document).ready(function(){

		 	$('#button_load').on('click',function(e){
		 		$.ajax({
		 			url:'ajax_load.php',
		 			type: 'POST',

		 			success:function(result){
		 				$("#table_data").html(result);
		 			}

		 		});
		 	});

		 });

		 // Insert data from Table



		 $('#save-button').on('click',function(e){
			e.preventDefault();
			var fname = $('#first').val();
			var lname = $('#last').val();
			if(fname == "" || lname == ""){
				$("#error-message").html("All fields are Required.").slideDown();
				$("#success-message").slideUP();

			}else{

			$.ajax({
				url:'ajax_insert.php',
				type:'POST',
				data: {first_name :fname, last_name:lname},
				success:function(data){
					if(data == 1){
						$("#inpul").trigger("reset");
						$("#success-message").html("Data Inserted Succesfully").slideDown();
						$("#error-message ").slideUP();
					}else{
						$("#error-message").html("Can't Save Records").slideDown();
						$("#success-message").slideUP();
					}		
				}
			});
		   }
		});

		 	// delete table data from Database

		 	$(document).on('click','.delete-btn',function(){
		 		var student_Id = $(this).data("id");
		 		var element = this;

		 		$.ajax({
		 				url:"del.php",
		 				type:"POST",

		 				data: {id :student_Id},
		 				success:function(data){

		 				}

		 		});
		 	});


		 	// Edit table data
		 	$(document).on('click','.edit-btn',function(){
		 		$("#modal").show();

		 	});

	</script>
	

</body>
</html>