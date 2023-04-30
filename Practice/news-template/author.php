<?php include 'header.php'; ?>
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">
                    <?php
                    include 'config.php';
                    if(isset($_GET['aid'])){
                    $auth_id = $_GET['aid'];
                    }
                    $sql1 = "SELECT * FROM post JOIN user
                    ON post.author = user.user_id
                    WHERE post.author = {$auth_id} ";
                    $result1 = mysqli_query($conn,$sql1) or die("Query Failed.");
                    $row1 = mysqli_fetch_assoc($result1);
                    ?>
                    <h2 class="page-heading"><?php echo $row1['username']; ?></h2>
                    <?php
                    
                    // Calculate Offset Code
                    $limit = 4;
                    if(isset($_GET['page'])){
                    $page = $_GET['page'];
                    }else{
                    $page = 1;
                    }
                    $offset = ($page - 1 ) * $limit;
                    $sql = "SELECT post.post_id,post.title,post.description,post.post_date,category.category_name,user.username,post.category,post.post_img FROM post
                    LEFT JOIN category ON post.category = category.category_id
                    LEFT JOIN user ON post.author = user.user_id
                    WHERE post.author = {$auth_id}
                    ORDER BY post.post_id
                    DESC LIMIT {$offset} , {$limit} ";
                    $result = mysqli_query($conn,$sql) or die('Query Failed');
                    if(mysqli_num_rows($result) > 0 ){
                    while($rows = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="post-content">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="post-img" href="single.php?id=<?php echo $rows['post_id']; ?>"><img src="admin/upload/<?php echo $rows['post_img']; ?>" alt=""/></a>
                            </div>
                            <div class="col-md-8">
                                <div class="inner-content clearfix">
                                    <h3><a href='single.php?id=<?php echo $rows['post_id']; ?>'><?php echo $rows['title'];  ?></a></h3>
                                    <div class="post-information">
                                        <span>
                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                            <a href='category.php?cid=<?php echo $rows['category'];  ?>'><?php echo $rows['category_name'];  ?></a>
                                        </span>
                                         <span>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href='author.php?aid=<?php echo $rows['author'];  ?>'><?php echo $rows['username'];  ?></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <?php echo $rows['post_date'];  ?>
                                        </span>
                                    </div>
                                    <p class="description"><?php echo substr($rows['description'],0,130) . "...";?> </p>
                                    <a class='read-more pull-right' href='single.php?id=<?php echo $rows['post_id']; ?>'>read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    } //close While Loop
                    }else{
                    echo "<h2>No Record Found </h2>";
                    }
                    ?>
                    <?php
                    
                    
                    if(mysqli_num_rows($result1) > 0 ){
                    $total_records = mysqli_num_rows($result1);
                    
                    $total_page = ceil($total_records/$limit);
                    echo "<br>";
                    echo "<ul class='pagination admin-pagination'>";
                        if($page > 1){
                        echo '<li><a href= "index.php?cid='.$auth_id.'&page='.($page - 1).' ">Prev</a></li>';
                        }
                        
                        for($p = 1; $p <= $total_page; $p++ ){
                        if($p == $page){
                        $active = "active";
                        }else{
                        $active = "";
                        }
                        echo '<li class= " '.$active.' "><a href= "post.php?aid='.$auth_id.'&page= '.$p.' ">'.$p.'</a></li>';
                        }
                        if($total_page > $page){
                        echo '<li><a href= "index.php?aid='.$auth_id.'&page='.($page + 1).' ">Next</a></li>';
                        }
                        
                    echo "</ul>";
                    }
                    ?>
                    
                    </div><!-- /post-container -->
                </div>
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>