<?php

	$conn = mysqli_connect('localhost','root','','yahoo') or die("Connection Failed");

	$sql = "SELECT * FROM students";
	$result = mysqli_query($conn,$sql);
		$output=" ";
		$i=1;
	if(mysqli_num_rows($result) > 0){
		$output ='<table border="1" width="100%" cellpadding="10px" cellspacing="0">
			<tr>
				<th width="100px">ID</th>
				<th>Name</th>
				<th width="100px">Edit</th>
				<th width="100px">Delete</th>

			</tr>';
		while($rows = mysqli_fetch_assoc($result)){
			$output.="<tr><td>{$rows["id"]}</td><td>{$rows["first_name"]} {$rows["last_name"]}</td><td><button id='#modal' class='edit-btn' data-id='{$rows["id"]}'>Edit</button></td>
			<td><button class='delete-btn' data-id='{$rows["id"]}'>Delete</button></td></tr>";
		}
		$output.= '</table>';

		mysqli_close($conn);
		echo $output;
	}else{

		echo "Record Not Found";

	}

?>
