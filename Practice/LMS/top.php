<?php
  include('config.php');
  session_start();

  if(!isset($_SESSION["stu_email"])){
    header('location:login.php');
  }
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- external css -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!-- font awesome css -->
	<!-- <link rel="stylesheet" type="text/css" href="css/all.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
</head>
<body>
	<!-- Navbar start -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="index.php">Library Management System (LMS)</a>

	  <!-- Links -->
	  <ul class="navbar-nav ml-auto font-weight-bolder">
	    
	    <!-- Dropdown -->
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
	        My profile
	      </a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href="view_profile.php">View Profile</a>
	        <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
	        <a class="dropdown-item" href="change_pass.php">Change password</a>
	      </div>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="logout.php">LogOut</a>
	    </li>
	  </ul>
	</nav>
<!-- Navbar End -->

<!-- Second navbar Start -->
<?php
  if($_SESSION["stu_role"] == 1){

?>
<nav class="navbar  navbar-expand-sm text-white bg-secondary navbar-light mt-5">
  
  <ul class="navbar-nav mx-5">
    <li class="nav-item mr-4">
      <a class="nav-link" href="index.php">Dashboard</a>
    </li>
    <li class="nav-item dropdown mr-4">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Books
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="add_book.php">Add Books</a>
        <a class="dropdown-item" href="manage_book.php">Manage Books</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Categories
      </a>
      <div class="dropdown-menu mr-4">
        <a class="dropdown-item" href="add_cat.php">Add Categories</a>
        <a class="dropdown-item" href="manage_cat.php">Manage Categories</a>
      </div>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown mr-4">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Authors
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="add_author.php">Add Authors</a>
        <a class="dropdown-item" href="manage_author.php">Manage Authors</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="issued_book.php">Issue Book</a>
    </li>
  </ul>
</nav><br>
<!-- Second navbar End -->
<?php } ?>