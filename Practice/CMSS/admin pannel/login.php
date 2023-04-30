<?php
	include 'conect.php';
?>
<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<br><br>
	<form action="login.php" method="post">
		<table width="400" align="center" border="20">
			<tr>
				<td colspan="5" align="center" bgcolor="gray">Admin Login</td>
			</tr>
			<tr>
				<td align="right">Username</td>
				<td><input type="text" name="username"></td>
			</tr>			
			<tr>
				<td align="right">Password</td>
				<td><input type="Password" name="userpass"></td>
			</tr>
			<tr>
				<td colspan="5" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>

<?php
	if(isset($_POST['login'])){

		$Username = mysqli_real_escape_string($con,$_POST['username']);
		$Userpass = mysqli_real_escape_string($con,$_POST['userpass']);
		$encrypt = md5($Userpass);

		$admin_login = "SELECT * FROM login WHERE username = '$Username' AND userpass = '$Userpass' ";

		$run = mysqli_query($con,$admin_login);
		if($row = mysqli_num_rows($run) > 0 ){
			
			$_SESSION['username'] =$Username; 
			@header('location:index.php');
		}else{
			echo "<script>
		alert('Username or Password is Incorrect !')
	</script>";
		}
	}

?>
