<?php include 'header.php'; ?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- post-container -->
                    <div class="post-container">
                        <div class="post-content">
                            <?php
                                include 'config.php';

                               $sql = "SELECT * FROM post";
                               $run = mysqli_query($con,$sql);
                               if(mysqli_num_rows($run) > 0 ){
                                while($rows = mysqli_fetch_assoc($run)){

                            ?>
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="post-img" href="single.php"><img src="admin/upload/<?php echo $rows['p_img']; ?>"  alt=""/></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="inner-content clearfix">
                                        <h3><a href='single.php'><?php echo $rows['p_title']; ?></a></h3>
                                        <div class="post-information">
                                            <span>
                                                <i class="fa fa-tags" aria-hidden="true"></i>
                                                <a href='category.php'><?php echo $rows['p_category']; ?></a>
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
                                        <p class="description">
                                            <?php echo substr($rows['p_description'],0,140)."....";

                                             ?>
                                        </p>
                                        <a class='read-more pull-right' href='single.php?open=<?php echo $rows['p_id']; ?>'>read more</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                               } 
                            ?>
                             <hr>
                        </div>

                        <br>
                        <ul class='pagination'>
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                        </ul>
                    </div><!-- /post-container -->
                </div>
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
