<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
	            include 'config.php';

	            $sql = "SELECT * FROM settings";
	                  
	             $result = mysqli_query($conn,$sql) or die('Query Failed');
	                  if(mysqli_num_rows($result) > 0 ){
	                   while($rows = mysqli_fetch_assoc($result)){   

	       	 ?>
                <span><?php echo $rows['foot_desc'];  ?></span>
                <?php  
		            }
		        }
                ?>
            <span><a href="http://localhost/Practice/news-template/admin/index.php">Login</a></span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
