<?php
	require('connection.php');
	require('function.php');

	$email=get_safe_value($con,$_POST['email']);
	$type=get_safe_value($con,$_POST['type']);

	if($type=='email'){
		$email=get_safe_value($con,$_POST['email']);
		$otp=rand(11111,99999);
		$_SESSION['EMAIL_OTP']=$otp;
		$html="$otp is your OTP"; 

		inlcude('smtp/PHPMailerAutoload.php');
		$mail= new PHPMailer(true);
		$mail ->isSMTP();
		$mail ->Host="smtp.gmail.com";
		$mail ->POST=587;
		$mail ->SMTPSecure="tls";
		$mail ->Username="csushant224@gmail.com";
		$mail ->Password="Sushant1530";
		$mail ->SetFrom("csushant224@gmail.com");
		$mail ->addAdress($email);
		$mail ->isHTML(true);
		$mail ->Subject="New OTP";
		$mail ->Body=$html;
		$mail ->SMTPOptions=array('ssl'=>array(
			'verify_peer'=>false,
			'verify_peer_name'=>false,
			'allow_self_asigned'=>false
		));
		if($mail ->send()){
			echo "done";
		}else{

		}



	}
?>