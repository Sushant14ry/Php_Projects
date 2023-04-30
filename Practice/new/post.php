<?php
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'ajax');

	$name_id = $_POST['datapost'];

	$q = "SELECT * FROM classes where mid = '$name_id' ";
	$result = mysqli_query($con,$q);
	while($rows = mysqli_fetch_array($result)){
				?>
	<option ><?php echo $rows['class']; ?></option>	
		<?php		
		}
		?>


