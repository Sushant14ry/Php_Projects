<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:http://localhost/Practice/news-template/admin/');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-4">
                        <a href="post.php" ><h1 style="color: white;font-weight: bold;">
                        <?php
                            include 'config.php';
                            $sql = "SELECT * FROM settings";
                            $result = mysqli_query($conn,$sql) or die('Query Failed');
                            $rowss = mysqli_fetch_assoc($result);
                            echo $rowss['name'];

                        ?>

                        </h1></a>
                    </div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                    <div class="col-md-offset-6  col-md-2">
                        <a href="logout.php" class="admin-logout" > Hello <?php echo $_SESSION['username'] ?><h1 class="btn btn-danger font-weight-bold">logout</h1> </a>
                    </div>
                    <!-- /LOGO-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu">
                            <li>
                                <a href="post.php">Post</a>
                            </li>
                            <?php
                                if($_SESSION['user_role'] == '1'){

                            ?>
                            <li>
                                <a href="category.php">Category</a>
                            </li>
                            <li>
                                <a href="users.php">Users</a>
                            </li>
                            <li>
                                <a href="setting.php">Setting</a>
                            </li>
                            <li>
                                <a href="http://localhost/Practice/news-template/index.php" target="_blank">Visit_Site</a>
                            </li>
                        <?php  } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->
