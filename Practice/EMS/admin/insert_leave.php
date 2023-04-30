<?php
	include '../conect.php';

	if(isset($_REQUEST['from'])){

			$from = $_POST['from'];
			$to = $_POST['to'];
			$earning = $_POST['earning'];
			$medical = $_POST['medical'];
			$casual = $_POST['casual'];
			$asign_by = $_POST['assign'];
			$emp_list = $_POST['emp'];

	//print_r($emp_list);
		foreach($emp_list as $emp){

		$leave_insert = "INSERT INTO assign_leave(v_from,v_to,e_leave,m_leave,c_leave,assign_to,assign_by) VALUES('$from','$to','$earning','$medical','$casual','$emp','$asign_by')";

		$run = mysqli_query($con,$leave_insert);

		}
		if($run){
			echo "<script> alert('Leave Assign Successfull') </script>";
			header('location:assign_leave.php');
		}else{
			echo "Please Select Employee List";
			
		}	

	}
?>