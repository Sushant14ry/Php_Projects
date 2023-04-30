<?php include 'header.php'; ?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <!-- post-container -->
                    <div class="post-container">
                        <?php
                                include 'config.php';

                                $post_id = $_GET['open'];
                                
                               $sql = "SELECT * FROM post WHERE p_id = '$post_id' ";
                               $run = mysqli_query($con,$sql);
                               if(mysqli_num_rows($run) > 0 ){
                                while($rows = mysqli_fetch_assoc($run)){

                            ?>
                        <div class="post-content single-post">
                            <h3><?php echo $rows['p_title']; ?></h3>
                            <div class="post-information">
                                <span>
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                   <?php echo $rows['p_category']; ?>
                                </span>
                                <span>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <a href='author.php'><?php echo $rows['author']; ?></a>
                                </span>
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <?php echo $rows['date']; ?>
                                </span>
                            </div>
                            <img class="single-feature-image" src="admin/upload/<?php echo $rows['p_img']; ?>" alt=""/>
                            <p class="description">
                                <?php echo $rows['p_description']; ?>
                            </p>
                        </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <!-- /post-container -->
                </div>
                <hr>
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
