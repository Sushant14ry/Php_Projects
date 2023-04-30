<?php
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'ajax');

	$nameid = $_POST['datapost'];

			$q = " SELECT * FROM classes";
			$ress = mysqli_query($con,$q);
			while($rows = mysqli_fetch_array($ress)){
			?>
			<option><?php echo $rows['class'];  ?></option>	

			<?php		
				}
		?>



