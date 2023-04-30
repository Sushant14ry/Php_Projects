<?php
	session_start();

	if(isset($_POST['search'])){
		$searchbox=$_POST['serachbox'];

		$search_query="SELECT * FROM register WHERE fname='$searchbox' OR lname='$searchbox'";
		$run_search=mysqli_query($con,$search_query);

		
	}

?>