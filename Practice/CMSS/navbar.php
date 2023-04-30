	<?php
		include 'conect.php';
	?>

	<dir class="navbar">
		<div class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Nature</a></li>
				<li><a href="#">Science</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="#">About Us</a></li>
			</ul>
		</div>
		<div class="searchbox">
			<form action="search.php" method="get">
				<input type="text" size="25" name="search" placeholder=" Seach this site" class="src">

				<input type="submit" name="submit" value="Search" class="btn">
				
			</form>
		</div>

	</dir>