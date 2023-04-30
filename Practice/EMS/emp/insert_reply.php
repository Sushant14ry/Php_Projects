<?php include '../auth/auth.php'; ?>
<?php


		$msg_id = $_POST['m_id'];
		$user_id = $_POST['user_id'];
		$reply = mysqli_real_escape_string($con,$_POST['m_reply']);

		$reply = "INSERT INTO task_reply(reply,msg_id,reply_by) VALUES('$reply','$msg_id','$user_id')";
		$run = mysqli_query($con,$reply);

		if($run){
			echo "Reply Successfull";
			header('location:http://localhost/Practice/EMS/emp/view_msg.php');
		}else{
			echo "Error in Reply Please try Again";
		}
?>