<?php
include 'config.php';

// session_start();
// if($_SESSION["user_role"] == '0'){
//       header("Location: {$hostname}/admin/post.php");
   $cat_id = $_GET["dl"];   

   $sql = "DELETE FROM category WHERE category_id = '{$cat_id}' ";

   if(mysqli_query($conn,$sql)){
   	header("location:http://localhost/Practice/news-template/admin/category.php");
   }


?>