<?php include "header.php";
if($_SESSION['user_role'] == '0'){
   header('location:http://localhost/Practice/news-site/news-template/admin/post.php');
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
                        include 'config.php';
                          $sql = "SELECT * FROM user";
                          $run = mysqli_query($con,$sql);
                          if(mysqli_num_rows($run) > 0){
                            while($rows = mysqli_fetch_assoc($run)){

                        ?>
                          <tr>
                              <td class='id'><?php echo $rows['id']; ?></td>
                              <td><?php echo $rows['fname'] .' '. $rows['lname']; ?></td>
                              <td><?php echo $rows['username']; ?></td>
                              <td><?php echo $rows['role']; ?></td>
                              <td class='edit'><a href='update-user.php?uid=<?php echo $rows['id']; ?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-user.php?did=<?php echo $rows['id']; ?>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <?php 
                            }
                          }

                         ?>
                          
                      </tbody>
                  </table>
                  <ul class='pagination admin-pagination'>
                      <li class="active"><a>1</a></li>
                      <li><a>2</a></li>
                      <li><a>3</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
<?php include "header.php"; ?>

