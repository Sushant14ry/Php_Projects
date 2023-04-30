<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!-- external css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- font awesome css -->
  <link rel="stylesheet" type="text/css" href="css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">

  <title>E-Learning</title>
</head>
<body>
  <!-- Start Navigation or header -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark pl-5 ">
  <a class="navbar-brand " href="index.php">E-Learning</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav custom_nav pl-5">
      <li class="nav-item active custom_nav_item">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item custom_nav_item" >
        <a class="nav-link" href="courses.php"><i class="fab fa-discourse"></i> Courses</a>
      </li>
      <li class="nav-item custom_nav_item" >
        <a class="nav-link" href="payment.php"><i class="fas fa-money-bill-alt"></i> Payment Status</a>
      </li>
      <?php
          session_start();
          if(isset($_SESSION['is_login'])){
            echo '<li class="nav-item custom_nav_item" >
        <a class="nav-link" active href="my_profile.php"><i class="fas fa-user-circle"></i> My Profile</a>
      </li>
      <li class="nav-item custom_nav_item" >
        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> LogOut</a>
      </li>';
          }else{
            echo '<li class="nav-item custom_nav_item" >
        <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
      </li>
      <li class="nav-item custom_nav_item" >
        <a class="nav-link" href="Singup.php"><i class="fas fa-user-plus"></i> SingUp</a>
      </li>';
          }
      ?>
      
    </ul>
  </div>
</nav>
  <!-- End Navigation or Header -->