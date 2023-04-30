<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:http://localhost/Practice/news-template/admin/post.php');
    }
?>

<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <h1 style="text-align: center;font-weight: bold;font-size: 4rem;margin-bottom: 32px;">Tech Edu Pro</h1>
                        <!-- Form Start -->
                        <form  action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" class="form-control" style="background-color: #2e6da4;color: white"  name="login" class="btn btn-primary" value="Login" />
                        </form>
                        <!-- /Form  End -->
                        <?php

                            include 'config.php';

                            if(isset($_POST['login'])){
                                $username =mysqli_real_escape_string($conn, $_POST['username']);
                                $Password = md5($_POST['password']);

                                $sql = "SELECT user_id,username,role FROM user WHERE username ='$username' AND password = '$Password' ";

                                $result = mysqli_query($conn,$sql) or die("Query Failed.");

                                if(mysqli_num_rows($result) > 0){

                                    while($rows = mysqli_fetch_assoc($result)){
                                        
                                        session_start();

                                        $_SESSION['username'] = $rows['username'];
                                        $_SESSION['user_id'] = $rows['user_id'];
                                        $_SESSION['user_role'] = $rows['role'];

                                        header('location:http://localhost/Practice/news-template/admin/post.php');
                                    }

                                }else{
                                    echo "<div class='alert alert-danger' >Username and Password are not matched</div>";
                                }
                            }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
