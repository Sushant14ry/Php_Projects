<?php include "header.php";

  if($_SESSION['user_role'] == '0'){
    header('location:http://localhost/Practice/news-template/admin/post.php');
  }
 ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-user.php">add user</a>
              </div>
              <div class="col-md-12">
                <?php
                  include 'config.php';

                  $limit = 3;

                  
                  if(isset($_GET['page'])){
                      $page = $_GET['page'];
                  }else{
                      $page = 1;
                  }

                  $offset = ($page - 1 ) * $limit;


                  // $i = 1; // increament Serial number

                  $sql = "SELECT * FROM user ORDER BY user_id DESC LIMIT {$offset} , {$limit}";
                  $result = mysqli_query($conn,$sql) or die('Query Failed');
                  if(mysqli_num_rows($result) > 0 ){

                ?>

                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                        <?php
                            while($rows = mysqli_fetch_assoc($result)){

                        ?>
                          <tr>
                              <td class='id'><?php echo $rows['user_id'];  ?></td>
                              <td><?php echo $rows['first_name'] . " " . $rows['last_name'];  ?></td>
                              <td><?php echo $rows['username'];  ?></td>
                              <td><?php 

                              if($rows['role'] == 1 ){
                                echo "Admin";
                              }else{
                                echo "User";
                              } ?></td>
                              <td class='edit'><a href='update-user.php?id=<?php echo $rows['user_id']; ?> '><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-user.php?id=<?php echo $rows['user_id']; ?> '><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                         <?php
                            }  // while Close 
                        ?>
                      </tbody>
                  </table>
                  <?php
                    }   // if Close
                  ?>

                  <!-- Fetch Backend Query Fininished -->



                  <!-- Backend Pagination Start -->

              <?php

                $sql1 = "SELECT * FROM user";
                $result1 = mysqli_query($conn,$sql1) or die("Query Failed.");
    
                if(mysqli_num_rows($result1) > 0 ){

                  $total_records = mysqli_num_rows($result1);
                  
                  $total_page = ceil($total_records/$limit);

                  echo "<ul class='pagination admin-pagination'>";
                  if($page > 1){
                    echo '<li><a href= "users.php?page='.($page - 1).' ">Prev</a></li>';
                  }
                  
                  for($p = 1; $p <= $total_page; $p++ ){
                    if($p == $page){
                      $active = "active";
                    }else{
                      $active = "";
                    }
                    echo '<li class= " '.$active.' "><a href= "users.php?page= '.$p.' ">'.$p.'</a></li>';

                  }
                  if($total_page > $page){
                    echo '<li><a href= "users.php?page='.($page + 1).' ">Next</a></li>';
                  }
                
                  echo "</ul>";
                }

               ?> 
                  
                  <!-- Backend Pagination End -->
                      
                  
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
