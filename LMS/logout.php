<?php
	include('config.php');
	session_start();

	unset($_SESSION["stu_email"]);
	session_destroy();
	echo '<script>window.location.href="login.php"</script>';
?>