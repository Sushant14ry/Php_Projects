<?php
	require('connection.php');
	require('function.php');

	unset($_SESSION['USER_LOGIN']);
	unset($_SESSION['USER_ID']);
	unset($_SESSION['USER_NANE']);

	header('location:index.php');
	die();

	session_destroy();
?>