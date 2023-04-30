<?php include '../auth/auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee Pannel</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="../boot/bootstrap.min.css">
</head>
<body>

<header>
	<nav class="navbar navbar-inverse bg-dark fixed-top">
      <div class="container-fluid">
      	<div class="navbar-header text-white">
      		<h1>Welcome To Admin Pannel</h1>
      	</div>
        <div class="navbar-header justify-content-start font-weight-bold">
           <a class="p-4  text-left" href="admin_dash.php" style="text-decoration: none; text-transform: uppercase;">Dashboard</a>
          <a class="p-4  text-left" href="insert_user.php" style="text-decoration: none; text-transform: uppercase;">Register</a>
          <a class="p-4  text-left" href="Task.php" style="text-decoration: none; text-transform: uppercase;">Task</a>
          <a class="p-4  text-left" href="assign_leave.php" style="text-decoration: none; text-transform: uppercase;">Leave</a>
        </div>
  <!-- Brand Name End -->

  <!-- Navbar Menu -->    
      <ul class="nav nav-navbar justify-content-end right font-weight-bold "> 
        <!-- <li class="nav-item p-2"><a class="nav-link" href="#home">Gmail</a></li>
        <li class="nav-item p-2"><a class="nav-link" href="#about">Facebook</a></li> -->
         <li class="nav-item mr-2 btn btn-warning"><a class="nav-link" href="register.php">Profile</a></li>
        <li class="nav-item  btn btn-danger justify-content-end"><a class="nav-link  text-white" href="logout.php">Logout</a></li>
       
      </ul>
  </div>
</nav>
	</header><br><br>
