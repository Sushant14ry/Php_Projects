<?php
	include '../conect.php';

	if(isset($_REQUEST['submit'])){

			$msg = $_POST['msg'];
			$assign = $_POST['assign'];

			$emp_list = $_POST['emp'];

	//print_r($emp_list);
		foreach($emp_list as $emp){

	

		$task_insert = "INSERT INTO task(task,user_id,assign_by) VALUES('$msg','$emp','$assign')";

		$run = mysqli_query($con,$task_insert);

		}
		if($run){
			echo "sucess";
			header('location:task.php');
		}else{
			echo "fail";
		}	
	}

?>