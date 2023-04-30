<?php
	include 'conect.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS Project</title>
	<link rel="stylesheet" type="text/css" href="cmss.css">
</head>
<body>
	<!-- Topbar -->
	<div><?php include 'topbar.php' ?></div>

	<!-- Navbar -->
	<div><?php include 'navbar.php' ?></div><br>

	<!-- Post Section -->
	<div class="post">
		<form action="contact.php" method="Post">
			<table width="600" align="right" border="0" cellspacing="0"  style="padding-top: 60px;" >
				<tr>
					<td align="center" colspan="5" ><h2><b>Contact Us</b></h2><br><br></td>
				</tr>
				<tr>
					<td align="center" style="padding:15px" ><b>Your email</b></td>
					<td><input type="email" name="email" class="inbox" size="30" required></td><br>
				</tr>
				<tr>
					<td align="center" style="padding:20px"><b>Subject</b></td>
					<td><input type="text" name="subject" class="inbox" size="30"></td>
				</tr>
				<tr>
					<td align="center" style="padding:15px"><b>Your Message</b></td>
					<td><textarea cols="32" rows="5" name="msg"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td align="center"><button name="send" style="padding:15px; border-radius: 16px; margin-top: 16px;width: 100px;text-transform: uppercase;font-weight: bold;text-align: center;cursor: pointer;" >Submit</button></td>
				</tr>
				
			</table>
			
		</form>

		<!-- Insert Data Query  -->
	<?php
	if(isset($_POST['subject'])){

		$sender = $_POST['email'];
		$Subject = $_POST['subject'];
		$Message = $_POST['msg'];

		$contact = "INSERT INTO enquiry(email,subject,sms) VALUES('$sender','$Subject','$Message')";
		$run = mysqli_query($con,$contact);
		if($run){
			echo "<script>
		alert('Quiry Send Sucessfull I will Call You Back');
	</script>";
		}else{
			echo "Failed To Submit";
		}
	}
		?> 
		<!-- End of Insert data Quiry -->

	</div>

	<!-- Sidebar -->
	<div><?php include 'sidebar.php' ?></div>
	<br><br>

	<!-- Footer -->
	<div><?php include 'foot.php' ?></div>
	

</body>
</html>
	
		<!-- Auto Mail Response Code -->
	<?php
	if(isset($_POST['send'])){

		$sender = $_POST['email'];
		$Subject = $_POST['subject'];
		$Message = $_POST['msg'];

		$to = "Csushant224@gmail.com";
		$sms = "Email From :<br> ".$Message;

		if($sender == '' or $Subject == '' or $Message == '' ){
			echo "<script>
		alert('Please Fill Blank Filled');
	</script>";
		exit();
		}

		mail($to,$Subject,$Message,$sender);

		$to_sender = $_POST['email'];
		$sub = "Tech Edu Pro";
		$mesg = "Thank You For Sending An Email We will Get to Ypou Soon <br>";
		$from = "csushant193@gmail.com";
		mail ($to_sender,$sub,$mesg,$from);

		echo "<script>
		alert('Message Send Sucessfull !');
	</script>";
	}

?>

<!-- Auto Mail Response Code End -->

