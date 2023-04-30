<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="container">
      <h2>Test</h2>
      <?php
   include('config.php');

        $test = "SELECT * FROM team";
        $runs_team=mysqli_query($conn,$test);
        while($rowws=mysqli_fetch_assoc($runs_team)){
      ?>
      <img src="<?php echo $rowws['img'] ?>" width="200px">
      <?php
        }
      ?>
      <img src="AdminTheme/upload/dc.jpg">

    </div>
</body>
</html>